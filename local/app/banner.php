<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banners';
    protected $fillable = ['banners_pic', 'banners_link'];
    //
}
