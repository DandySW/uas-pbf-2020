<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'prod_name',
        'category_id',
        'stock',
        'price',
        'description'
    ];

    public $timestamps = false;
}
