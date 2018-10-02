<?php namespace Sepehr\Service;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            "name" => 'sepehr.service::lang.plugin.name',
            "description" => 'sepehr.service::lang.plugin.description',
            "author" => "sepehr",
            "icon" => "oc-icon-database",
            "homepage" => ''
        ];
    }


    public function registerPermissions()
    {
        return [
            "sepehr.service.*" => [
                "tab" => 'مشخصات سرویس',
                "label" => ' مدیریت سرویس ها ',
                "order" => 1
            ]
        ];
    }

    public function registerNavigation()
    {
        return [
            'services' => [
                'label' => 'سرویس',
                'url' => Backend::url('sepehr/service/services'),
                'iconSvg' => 'plugins/sepehr/service/assets/images/service.svg',
                'permissions' => ['sepehr.service.*'],
                'order' => 300,
                'sideMenu' => [
                    ''
                ]
            ]
        ];
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
