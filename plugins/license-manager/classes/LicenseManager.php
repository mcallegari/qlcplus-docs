<?php

namespace Grav\Plugin\LicenseManager;

use Grav\Common\Data\Blueprint;
use Grav\Common\Data\Data;
use Grav\Common\GPM\Licenses;

/**
 * Class Controller
 * @package Grav\Plugin\LicenseManager
 */
class LicenseManager
{

    protected static $data;

    protected static $blueprint = 'plugin://license-manager/admin/blueprints/licenses.yaml';

    /**
     * Load License Data object statically
     *
     * @return Data
     */
    public static function load()
    {
        if (!self::$data) {
            $blueprint = new Blueprint(self::$blueprint);
            $blueprint->load();
            $file = Licenses::getLicenseFile();
            $licenses = Licenses::get();

            $obj = new Data(['licenses' => $licenses], $blueprint);
            $obj->file($file);

            self::$data = $obj;
        }
        return self::$data;
    }

}