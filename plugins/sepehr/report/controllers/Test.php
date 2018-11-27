<?php namespace Sepehr\Report\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Redirect;

/**
 * Test Back-end Controller
 */
class Test extends Controller
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Sepehr.Report', 'report', 'test');
    }

    public function index()
    {

    }

    public function onPrint()
    {
        if(is_array(post("checked")) && count(post("checked")))
        {
            $checkeds = post("checked");
            foreach ($checkeds as $key => $id) {
                if(!$model = Service::find($id))
                {
                    continue;
                }

                $list['report'][] = [
                    'id' => $model->id,
                    "name" => $model->name,

                ];
            }

            return Redirect::to(url('backend/sepehr/report/printservice'))->with(["data" => $list, "page" => 'report']);
        }
        else
        {
            
        }

    }
}
