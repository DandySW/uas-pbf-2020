<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'image_path', 'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
