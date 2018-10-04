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
            ],
            "sepehr.service.access.service" => [
                "tab" => 'مشخصات سرویس',
                "label" => ' مدیریت سرویس ',
                "order" => 2
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'services' => [
                'label' => 'سرویس',
                'url' => Backend::url('sepehr/service/index'),
                'iconSvg' => 'plugins/sepehr/service/assets/images/service.svg',
                'permissions' => ['sepehr.service.*'],
                'order' => 300,
                'sideMenu' => [
                    'service'=>[
                        'label' => 'سرویس',
                        'url' => Backend::url('sepehr/service/services'),
                        'icon' => 'icon-envelope',
                        'permissions' => ['sepehr.service.*'],
                        'order' => 300,
                    ],

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
