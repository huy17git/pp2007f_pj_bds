<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //

    public $primaryKey = 'code';
    public function product()
    {
        return $this->hasMany(Products::class, 'district_code', 'code');
    }

    public function province()
    { 
        return $this->belongsTo(Province::class, 'code');
    }

    public function wards()
    {
        return $this->hasMany(Ward::class, 'parent_code');
    }
}
