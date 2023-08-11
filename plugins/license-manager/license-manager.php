<?php
namespace Grav\Plugin;

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
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
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
                    $yaml = json_decode(base64_decode($enc_payload), true);
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
