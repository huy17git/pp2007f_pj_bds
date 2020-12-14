<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Province;
use App\Models\Image;

class NhaDatChoThueController extends Controller
{
    //
    public function index() {
        // filter theo thanh pho
        if (isset($_GET['tp'])) {

            $provinces = Province::all()->sortByDesc('count_posts');
            $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
            $products = Products::whereIn('menu_category_id', array(4, 5, 6))
                ->where('province_code', '=', $provinces_code)
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::whereIn('menu_category_id', array(4, 5, 6))->where('province_code', $provinces_code)->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        }
        //filter theo thanh pho + dien tich
        // elseif (isset($_GET['tp']) && isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
        //     $products = Products::whereIn('menu_category_id', array(4, 5, 6))
        //         ->where('province_code', '=', $provinces_code)
        //         ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(4, 5, 6))->where('province_code', $provinces_code)->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        // }
        // filter theo thanh pho + gia
        // elseif (isset($_GET['tp']) && isset($_GET['giamin']) && isset($_GET['giamax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
        //     $products = Products::whereIn('menu_category_id', array(4, 5, 6))
        //         ->where('province_code', '=', $provinces_code)
        //         ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(4, 5, 6))->where('province_code', $provinces_code)->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        // }
        // filter theo thanh pho + dien tich + gia
        // elseif (isset($_GET['tp']) && isset($_GET['giamin']) && isset($_GET['giamax'])  && isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
        //     $products = Products::whereIn('menu_category_id', array(4, 5, 6))
        //         ->where('province_code', '=', $provinces_code)
        //         ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
        //         ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(4, 5, 6))->where('province_code', $provinces_code)->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        // }
        // filter theo dien tich
        elseif (isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
            $provinces = Province::all()->sortByDesc('count_posts');
            $products = Products::whereIn('menu_category_id', array(4, 5, 6))
                ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::whereIn('menu_category_id', array(4, 5, 6))->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
            
        } 
        // filter theo dien tich + gia
        // elseif (isset($_GET['giamin']) && isset($_GET['giamax'])  && isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $products = Products::whereIn('menu_category_id', array(4, 5, 6))
        //         ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
        //         ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(4, 5, 6))->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
        // }
        // filter theo gia
        elseif (isset($_GET['giamin']) && isset($_GET['giamax'])) {
            $provinces = Province::all()->sortByDesc('count_posts');
            $products = Products::whereIn('menu_category_id', array(4, 5, 6))
                ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::whereIn('menu_category_id', array(4, 5, 6))->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
        }
        // khong filter
        else {
            $provinces = Province::all()->sortByDesc('count_posts');
            $products = Products::whereIn('menu_category_id', array(4, 5, 6))
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::all()->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
        }
    }

    public function nhaDatBanSinglePost($id) {
        
        $products = Products::where('id', '=', $id)->first();
        $products_area = Products::whereIn('menu_category_id', array(3, 4, 5))
        ->orderBy('post_type_id', 'desc')->orderBy('created_at', 'desc')->get();
        $images = Image::all();
        $images_area = Image::all();
        return view("pages.nhadatban.single_post", compact('products', 'images_area', 'images', 'products_area'));

    }

    public function choThueCanHo() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->where('menu_categories.name', '=', "Cho thuê căn hộ chung cư")
        ->get();
        return view("pages.nha_dat_cho_thue.index", compact('products'));
    }

    public function choThueNhaRieng() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->Where('menu_categories.name', '=', "Cho thuê nhà riêng")
        ->get();
        return view("pages.nha_dat_cho_thue.index", compact('products'));
    }

    public function choThueNhaMatPho() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->Where('menu_categories.name', '=', "Cho thuê nhà mặt phố")
        ->get();
        return view("pages.nha_dat_cho_thue.index", compact('products'));
    }
}
