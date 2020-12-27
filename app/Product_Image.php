<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    protected $fillable = [
        'product_id', 'image_path'
    ];
}
