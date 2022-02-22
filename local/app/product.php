<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_name_th',
        'product_name_en',
        'product_detail',
        'product_pics',
        'capsule',
        'retail_price',
        'member_price',
        'pv',
        'FDA_No'
    ];
}
