<?php namespace Sepehr\Details\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PostTypes extends Controller
{
    public $implement = [        
    	'Backend\Behaviors\ListController',      
    	'Backend\Behaviors\FormController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = ['sepehr.details.access_post_type'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Sepehr.Details', 'posttype', 'post_type');
    }
}
