<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;
use Grav\Plugin\Admin\AdminBaseController;
use Grav\Plugin\LicenseManager\LicenseManager;
use Grav\Plugin\LicenseManager\LicenseManagerController;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class LicenseManagerPlugin
 * @package Grav\Plugin
 */
class LicenseManagerPlugin extends Plugin
{
    protected $admin_route = 'license-manager';
    protected $data;

    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized'  => ['onPluginsInitialized', 0],
            'onApiRegisterRoutes'   => ['onApiRegisterRoutes', 0],
            'onApiSidebarItems'     => ['onApiSidebarItems', 0],
            'onApiPluginPageInfo'   => ['onApiPluginPageInfo', 0],
        ];
    }

    /**
     * Register API routes for license management.
     */
    public function onApiRegisterRoutes(Event $event): void
    {
        $routes = $event['routes'];
        $controller = \Grav\Plugin\LicenseManager\LicenseApiController::class;

        // Static routes MUST come before parameterized routes (FastRoute constraint)
        $routes->get('/licenses', [$controller, 'index']);
        $routes->patch('/licenses', [$controller, 'saveAll']);
        $routes->post('/licenses', [$controller, 'create']);
        $routes->get('/licenses/form-data', [$controller, 'formData']);
        $routes->get('/licenses/export', [$controller, 'export']);
        $routes->post('/licenses/import', [$controller, 'import']);
        $routes->get('/licenses/products-status', [$controller, 'productsStatus']);
        $routes->post('/licenses/validate', [$controller, 'validate']);
        $routes->get('/licenses/{slug}', [$controller, 'show']);
        $routes->delete('/licenses/{slug}', [$controller, 'delete']);
    }

    /**
     * Register sidebar item for admin-next.
     */
    public function onApiSidebarItems(Event $event): void
    {
        $items = $event['items'] ?? [];
        $items[] = [
            'id'        => 'license-manager',
            'plugin'    => 'license-manager',
            'label'     => 'Licenses',
            'icon'      => 'fa-key',
            'route'     => '/plugin/license-manager',
            'priority'  => 10,
            // Matches LicenseApiController, which requires api.system.read for
            // every read endpoint. Users without it can't load the page anyway.
            'authorize' => 'api.system.read',
        ];
        $event['items'] = $items;
    }

    /**
     * Provide page definition for admin-next plugin page.
     */
    public function onApiPluginPageInfo(Event $event): void
    {
        if ($event['plugin'] !== 'license-manager') {
            return;
        }

        $event['definition'] = [
            'id'            => 'license-manager',
            'plugin'        => 'license-manager',
            'title'         => 'License Manager',
            'icon'          => 'fa-key',
            'page_type'     => 'blueprint',
            'blueprint'     => 'licenses',
            'data_endpoint' => '/licenses/form-data',
            'save_endpoint' => '/licenses',
            'actions'       => [
                [
                    'id'       => 'import',
                    'label'    => 'Import',
                    'icon'     => 'fa-upload',
                    'upload'   => true,
                    'endpoint' => '/licenses/import',
                ],
                [
                    'id'       => 'export',
                    'label'    => 'Export',
                    'icon'     => 'fa-download',
                    'download' => true,
                    'endpoint' => '/licenses/export',
                ],
                [
                    'id'      => 'save',
                    'label'   => 'Save',
                    'icon'    => 'fa-check',
                    'primary' => true,
                ],
            ],
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            // Add the menu and exclude hooks if in admin
            $this->enable([
                'onAdminMenu' => ['onAdminMenu', 0],
                'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
                'onDataTypeExcludeFromDataManagerPluginHook' => ['onDataTypeExcludeFromDataManagerPluginHook', 0],
            ]);

            // Add logic if we are in the admin plugin and in correct route
            if ($this->isPluginActiveAdmin($this->admin_route)) {

                require_once __DIR__ . '/vendor/autoload.php';

                $enc_payload = $this->grav['uri']->query('payload');

                if ($enc_payload) {
                    $yaml = json_decode(base64_decode((string) $enc_payload), true);
                    $controller = new LicenseManagerController(new AdminBaseController(), null);
                    $controller->actionAddLicense($yaml);
                }

                $this->enable([
                    'onTwigTemplatePaths' => ['onTwigAdminTemplatePaths', 0],
                    'onAdminTaskExecute' => ['onAdminTaskExecute', 0],
                ]);

                $this->loadLicenseData();
            }
        }
    }

    /**
     * Add plugin templates path
     */
    public function onTwigAdminTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/admin/templates';
    }

    /**
     * Add license data to Twig
     */
    public function onTwigSiteVariables()
    {
        if ($this->isPluginActiveAdmin($this->admin_route)) {
            // Twig shortcuts
            $this->grav['twig']->twig_vars['license_data'] = $this->data;
        } else {
            require_once __DIR__ . '/vendor/autoload.php';
            $this->grav['twig']->twig_vars['get_license_data'] = $this->loadLicenseData();
        }
    }

    /**
     * Add License Manager to admin menu
     */
    public function onAdminMenu()
    {
        $this->grav['twig']->plugins_hooked_nav['PLUGIN_LICENSE_MANAGER.TITLE'] = ['route' => $this->admin_route, 'icon' => 'fa-key'];
    }

    public function onAdminTaskExecute(Event $event)
    {
        $controller = new LicenseManagerController($event['controller'], $event['method']);

        return $controller->execute();
    }

    /**
     * Exclude Licence Manager data from the Data Manager plugin
     */
    public function onDataTypeExcludeFromDataManagerPluginHook()
    {
        $this->grav['admin']->dataTypesExcludedFromDataManagerPlugin[] = 'licenses';

    }

    public function loadLicenseData()
    {
        $this->data = LicenseManager::load();

        return $this->data;
    }
}
