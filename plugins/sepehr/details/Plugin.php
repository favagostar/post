<?php namespace Sepehr\Details;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
			"name" 			    => 'sepehr.details::lang.plugin.name',
			"description" 	=> 'sepehr.details::lang.plugin.description',
      "author" 		    => "sepehr",
      "icon" 			    => "oc-icon-database",
      "homepage" 		  => ''
		];
	}

	public function registerPermissions()
	{
		return [
      //users
  			"sepehr.details.users.access_sex" => [
  				"tab" 	=> 'اطلاعات پایه اشخاص',
  				"label" => 'مدیریت جنسیت ها',
  				"order" => 1
  			],

      //financial
  			"sepehr.details.financial.access_payment_type" => [
  				"tab" 	=> 'اطلاعات پایه مالی و حسابداری',
  				"label" => 'مدیریت انواع پرداخت',
  				"order" => 1
  			],

      //post
        "sepehr.details.post.access_package_type" => [
          "tab" 	=> 'اطلاعات پایه بسته های پستی',
          "label" => 'مدیریت انواع بسته ها',
          "order" => 1
        ],
        "sepehr.details.post.access_special_service" => [
          "tab"   => 'اطلاعات پایه بسته های پستی',
          "label" => 'مدیریت انواع سرویس ویژه',
          "order" => 2
        ],
        "sepehr.details.post.access_post_type" => [
          "tab"   => 'اطلاعات پایه بسته های پستی',
          "label" => 'مدیریت انواع سرویس پست',
          "order" => 3
        ],
        "sepehr.details.post.access_distribution_time" => [
          "tab"   => 'اطلاعات پایه بسته های پستی',
          "label" => 'مدیریت انواع زمان توزیع',
          "order" => 4
        ],

		];
	}

	public function registerNavigation()
	{
		return [
            'details' => [
                'label'       => 'اطلاعات پایه',
                'url'         => Backend::url('sepehr/details/index'),
                'icon'        => 'icon-database',
                'iconSvg'     => 'plugins/sepehr/details/assets/images/checked.svg',
                'permissions' => ['sepehr.details.*'],
                'order'       => 300,
                'sideMenu' 	  => [
                	"users" => [
                		'label' 		    => 'اشخاص',
		                'url'   		    => 'javascript:;',
		                'icon'  	  	  => 'icon-male',
                    'attributes'    => ['data-menu-item'=>'users'],
		                'permissions' 	=> ['sepehr.details.users.*']
                	],
                  "financial" => [
                    'label'         => 'مالی و حسابداری',
                    'url'           => 'javascript:;',
                    'icon'          => 'icon-calculator',
                    'attributes'    => ['data-menu-item'=>'financial'],
                    'permissions'   => ['sepehr.details.financial.*']
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
