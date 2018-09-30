<?php namespace Sepehr\Details;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
			"name" 			=> 'sepehr.details::lang.plugin.name',
			"description" 	=> 'sepehr.details::lang.plugin.description',
		    "author" 		=> "sepehr",
		    "icon" 			=> "oc-icon-database",
		    "homepage" 		=> ''			
		];
	}

	public function registerPermissions()
	{
		return [
			"sepehr.details.access_sex" => [
				"tab" => 'اطلاعات پایه',
				"label" => 'مدیریت جنسیت ها',
				"order" => 1
			],
			"sepehr.details.access_payment_type" => [
				"tab" => 'اطلاعات پایه',
				"label" => 'مدیریت انواع پرداخت',
				"order" => 2
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
                	"sex" => [
                		'label' 		=> 'جنسیت',
		                'url'   		=> Backend::url('sepehr/details/sex'),
		                'icon'  	  	=> 'icon-male',
		                'permissions' 	=> ['sepehr.details.access_sex']
                	],
                	"paymentType" => [
                		'label' 		=> 'انواع پرداخت',
		                'url'   		=> Backend::url('sepehr/details/sex'),
		                'icon'  	  	=> 'icon-credit-card',
		                'permissions' 	=> ['sepehr.details.access_payment_type']
                	]
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
