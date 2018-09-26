<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class Product
 * @package App\Models\Admin
 * @version June 7, 2018, 12:29 am UTC
 *
 * @property \App\Models\Admin\ProductImage productImage
 * @property integer category_id
 * @property string image
 * @property float price
 */
class Product extends Model
{

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'category_id',
        'image',
        'price',
        'code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'image' => 'string',
        'price' => 'float',
        'code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function productImage()
    {
        return $this->hasOne(\App\Models\Admin\ProductImage::class);
    }
}
