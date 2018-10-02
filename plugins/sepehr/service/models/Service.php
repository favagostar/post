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

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


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
