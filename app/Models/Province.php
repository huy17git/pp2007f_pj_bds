<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    public $primaryKey = 'code';
    protected $fillable = [
        'name',
        'slug',
        'type',
        'name_with_code',
        'code',
    ];

    public function product()
    {
        return $this->hasMany(Products::class, 'province_code', 'code');
    }


    public function districts()
    {
        return $this->hasMany('App\Model\District','parent_code', 'code');
    }
}
