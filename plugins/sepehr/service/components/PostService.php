<?php namespace Sepehr\Service\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use Flash;
use Redirect;
use Sepehr\Details\Models\DistributionTime;
use Sepehr\Details\Models\InsuranceType;
use Sepehr\Details\Models\PackageType;
use Sepehr\Details\Models\PaymentType;
use Sepehr\Details\Models\PostType;
use Sepehr\Details\Models\SpecialService;
use Sepehr\Service\Models\Service;
use RainLab\User\Models\User as FrontendUser;
use Backend\Models\User as BackendUser;

class PostService extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'کامپوننت سرویس پست',
            'description' => 'کاپوننت ثبت سرویس پستی برای مشتری'
        ];
    }


    public function defineProperties()
    {
        return [];
    }


    public function onSaveService()
    {

        $service = new Service();
        $service->user_id = post('user_id');
        $service->operator_id = post('operator_id');
        $service->payment_type_id = post('payment_type_id');

        $service->operator_recorded_at = Carbon::now();
        $service->operator_received_at = Carbon::now();

        $service->save();


    }


    public function onRun()
    {
        $this->page['users'] = FrontendUser::orderBy('id')->get();
        $this->page['operators'] = BackendUser::orderBy('id')->get();
        $this->page['paymentTypes'] = PaymentType::orderBy('name')->get();
        $this->page['postTypes'] = PostType::orderbY('name')->get();
        $this->page['insurancesTypes'] = InsuranceType::orderBy('name')->get();
        $this->page['distributionTimes'] = DistributionTime::orderBy('name')->get();
        $this->page['specialServices'] = SpecialService::orderBy('name')->get();
        $this->page['packageTypes'] = PackageType::orderBy('name')->get();

        $package = new Service();
        $this->page['packages'] = $package->packages;

    }
}
