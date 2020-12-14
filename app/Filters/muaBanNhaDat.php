<?php

use App\Models\Province;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

Route::filter('province', function($slug){
    $province_slug = Province::where('slug', $slug)->get('slug');
    if(Input::get('slug' == $province_slug)){
        return 'Hello';
    }
});