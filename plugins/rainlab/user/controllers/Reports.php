<?php namespace Rainlab\User\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use RainLab\User\Models\User;
use Sepehr\Details\Models\Sex;

/**
 * Reports Back-end Controller
 */
class Reports extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];

    public $requiredPermissions = ['rainlab.users.main.access_reports'];

    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('RainLab.User', 'main', 'reports');
    }

    public function index()
    {
        $this->addCss('/plugins/sepehr/service/assets/css/jquery.tagit.css');
        $this->addCss('/plugins/sepehr/service/assets/css/tagit.ui-zendesk.css');
        $this->addJs('/plugins/sepehr/service/assets/js/jquery.autocomplete.js');
        $this->addJs('/plugins/sepehr/service/assets/js/tag-it.js');  

        $this->vars['sex'] = Sex::orderBy('name')->get();

        return $this->asExtension('ListController')->index();
    }

    public function onReports()
    {
        $firstName = post("first_name");
        $lastName = post("last_name");
        if(!$sex = post('sex_id'))
        {
            $sex = Sex::select('id')->get();
            $sex[] = 0;
        }        

        $users = User::
                        where('first_name', 'LIKE', "%$firstName%")
                        ->where('last_name', 'LIKE', "%$lastName%")
                        ->whereIn('sex_id', $sex)
                        ->get();
        $this->vars['users'] = $users;
    }
}
