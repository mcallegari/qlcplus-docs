<?php

declare(strict_types=1);

namespace Grav\Plugin\LicenseManager;

use Grav\Common\File\CompiledYamlFile;
use Grav\Common\GPM\GPM;
use Grav\Common\GPM\Licenses;
use Grav\Plugin\Api\Controllers\AbstractApiController;
use Grav\Plugin\Api\Exceptions\NotFoundException;
use Grav\Plugin\Api\Exceptions\ValidationException;
use Grav\Plugin\Api\Response\ApiResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class LicenseApiController extends AbstractApiController
{
    /**
     * GET /licenses - List all licenses.
     */
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.read');

        $all = Licenses::get();
        $licenses = [];

        foreach ($all as $slug => $license) {
            $licenses[] = [
                'slug' => $slug,
                'license' => $this->maskLicense($license),
                'valid' => Licenses::validate($license),
            ];
        }

        return ApiResponse::create($licenses);
    }

    /**
     * GET /licenses/{slug} - Get a specific license.
     */
    public function show(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.read');

        $slug = strtolower($this->getRouteParam($request, 'slug') ?? '');
        $license = Licenses::get($slug);

        if (!$license) {
            throw new NotFoundException("No license found for '{$slug}'.");
        }

        return ApiResponse::create([
            'slug' => $slug,
            'license' => $this->maskLicense($license),
            'valid' => Licenses::validate($license),
        ]);
    }

    /**
     * POST /licenses - Add or update a license.
     */
    public function create(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.write');

        $body = $this->getRequestBody($request);
        $this->requireFields($body, ['slug', 'license']);

        $slug = strtolower((string) $body['slug']);
        $license = strtoupper(trim((string) $body['license']));

        if (!Licenses::validate($license)) {
            throw new ValidationException(
                'Invalid license format. Expected: XXXXXXXX-XXXXXXXX-XXXXXXXX-XXXXXXXX',
                [['field' => 'license', 'message' => 'License must match format: 8 hex chars, repeated 4 times, separated by hyphens.']],
            );
        }

        $result = Licenses::set($slug, $license);

        if (!$result) {
            throw new ValidationException('Failed to save license.');
        }

        return ApiResponse::created(
            data: [
                'slug' => $slug,
                'license' => $this->maskLicense($license),
                'message' => "License for '{$slug}' saved successfully.",
            ],
            location: $this->getApiBaseUrl() . '/licenses/' . $slug,
        );
    }

    /**
     * DELETE /licenses/{slug} - Remove a license.
     */
    public function delete(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.write');

        $slug = strtolower($this->getRouteParam($request, 'slug') ?? '');
        $existing = Licenses::get($slug);

        if (!$existing) {
            throw new NotFoundException("No license found for '{$slug}'.");
        }

        $result = Licenses::set($slug, false);

        if (!$result) {
            throw new NotFoundException("Failed to remove license for '{$slug}'.");
        }

        return ApiResponse::noContent();
    }

    /**
     * POST /licenses/validate - Validate a license format.
     */
    public function validate(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.read');

        $body = $this->getRequestBody($request);
        $this->requireFields($body, ['license']);

        $license = strtoupper(trim((string) $body['license']));

        return ApiResponse::create([
            'license' => $this->maskLicense($license),
            'valid' => Licenses::validate($license),
        ]);
    }

    /**
     * GET /licenses/form-data — Return licenses in blueprint-compatible format (unmasked).
     */
    public function formData(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.read');

        $all = Licenses::get();

        return ApiResponse::create([
            'licenses' => is_array($all) && !empty($all) ? $all : new \stdClass(),
        ]);
    }

    /**
     * PATCH /licenses — Save all licenses (admin-next page form).
     */
    public function saveAll(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.write');

        $body = $this->getRequestBody($request);
        $licenses = $body['licenses'] ?? [];
        $invalid = [];

        if (is_array($licenses)) {
            foreach ($licenses as $slug => $license) {
                if (!is_string($license) || !Licenses::validate($license)) {
                    $invalid[] = $slug;
                }
            }
        }

        if ($invalid) {
            throw new ValidationException(
                'Invalid license format for: ' . implode(', ', $invalid),
            );
        }

        // Clear existing and set new
        $existing = Licenses::get();
        if (is_array($existing)) {
            foreach ($existing as $slug => $license) {
                Licenses::set($slug, false);
            }
        }

        if (is_array($licenses)) {
            foreach ($licenses as $slug => $license) {
                if (is_string($license) && $license !== '') {
                    Licenses::set($slug, $license);
                }
            }
        }

        return ApiResponse::create(['message' => 'Licenses saved successfully.']);
    }

    /**
     * GET /licenses/export — Download licenses.yaml.
     */
    public function export(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.read');

        $file = Licenses::getLicenseFile();
        $content = file_exists($file->filename()) ? file_get_contents($file->filename()) : '';

        return new \Grav\Framework\Psr7\Response(
            200,
            [
                'Content-Type' => 'application/x-yaml',
                'Content-Disposition' => 'attachment; filename="licenses.yaml"',
                'Cache-Control' => 'no-store',
            ],
            $content,
        );
    }

    /**
     * POST /licenses/import — Import a licenses.yaml file.
     */
    public function import(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.write');

        // Use PSR-7 uploaded files (same pattern as MediaController)
        $uploadedFiles = $request->getUploadedFiles();
        $file = $uploadedFiles['file'] ?? null;

        if (!$file || $file->getError() !== UPLOAD_ERR_OK) {
            throw new ValidationException('No file uploaded or upload error.');
        }

        $tmpPath = $file->getStream()->getMetadata('uri');

        $yaml = CompiledYamlFile::instance($tmpPath)->content();
        if (!is_array($yaml)) {
            throw new ValidationException('Invalid YAML file.');
        }

        $importLicenses = $yaml['licenses'] ?? $yaml;
        if (!is_array($importLicenses)) {
            throw new ValidationException('No licenses found in file.');
        }

        $count = 0;
        $invalid = [];
        foreach ($importLicenses as $slug => $license) {
            if (is_string($license) && Licenses::validate($license)) {
                Licenses::set($slug, $license);
                $count++;
            } else {
                $invalid[] = $slug;
            }
        }

        $message = "Imported {$count} license(s).";
        if ($invalid) {
            $message .= ' Skipped invalid: ' . implode(', ', $invalid);
        }

        return ApiResponse::create(['message' => $message]);
    }

    /**
     * GET /licenses/products-status — Installation status of licensed products.
     */
    public function productsStatus(ServerRequestInterface $request): ResponseInterface
    {
        $this->requirePermission($request, 'api.system.read');

        $licenses = Licenses::get();
        if (!is_array($licenses) || empty($licenses)) {
            return ApiResponse::create([]);
        }

        $gpm = new GPM();
        $installedPlugins = $gpm->getInstalledPlugins();
        $installedThemes = $gpm->getInstalledThemes();
        $config = $this->grav['config'];

        $statuses = [];
        foreach ($licenses as $slug => $license) {
            $isPlugin = isset($installedPlugins[$slug]);
            $isTheme = isset($installedThemes[$slug]);

            if ($isPlugin) {
                $enabled = (bool) $config->get("plugins.{$slug}.enabled", false);
                $statuses[] = [
                    'slug' => $slug,
                    'type' => 'plugin',
                    'status' => $enabled ? 'enabled' : 'disabled',
                ];
            } elseif ($isTheme) {
                $statuses[] = [
                    'slug' => $slug,
                    'type' => 'theme',
                    'status' => 'installed',
                ];
            } else {
                // Not installed locally, so consult the GPM remote repository
                // to find out whether this licensed product is a theme or a
                // plugin. Without this the type stays unknown and the admin
                // offers a plugin install for licensed themes such as Helios
                // (issue #8).
                $type = null;
                try {
                    if ($gpm->getRepositoryTheme($slug)) {
                        $type = 'theme';
                    } elseif ($gpm->getRepositoryPlugin($slug)) {
                        $type = 'plugin';
                    }
                } catch (\Throwable) {
                    // GPM unreachable or cache not writable, leave type null.
                }

                $statuses[] = [
                    'slug' => $slug,
                    'type' => $type,
                    'status' => 'not_installed',
                ];
            }
        }

        return ApiResponse::create($statuses);
    }

    /**
     * Mask a license key for display, showing only first and last segments.
     */
    private function maskLicense(string $license): string
    {
        $parts = explode('-', $license);
        if (count($parts) !== 4) {
            return '****';
        }

        return $parts[0] . '-****-****-' . $parts[3];
    }
}
