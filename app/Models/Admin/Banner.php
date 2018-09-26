<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class Banner
 * @package App\Models\Admin
 * @version June 6, 2018, 10:23 am UTC
 *
 * @property integer criteria
 * @property integer location
 * @property string route
 * @property string image
 */
class Banner extends Model
{

    public $table = 'banner';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'criteria',
        'location',
        'route',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'criteria' => 'integer',
        'location' => 'integer',
        'route' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
           'image' => 'required',
    ];

    
}
