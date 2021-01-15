<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Image;
use App\Models\Products;
use App\Models\Province;
use App\Models\Ward;
use App\Repositories\ImageRepository;
use App\Repositories\ImageRepositoryInterface;
use App\Repositories\NhaDatBanRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class NhaDatChoThueController extends Controller
{
    public function index(Request $request)
    {
        $province = isset($_GET['province']) ? $_GET['province'] : '';
        $condition_province ='';
        if($province != '') {
        $condition_province = 'AND products.province_code =' . ' ' . $province . ' ' . '';
        }

        $district = isset($_GET['district']) ? $_GET['district'] : '';
        $condition_district ='';
        if($district != '') {
        $condition_district = 'AND products.district_code =' . ' ' . $district . ' ' . '';
        }

        $price = isset($_GET['price']) ? $_GET['price'] : '';
        $condition_price = '';
        if($price != '') {
            $price_min = substr($_GET['price'], 0, 1);
            $price_max = substr($_GET['price'], 1);
            $condition_price = 'AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . '' ;
        }

        $area = isset($_GET['area']) ? $_GET['area'] : '';
        $condition_area = '';
        if($area != '') {
            $area_min = substr($_GET['area'], 0, 2);
            $area_max = substr($_GET['area'], 2);
            $condition_area = 'AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max ;
        } 
        
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $condition_search = '';
        if($search != '') {
            $condition_search = "AND title LIKE '%$search%' " ;
        }

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $result1 = DB::select(DB::raw("SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, 
        provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
            FROM products
            INNER JOIN provinces ON provinces.code = products.province_code
            INNER JOIN districts ON districts.code = products.district_code
            INNER JOIN wards ON wards.code = products.ward_code
            INNER JOIN images ON images.products_id = products.id
            WHERE menu_category_id IN (4,5,6) AND status = 1 AND deleted_at is null 
            AND CURRENT_DATE() BETWEEN started_at AND expired_at 
            $condition_province $condition_district $condition_price $condition_area  $condition_search 
            GROUP BY products.id  
            ORDER BY post_type_id DESC, products.created_at DESC"));

        $total_pages_sql = count($result1);
        // $total_rows = mysqli_fetch_array($total_pages_sql)[0];
        $total_pages = ceil($total_pages_sql / $no_of_records_per_page);
        $result = DB::select(DB::raw("SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, 
        provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
            FROM products
            INNER JOIN provinces ON provinces.code = products.province_code
            INNER JOIN districts ON districts.code = products.district_code
            INNER JOIN wards ON wards.code = products.ward_code
            INNER JOIN images ON images.products_id = products.id
            WHERE menu_category_id IN (4,5,6) AND status = 1 AND deleted_at is null 
            AND CURRENT_DATE() BETWEEN started_at AND expired_at 
            $condition_province $condition_district $condition_price $condition_area  $condition_search 
            GROUP BY products.id  
            ORDER BY post_type_id DESC, products.created_at DESC LIMIT $offset, $no_of_records_per_page"));

            $districts = District::where('parent_code', $province)->get();
            $province_name = Province::where('code', $province)->get('name');
            $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
            $count_posts = count($result);
            return view("pages.nha_dat_cho_thue.index", compact('pageno', 'total_pages','districts','result', 'provinces', 'count_posts', 'province_name'));
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
