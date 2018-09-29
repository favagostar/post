<?php namespace Sepehr\Test\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Tests extends Controller
{
    public $implement = [        
    	'Backend\Behaviors\ListController',        
    	'Backend\Behaviors\FormController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = ['sepehr.test.access_test'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Sepehr.Test', 'main', 'tests');
    }
}
