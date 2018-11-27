<?php namespace Sepehr\Report\Controllers;

use Backend\Classes\Controller;
use Backend\Traits\InspectableContainer;
use BackendMenu;
use BackendAuth;
use ApplicationException;
use Session;
use Redirect;

/**
 * Print Service Back-end Controller
 */
class PrintService extends Controller
{
    use InspectableContainer;

    public $requiredPermissions = [
        ''
    ];

    public function __construct()
    {      
        parent::__construct();      
    }

    public function index()
    {
        $this->addCss('/plugins/sepehr/report/assets/stimulsoft/css/stimulsoft.viewer.office2013.whiteteal.css');
        $this->addJs('/plugins/sepehr/report/assets/stimulsoft/scripts/stimulsoft.reports.js');
        $this->addJs('/plugins/sepehr/report/assets/stimulsoft/scripts/stimulsoft.viewer.js');
        $this->bodyClass            = 'compact-container';
        $this->vars["data"]         = json_encode(Session::get("data"));
        $this->vars["page"]         = Session::get("page");

        if(!$this->vars["data"] || !$this->vars["page"])
        {
            return Redirect::to(url("backend"));
        }    
    }
}
