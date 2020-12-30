<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'prov_name'
    ];

    public $timestamps = false;
}
