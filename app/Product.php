<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'name',
        'body',
        'picture',
        'picture_small',
        'user_id',
        'cat_id'
    ];

}
