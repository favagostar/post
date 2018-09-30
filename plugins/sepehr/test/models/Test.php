<?php namespace Sepehr\Test\Models;

use Model;

/**
 * Model
 */
class Test extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'          => 'required|max:20',
        'description'   => 'required',
    ];

    public $customMessages = [
        'name.required'         => 'لطفا عنوان را وارد کنید.',
        'name.max'              => 'عنوان نمی تواند بیشتر از 20 کاراکتر باشد.',
        'description.required'  => 'لطفا توضیحات را وارد کنید.'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sepehr_test_index';
}
