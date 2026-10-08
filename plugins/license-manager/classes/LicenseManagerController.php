<?php

namespace Grav\Plugin\LicenseManager;

use Grav\Common\File\CompiledYamlFile;
use Grav\Common\GPM\Licenses;
use Grav\Common\Grav;
use Grav\Common\Utils;
use Grav\Plugin\Admin\AdminBaseController;

/**
 * Class Controller
 * @package Grav\Plugin\LicenseManager
 */
class LicenseManagerController extends AdminBaseController
{
    protected $controller;
    protected $method;
    public $post;

    /**
     * LicenseManagerController constructor.
     *
     * @param $controller
     * @param $method
     */
    public function __construct($controller, $method)
    {
        $this->controller = $controller;
        $this->post = $controller->data;
        $this->method = $method;
        $this->grav = Grav::instance();
        $this->admin = $this->grav['admin'];
    }

    /**
     * Generic Execute function
     *
     * @return bool|mixed
     */
    public function execute()
    {
        if (!$this->authorizeTask('license-manager', ['admin.super'])) {
            return false;
        }

        $success = false;
        if (method_exists($this, $this->method)) {
            try {
                $success = call_user_func([$this, $this->method]);
            } catch (\RuntimeException $e) {
                $success = true;
                $this->admin->setMessage($e->getMessage(), 'error');
            }
        }
        return $success;
    }

    /**
     * Save License task
     *
     * @return bool
     */
    public function taskSaveLicenses()
    {
        $obj = LicenseManager::load();
        $obj->merge($this->post);

        $this->validateLicenses($obj);

        $obj->filter();
        $obj->save();

        $this->admin->setMessage($this->admin->translate('PLUGIN_ADMIN.SUCCESSFULLY_SAVED'), 'info');
    }

    protected function validateLicenses($obj)
    {
        try {
            $obj->validate();
            $invalid = [];

            if ($obj->licenses && is_array($obj->licenses)) {
                foreach ($obj->licenses as $slug => $license) {
                    if (!Licenses::validate($license)) {
                        $invalid[] = $slug;
                    }
                }
            }

            if (count($invalid)) {
                throw new \Exception($this->admin->translate('PLUGIN_LICENSE_MANAGER.INVALID_LICENSE') . ': '. implode(', ', $invalid));
            }
        } catch (\Exception $e) {
            $this->admin->setMessage($e->getMessage(), 'error');
            return false;
        }
    }

    public function taskExportLicenses()
    {
        $filename = Licenses::getLicenseFile()->filename();
        Utils::download($filename, true);
        exit();
    }

    public function taskImportLicenses()
    {

        if (isset($_FILES['uploaded_file'])) {

            // Check $_FILES['file']['error'] value.
            switch ($_FILES['uploaded_file']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $this->admin->setMessage($this->admin->translate('PLUGIN_ADMIN.NO_FILES_SENT'), 'error');
                    return false;
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    $this->admin->setMessage($this->admin->translate('PLUGIN_ADMIN.EXCEEDED_FILESIZE_LIMIT'), 'error');
                    return false;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $this->admin->setMessage($this->admin->translate('PLUGIN_ADMIN.UPLOAD_ERR_NO_TMP_DIR'), 'error');
                    return false;
                default:
                    $this->admin->setMessage($this->admin->translate('PLUGIN_ADMIN.UNKNOWN_ERRORS'), 'error');
                    return false;
            }

            $file_path = $_FILES['uploaded_file']['tmp_name'];

            $yaml = CompiledYamlFile::instance($file_path)->content();

            $this->addLicensesYaml($yaml);

        }
    }

    public function actionAddLicense($yaml)
    {
        if (!$this->authorizeTask('license-manager', ['admin.super'])) {
            return false;
        }

        $this->addLicensesYaml($yaml);
    }

    protected function addLicensesYaml($yaml)
    {
        $licenses = isset($yaml['licenses']) ? $yaml : ['licenses' => $yaml];

        $count_licenses = count($licenses['licenses']);

        $obj = LicenseManager::load();
        $licenses = Utils::arrayMergeRecursiveUnique($obj->toArray(), $licenses);
        $obj->merge($licenses);
        $this->validateLicenses($obj);
        $obj->filter();
        $obj->save();

        $this->admin->setMessage(sprintf($this->admin->translate('PLUGIN_LICENSE_MANAGER.IMPORTED_X_LICENSES'), $count_licenses), 'info');
        $this->redirect = '/license-manager';
        $this->redirect();
    }


}
