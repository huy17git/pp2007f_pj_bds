<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Article;
use App\Models\Products;
use App\Models\District;
use App\Models\Province;
use App\Models\Slide;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index() {
        
        if (Cache::has('home_page')) {
            
            return Cache::get('home_page');
            

        } else 
        {
            
            $articles = Article::limit(6)->orderBy('id','DESC')->get();
            $i = 0;
            $j = 0;
            $k = 0;
            $l = 0;
            $districs = District::all();
            $provinces = Province::all();
    
            $banners = Slide::where('type','banner')->get();
            $sidebars = Slide::where('type','sidebar')->get();
    
            $products = Products::with('image')->limit(8)->orderBy('id','DESC')->get();
            $province1 = Province::orderBy('count_posts', 'desc')->limit(1)->get();
            $province2 = Province::orderBy('count_posts', 'desc')->skip(1)->take(2)->get();
            $province3 = Province::orderBy('count_posts', 'desc')->skip(3)->take(2)->get();
            $homepage = view('pages.index',compact('articles','i','j','k','l','products','districs','provinces','banners', 'sidebars', 'province1', 'province2', 'province3'))->render();
            
            Cache::put('home_page', $homepage, 10000);

            return $homepage;
        }

        
        
        
    }

    public function welcome()
    {   
        return view('home');
    }

    public function search()
    {
        
        return view('pages.index',compact('articles','i','j','k','l','products','districs','provinces','banners', 'sidebars', 'province1', 'province2', 'province3'));
    }

    public function changeLanguage($language)
    {   
        // dd($language);
        Session::put('website_language', $language);
        return redirect()->back();
    }

}
