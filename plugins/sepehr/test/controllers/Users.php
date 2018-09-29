<?php namespace Sepehr\Test\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Users extends Controller
{
    public $implement = [        
    	'Backend\Behaviors\ListController',        
    	'Backend\Behaviors\FormController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = ['sepehr.test.access_users'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Sepehr.Test', 'main', 'users');
    }
}
