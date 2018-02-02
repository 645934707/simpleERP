<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table = 'brand';  //定义用户表名称

    protected $fillable = [
        'id', 'brand_name', 'pid'
    ];
}
