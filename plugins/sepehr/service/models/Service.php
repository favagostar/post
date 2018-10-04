<?php namespace Sepehr\Service\Models;

use Backend\Models\User as BackendUser;
use RainLab\User\Models\User as FrontUser;

use Model;
use Sepehr\Details\Models\DistributionTime;
use Sepehr\Details\Models\InsuranceType;
use Sepehr\Details\Models\PackageType;
use Sepehr\Details\Models\PaymentType;
use Sepehr\Details\Models\PostType;
use Sepehr\Details\Models\SpecialService;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['packages', 'postmans'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'user_id' => 'required',
        'manager_id' => 'required',
        'payment_type_id' => 'required',
        'operator_id' => 'required',

        /*'postman_id' => 'required',


        'packages.sender_postal_code' => 'required',
        'packages.sender_address' => 'required',
        'packages.receiver_address' => 'required',
        'packages.receiver_postal_code' => 'required',
        'packages.post_type_id' => 'required',
        'packages.weight' => 'required',
        'packages.package_type_id' => 'required',
        'packages.insurance_type_id' => 'required',*/


    ];

    public $customMessages = [
        'user_id.required' => 'لطفا کاربر را انتخاب نمایید',
        'manger_id.required' => 'لطفا مدیر را انتخاب نمایید',
        'payment_type_id.required' => 'لطفا نوع پرداخت را انتخاب نمایید',
        'operator_id.required' => 'لطفا اپراتور را انتخاب نمایید',


        /*'postmans.postman_id.required' => 'لطفا پستچی را انتخاب نمایید',
        'packages.sender_postal_code.required' => 'لطفا کد پستی فرستنده را وارد نمایید',
        'packages.sender_address.required' => 'لطفا آدرس فرستنده را وارد نمایید',
        'packages.receiver_address.required' => 'لطفا آدرس گیرنده را وارد نمایید',
        'packages.receiver_postal_code.required' => 'لطفا کد پستی گیرنده را وارد نمایید',
        'packages.post_type_id.required' => 'لطفا نوع پست را انتخاب نمایید',
        'packages.weight.required' => 'لطفا وزن مرسوله را وارد نمایید',
        'packages.package_type_id.required' => 'لطفا نوع بسته پستی را انتخاب نمایید',
        'packages.insurance_type_id.required' => 'لطفا نوع بیمه را انتخاب نمایید',*/

    ];

    public function beforeValidate()
    {
//        $this->rules['packages'] = 'required';
        $this->rules['postman_id'] = 'required';
        $this->rules['sender_postal_code'] = 'required';
        $this->rules['sender_address'] = 'required';
        $this->rules['receiver_address'] = 'required';
        $this->rules['receiver_postal_code'] = 'required';
        $this->rules['post_type_id'] = 'required';
        $this->rules['weight'] = 'required';
        $this->rules['package_type_id'] = 'required';
        $this->rules['insurance_type_id'] = 'required';

        foreach ($this->packages as $key => $value) {
            $this->rules['packages.' . $key . '.package_id'] = 'required';

            $this->customMessages['packages.' . $key . '.package_id.required'] = 'لطفا مدرس دوره را انتخاب کنید.';
        }
    }


    public function getUserIdOptions()
    {
        $lists = FrontUser::lists('first_name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;
    }

    public function getManagerIdOptions()
    {
        $lists = BackendUser::lists('first_name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;
    }

    public function getOperatorIdOptions()
    {
        $lists = BackendUser::lists('first_name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;
    }

    public function getPaymentTypeIdOptions()
    {
        $lists = PaymentType::lists('name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;
    }

    public function getDistributionTimeIdOptions()
    {
        $lists = DistributionTime::lists('name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;
    }

    public function getPostTypeIdOptions()
    {
        $lists = PostType::lists('name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;

    }

    public function getSpecialServicesIdOptions()
    {
        $lists = SpecialService::lists('name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;

    }

    public function getPackageTypeIdOptions()
    {
        $lists = PackageType::lists('name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;

    }

    public function getInsuranceTypeIdOptions()
    {
        $lists = InsuranceType::lists('name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;

    }

    public function getPostmanIdOptions()
    {
        $lists = FrontUser::lists('first_name', 'id');
        $list = [' ' => 'انتخاب کنید'] + $lists;
        return $list;

    }


    /**
     * @var string The database table used by the model.
     */
    public $table = 'sepehr_service_index';


}
