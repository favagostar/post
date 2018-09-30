<?php namespace Sepehr\Test\Models;

use Model;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];

    public $customMessages = [
        'name.required' => 'لطفات عنوان را وارد کنید.',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sepehr_test_tests';
}
