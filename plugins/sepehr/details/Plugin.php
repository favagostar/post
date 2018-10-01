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
			"sepehr.details.access_sex" => [
				"tab" 	=> 'اطلاعات پایه',
				"label" => 'مدیریت جنسیت ها',
				"order" => 1
			],
			"sepehr.details.access_payment_type" => [
				"tab" 	=> 'اطلاعات پایه',
				"label" => 'مدیریت انواع پرداخت',
				"order" => 2
			],
      "sepehr.details.access_package_type" => [
        "tab" 	=> 'اطلاعات پایه',
        "label" => 'مدیریت انواع بسته ها',
        "order" => 3
      ],
      "sepehr.details.access_special_service" => [
        "tab" 	=> 'اطلاعات پایه',
        "label" => 'مدیریت انواع سرویس ویژه',
        "order" => 4
      ],
      "sepehr.details.access_post_type" => [
        "tab" 	=> 'اطلاعات پایه',
        "label" => 'مدیریت انواع سرویس پست',
        "order" => 5
      ],
      "sepehr.details.access_distribution_time" => [
        "tab" 	=> 'اطلاعات پایه',
        "label" => 'مدیریت انواع سرویس ویژه',
        "order" => 6
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
                		'label' 		    => 'جنسیت',
		                'url'   		    => Backend::url('sepehr/details/sex'),
		                'icon'  	  	  => 'icon-male',
		                'permissions' 	=> ['sepehr.details.access_sex']
                	],
                	"paymentTypes" => [
                		'label' 		    => 'انواع پرداخت',
		                'url'   		    => Backend::url('sepehr/details/paymenttypes'),
		                'icon'  	  	  => 'icon-credit-card',
		                'permissions' 	=> ['sepehr.details.access_payment_type']
                	],
                  "specialServices" => [
                    'label' 		    => 'سرویس های ویژه ',
                    'url'   		    => Backend::url('sepehr/details/specialservices'),
                    'icon'  	  	  => 'icon-diamond',
                    'permissions' 	=> ['sepehr.details.access_special_service']
                  ],
                  "packageTypes" => [
                    'label' 		    => 'انواع بسته ',
                    'url'   		    => Backend::url('sepehr/details/packagetypes'),
                    'icon'  	  	  => 'icon-envelope-o',
                    'permissions' 	=> ['sepehr.details.access_package_type']
                  ],
                  "postTypes" => [
                    'label' 		    => 'انواع پست ',
                    'url'   		    => Backend::url('sepehr/details/posttypes'),
                    'icon'  	  	  => 'icon-envelope',
                    'permissions' 	=> ['sepehr.details.access_package_type']
                  ],
                  "distributionTimes" => [
                    'label' 		    => 'انواع زمان توزیع ',
                    'url'   		    => Backend::url('sepehr/details/distributiontimes'),
                    'icon'  	  	  => 'icon-clock-o',
                    'permissions' 	=> ['sepehr.details.access_distribution_time']
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
