<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'prod_name', 'slug', 'category_id', 'stock', 'price', 'weight', 'image_path', 'description'
    ];

    public function category()
    {
        return $this->belongsTo('Category');
    }
}
