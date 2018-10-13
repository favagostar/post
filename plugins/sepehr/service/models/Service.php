<?php namespace Sepehr\Service\Models;

use Backend\Models\User as BackendUser;
use ApplicationException;
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
    'payment_type_id' => 'required',
    'operator_id' => 'required',
    'packages' => 'required',


  ];

  public $customMessages = [
    'user_id.required' => 'لطفا کاربر را انتخاب نمایید',
    'payment_type_id.required' => 'لطفا نوع پرداخت را انتخاب نمایید',
    'operator_id.required' => 'لطفا اپراتور را انتخاب نمایید',

    'packages.required' => 'لطفا بسته های پستی خود را انتخاب نمایید'

  ];

  public function beforeValidate()
  {
    foreach ($this->packages as $key => $value) {
      $this->rules['packages.' . $key . '.sender_postal_code'] = 'required';
      $this->rules['packages.' . $key . '.sender_address'] = 'required';
      $this->rules['packages.' . $key . '.receiver_postal_code'] = 'required';
      $this->rules['packages.' . $key . '.receiver_address'] = 'required';
      $this->rules['packages.' . $key . '.post_type_id'] = 'required';
      $this->rules['packages.' . $key . '.weight'] = 'required';
      $this->rules['packages.' . $key . '.package_type_id'] = 'required';
      $this->rules['packages.' . $key . '.insurance_type_id'] = 'required';

      $this->customMessages['packages.' . $key . '.sender_postal_code.required'] = 'لطفا کد پستی فرستنده را وارد نمایید';
      $this->customMessages['packages.' . $key . '.sender_address.required'] = 'لطفا آدرس فرستنده را وارد نمایید';
      $this->customMessages['packages.' . $key . '.receiver_postal_code.required'] = 'لطفا کد پستی گیرنده را وارد نمایید';
      $this->customMessages['packages.' . $key . '.receiver_address.required'] = 'لطفا آدرس گیرنده را وارد نمایید';
      $this->customMessages['packages.' . $key . '.post_type_id.required'] = 'لطفا نوع پست را انتخاب نمایید';
      $this->customMessages['packages.' . $key . '.weight.required'] = 'لطفا وزن مرسوله را وارد نمایید';
      $this->customMessages['packages.' . $key . '.package_type_id.required'] = 'لطفا نوع بسته پستی را انتخاب نمایید';
      $this->customMessages['packages.' . $key . '.insurance_type_id.required'] = 'لطفا نوع بیمه را انتخاب نمایید.';
    }

    if ($this->postmans) {
      foreach ($this->postmans as $key => $value) {

      }
    }
  }


  public function getPostType($id)
  {
    return PostType::find($id)->name;
  }

  public function getPackageType($id)
  {
    return PackageType::find($id)->name;
  }

  public function getInsuranceType($id)
  {
    return InsuranceType::find($id)->name;
  }

  public function getSpecialService($id)
  {
    return SpecialService::find($id)->name;
  }

  public function getDistributionTime($id)
  {
    return DistributionTime::find($id)->name;
  }


  public function getUserIdOptions()
  {
    $users = FrontUser::whereIsActivated(1)
      ->orderBy('last_name')
      ->orderBy('first_name')
      ->get();

    $list = [' ' => 'انتخاب کنید'];
    if ($users->count()) {
      foreach ($users as $item) {
        $list[$item->id] = "$item->first_name ، $item->last_name" .
          ($item->national_code ? ' - ' . $item->national_code : '');
      }
    }
    return $list;
  }

  /*public function getManagerIdOptions()
  {
      $lists = BackendUser::lists('first_name', 'id');
      $list = [' ' => 'انتخاب کنید'] + $lists;
      return $list;
  }*/

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
