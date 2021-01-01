<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'prod_name', 'slug', 'category_id', 'stock', 'price', 'description'
    ];
}
