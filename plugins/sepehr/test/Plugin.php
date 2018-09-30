<?php namespace Sepehr\Test;
 
use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {	
        return [
            'name'        => 'sepehr.test::lang.plugin.name',
            'description' => 'sepehr.test::lang.plugin.description',
            'author'      => 'sepehr',
            'icon'        => 'oc-icon-android',
            'homepage'    => ''
        ];
    }

    public function registerPermissions()
    {
        return [
            'sepehr.test.access_test' => [
                'tab' 	=> 'مدیریت کاربران', 
                'label' => 'مدیریت تست',
                'order' => 2

            ],
            'sepehr.test.access_users' => [
                'tab' 	=> 'مدیریت کاربران', 
                'label' => 'مدیریت کاربران',
                'order' => 1
            ],                
        ];
    }


    public function registerNavigation()
    {
        return [
            'main' => [
                'label'       => 'کاربران',
                'url'         => Backend::url('sepehr/test/index'),
                'icon'        => 'icon-users',
                'iconSvg'     => 'plugins/sepehr/test/assets/images/atm.svg',
                'permissions' => ['sepehr.test.*'],
                'order'       => 100,
                'sideMenu' 	  => [
                    'tests' => [
                        'label'       => 'لیست تست',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('sepehr/test/tests'),
                        'permissions' => ['sepehr.test.access_test']
                    ],
                    'users' => [
                        'label'       => 'لیست کاربران',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('sepehr/test/users'),
                        'permissions' => ['sepehr.test.access_users']
                    ],                    
                ],
            ]
        ];
    }
}
