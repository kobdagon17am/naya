<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_warning extends Model
{
    protected $table = 'product_warnings';
    protected $fillable = ['detail_product_warnings'];
}
