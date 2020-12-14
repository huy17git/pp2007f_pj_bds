<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'title', 'slug'
    ];

    
    public function image()
    {
        return $this->hasMany(Image::class, 'products_id');
    }

    public function post_type()
    {
        return $this->belongsTo(Post_type::class, 'post_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function menu_category()
    {
        return $this->belongsTo(Menu_category::class,'menu_category_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_code', 'code');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_code', 'code');
    }




}
