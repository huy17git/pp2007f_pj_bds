<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Products;
use App\Models\Province;
use App\Models\Ward;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NhaDatBanController extends Controller
{
    //

    public function index()
    {
        // filter theo thanh pho
        if (isset($_GET['tp'])) {

            $provinces = Province::all()->sortByDesc('count_posts');
            $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
            $products = Products::whereIn('menu_category_id', array(1, 2, 3))
                ->where('province_code', '=', $provinces_code)
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::whereIn('menu_category_id', array(1, 2, 3))->where('province_code', $provinces_code)->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        }
        //filter theo thanh pho + dien tich
        // elseif (isset($_GET['tp']) && isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
        //     $products = Products::whereIn('menu_category_id', array(1, 2, 3))
        //         ->where('province_code', '=', $provinces_code)
        //         ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(1, 2, 3))->where('province_code', $provinces_code)->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        // }
        // filter theo thanh pho + gia
        // elseif (isset($_GET['tp']) && isset($_GET['giamin']) && isset($_GET['giamax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
        //     $products = Products::whereIn('menu_category_id', array(1, 2, 3))
        //         ->where('province_code', '=', $provinces_code)
        //         ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(1, 2, 3))->where('province_code', $provinces_code)->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        // }
        // filter theo thanh pho + dien tich + gia
        // elseif (isset($_GET['tp']) && isset($_GET['giamin']) && isset($_GET['giamax'])  && isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $provinces_code = Province::where('slug', $_GET['tp'])->get('code')->toArray();
        //     $products = Products::whereIn('menu_category_id', array(1, 2, 3))
        //         ->where('province_code', '=', $provinces_code)
        //         ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
        //         ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(1, 2, 3))->where('province_code', $provinces_code)->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products', 'provinces_code'));
        // }
        // filter theo dien tich
        elseif (isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
            $provinces = Province::all()->sortByDesc('count_posts');
            $products = Products::whereIn('menu_category_id', array(1, 2, 3))
                ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::whereIn('menu_category_id', array(1, 2, 3))->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
            
        } 
        // filter theo dien tich + gia
        // elseif (isset($_GET['giamin']) && isset($_GET['giamax'])  && isset($_GET['dtmin']) && isset($_GET['dtmax'])) {
        //     $provinces = Province::all()->sortByDesc('count_posts');
        //     $products = Products::whereIn('menu_category_id', array(1, 2, 3))
        //         ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
        //         ->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])
        //         ->orderBy('post_type_id', 'desc')
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(10);

        //     $count_products = Products::whereIn('menu_category_id', array(1, 2, 3))->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->whereBetween('area', [$_GET['dtmin'], $_GET['dtmax']])->count();
        //     return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
        // }
        // filter theo gia
        elseif (isset($_GET['giamin']) && isset($_GET['giamax'])) {
            $provinces = Province::all()->sortByDesc('count_posts');
            $products = Products::whereIn('menu_category_id', array(1, 2, 3))
                ->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::whereIn('menu_category_id', array(1, 2, 3))->whereBetween('price', [$_GET['giamin'], $_GET['giamax']])->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
        }
        // khong filter
        else {
            $provinces = Province::all()->sortByDesc('count_posts');
            $products = Products::whereIn('menu_category_id', array(1, 2, 3))
                ->orderBy('post_type_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $count_products = Products::all()->count();
            return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
        }
    }

    public function nhaDatBanSinglePost($id)
    {

        $products = Products::where('id', '=', $id)->first();
        $products_area = Products::where('district_code', $products->district_code)
        ->orderBy('post_type_id', 'desc')
        ->orderBy('created_at', 'desc')->get();
        $images = Image::where('products_id', $id)->get();
        $images_area = Image::all();
        return view("pages.nhadatban.single_post", compact('products', 'images_area', 'images', 'products_area'));
    }

    public function banCanHoChungCu()
    {
        $products = DB::table('products')
            ->join('images', 'images.products_id', '=', 'products.id')
            ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
            ->join('wards', 'wards.id', '=', 'products.wards_id')
            ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
            ->where('menu_categories.name', '=', "Bán căn hộ chung cư")
            ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaRieng()
    {
        $products = DB::table('products')
            ->join('images', 'images.products_id', '=', 'products.id')
            ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
            ->join('wards', 'wards.id', '=', 'products.wards_id')
            ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
            ->Where('menu_categories.name', '=', "Bán nhà riêng")
            ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaMatPho()
    {
        $products = DB::table('products')
            ->join('images', 'images.products_id', '=', 'products.id')
            ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
            ->join('wards', 'wards.id', '=', 'products.wards_id')
            ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
            ->Where('menu_categories.name', '=', "Bán nhà mặt phố")
            ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function district($slug)
    {
        return view("pages.nhadatban.index");
    }

}
