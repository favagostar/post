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
use Session;
use ApplicationException;
use ValidationException;

class RequestService extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'درخواست سرویس پست',
            'description' => 'کاپوننت ثبت درخواست سرویس پستی برای مشتری'
        ];
    }


    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->preVars();
    }

    public function preVars()
    {
        Session::forget('packages');

        $this->page['users'] = FrontendUser::orderBy('id')->get();
        $this->page['operators'] = BackendUser::orderBy('id')->get();
        $this->page['paymentTypes'] = PaymentType::orderBy('name')->get();
        $this->page['postTypes'] = PostType::orderbY('name')->get();
        $this->page['insurancesTypes'] = InsuranceType::orderBy('name')->get();
        $this->page['distributionTimes'] = DistributionTime::orderBy('name')->get();
        $this->page['specialServices'] = SpecialService::orderBy('name')->get();
        $this->page['packageTypes'] = PackageType::orderBy('name')->get();
    }

    public function onCreatePackage()
    {
        if (!$senderPostalCode = post('sender_postal_code')) {
            throw new ValidationException(['sender_postal_code' => 'لطفا کد پستی خود را وارد کنید.']);
        }

        if (!$senderAddress = post('sender_address')) {
            throw new ValidationException(['sender_address' => 'لطفا آدرس فرستنده را وارد کنید.']);
        }

        if (!$receiverPostalCode = post('receiver_postal_code')) {
            throw new ValidationException(['receiver_postal_code' => 'لطفا کد پستی گیرنده کنید.']);
        }

        if (!$receiverAddress = post('receiver_address')) {
            throw new ValidationException(['receiver_address' => 'لطفا آدرس گیرنده را وارد کنید.']);
        }

        if (!$weight = post('weight')) {
            throw new ValidationException(['weight' => 'لطفا وزن مرسوله  را وارد کنید.']);
        }


        if (!post('post_type_id') || post('post_type_id') == ' ') {
            throw new ValidationException(['post_type_id' => 'لطفا نوع ارسال را انتخاب کنید.']);
        }

        if (!post('package_type_id') || post('package_type_id') == ' ') {
            throw new ValidationException(['package_type_id' => 'لطفا نوع بسته را انتخاب کنید.']);
        }

        if (!post('insurance_type_id') || post('insurance_type_id') == ' ') {
            throw new ValidationException(['insurance_type_id' => 'لطفا نوع بیمه را انتخاب کنید.']);
        }


        $postTypeId = post('post_type_id');
        $packageTypeId = post('package_type_id');
        $weight = post('weight');
        $senderAddress = post('sender_address');


        $packages = Session::get("packages");


        $packages[] = [

            'sender_postal_code' => post('sender_postal_code'),
            'sender_address' => post('sender_address'),
            'receiver_postal_code' => post('receiver_postal_code'),
            'receiver_address' => post('receiver_address'),
            'post_type_id' => post('post_type_id'),
            'distribution_time_id' => post('distribution_time_id'),

            'weight' => post('weight'),
            'special_services_id' => post('special_services_id'),
            'price' => post('distribution_time_id'),
            'package_type_id' => post('package_type_id'),

            'insurance_type_id' => post('insurance_type_id'),
            'transaction_code' => post('transaction_code'),
            'points' => post('points'),

        ];

        Session::put("packages", $packages);

        $this->page['packages'] = Session::get('packages');

        $this->page['service'] = new Service;
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
}
