<?php namespace Sepehr\Message;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{

	public function pluginDetails()
	{
		return [
			"name" 			=> 'sepehr.message::lang.plugin.name',
			"description" 	=> 'sepehr.message::lang.plugin.description',
		    "author" 		=> "sepehr",
		    "icon" 			=> "oc-icon-bell",
		    "homepage" 		=> ''
			];
	}

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerNavigation()
	{
		return [
            'messages' => [
                'label'       => 'مدیریت پیام ها',
                'url'         => Backend::url('sepehr/message/index'),
                'icon'        => 'oc-icon-bell',
                'iconSvg'     => 'plugins/sepehr/details/assets/images/checked.svg',
                'permissions' => ['sepehr.message.access_message'],
                'order'       => 300,
                'sideMenu' 	  => [
                	"message" => [
                		'label' 		=> 'پیام ها',
		                'url'   		=> Backend::url('sepehr/message/messages'),
		                'icon'  	  	=> 'oc-icon-bell',
                    	'attributes'    => ['data-menu-item'=>'message'],
		                'permissions' 	=> ['sepehr.message.access_message']
                	]
                ]
			]
		];
	}

	public function registerPermissions()
	{
		return [
      //users
  			"sepehr.details.users.access_message" => [
  				"tab" 	=> 'اطلاعات پایه اشخاص',
  				"label" => 'ممدیریت پیام ها',
  				"order" => 1
  			]
  		];
  	}

}
