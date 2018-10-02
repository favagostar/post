<?php namespace Sepehr\Service;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            "name"          => 'sepehr.service::lang.plugin.name',
            "description"   => 'sepehr.service::lang.plugin.description',
            "author"        => "sepehr",
            "icon"          => "oc-icon-database",
            "homepage"      => ''
        ];


    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
