<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class Category
 * @package App\Models\Admin
 * @version June 6, 2018, 11:36 pm UTC
 *
 * @property string image
 * @property string icon
 * @property integer parent_id
 */
class Category extends Model
{

    public $table = 'category';
    protected $appends = array('name');    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'icon',
    ];

    public function getName() {
        return $this->name; 
    }
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'icon' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
