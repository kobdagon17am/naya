<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title',
        'new_detail_title',
        'new_pics',
        'new_date',
        'new_detail'
    ];
}
