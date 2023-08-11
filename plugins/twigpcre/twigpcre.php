<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class TwigPcrePlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0],
        ]);
    }

    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/twig/TwigPcreExtension.php');
        $this->grav['twig']->twig->addExtension(new TwigPcreExtension());
    }

}
