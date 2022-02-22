<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_key_ingredient extends Model
{
    protected $table = 'product_key_ingredients';
    protected $fillable = ['detail_product_key'];
}
