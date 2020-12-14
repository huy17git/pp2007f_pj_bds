<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Products;
use App\Models\Image;
use App\Models\Ward;
use App\Models\District;
use App\Models\Province;
use App\Models\Post_type;
use App\Models\Menu_category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function post() {
        $categories = Post_type::all();
        return view('', compact('categories'));
    }

    public function viewPost() {
        $posts = Products::orderBy('post_type_id','DESC')
        ->orderBy('started_at', 'DESC')
        ->get();
        $total_price = Products::sum('post_price');
        return view('admin.posts', compact('posts', 'total_price'));
    }

    public function schedulePost() {
        $today = date('Y-m-d');
        $posts = Products::where('started_at',$today)->orderBy('post_type_id','DESC')->get();
        return view('admin.posts', compact('posts'));
    }

    public function shelfPost($user) {

        $posts = User::find($user)->Products()->orderBy('id','DESC')->get();
        return view('admin.posts', compact('posts'));
    }

    public function editPost($id) {

        $post = Products::where('id', '=', $id)->first();
        $wards = Ward::all();
        $districts = District::all();
        $provinces = Province::all();
        $types = Post_type::all();
        $images = Image::where('products_id', '=', $id)->get();

        return view('admin.edit_post', compact('post', 'wards', 'districts', 'provinces', 'types', 'images'));
    }

    public function updatePost(Request $request, $id) {
        $post = Products::where('id', '=', $id)->first();
        $post->title = $request->get('title');
        $post->price = $request->get('price');
        $post->area = $request->get('area');
        $post->address = $request->get('address');
        $post->number_of_bedroom = $request->get('bedroom');
        $post->number_of_restroom = $request->get('restroom');
        $post->number_of_floor = $request->get('floor');
        $post->content = $request->get('content');
        $post->post_type_id = $request->get('type');
        $post->province_code = $request->get('province');
        $post->district_code = $request->get('district');
        $post->ward_code = $request->get('ward');
        $edit_mess = "";
        if ($post->save()) {
            $edit_mess = "Successfully Edited!";
        }
        return redirect()->route('editPost', [$id])->with('flash_success', 'Success');
    }
    
    public function deletePost(Request $request)
    {   
        if(is_string($request->get('post_id')))
        {
            $posts = Products::find($request->get('post_id'));
            $posts->delete();
        }
        if($request->get('post_id'))
        foreach ($request->get('post_id') as $reg) {
        $posts = Products::find($reg);
        $posts->delete();
        }

    }

    public function uploadImage(Request $request)
    {
        $product = Products::create($request->all());
        foreach ($request->photos as $photo) {
            $name = $photo->store('photos');
            Image::create([
                'products_id' => $product->id,
                'name' => $name,
                'link' => $name,
            ]);
        }
        return 'Upload successful!';
    }

    public function store(Request $request)
    {   
        $dates = strtotime($request->get('end_date'))/86400 - strtotime($request->get('start_date'))/86400;
        $typePost = $request->get('post_type');
        $moneyDay = Post_type::find($typePost)->price;
        $moneys = $dates*$moneyDay*1.1;
        $userAcount = intval(Auth::user()->account);

        if($userAcount>$moneys) {

        $userAcountUpdated = $userAcount - $moneys;
        Auth::user()->account = $userAcountUpdated;
        Auth::user()->updated_at = date('Y-m-d h:i:s');
        Auth::user()->save();

        $post = new Products();
        $post->title = $request->get('title');
        $post->type = $request->get('appearance');
        $post->menu_category_id = $request->get('category');
        $post->province_code = $request->get('province');
        $post->district_code = $request->get('district');
        $post->ward_code = $request->get('ward');
        $post->address = $request->get('email');
        $post->area = $request->get('acreage');
        $post->price = $request->get('price');
        $post->unit = $request->get('unit');
        $post->content = $request->get('content');
        $post->number_of_floor = $request->get('floors');
        $post->number_of_bedroom = $request->get('bedrooms');
        $post->post_type_id = $request->get('post_type');
        $post->started_at = Carbon::parse($request->get('start_date'));
        $post->expired_at = Carbon::parse($request->get('end_date'));
        $post->user_id = Auth::user()->id;
        $post->post_price = $moneys;
        $post->save();
        if($request->hasfile('filename'))
        {
        
           foreach($request->file('filename') as $picture)
           {
                $picture->getClientOriginalName();
                $name=$picture.$post->id; 
                $picture->move(public_path().'/assets/image/products/tmp/', $name); 
                $post_id = $post->id;
                $path="/assets/image/products".$name;
                    $image = new Image();

                    $image->products_id = $post_id;
                    $image->name = $name;
                    $image->link = $path;
                    $image->save();
           }
        }
        

        $dates = strtotime($request->get('end_date'))/86400 - strtotime($request->get('start_date'))/86400;
        $typePost = $request->get('post_type');
        $moneyDay = Post_type::find($typePost)->price;
        $moneys = $dates*$moneyDay;
        $userAcount = Auth::user()->account;
        $userAcountUpdated = $userAcount - $moneys;
        Auth::user()->account = $userAcountUpdated;
        Auth::user()->updated_at = date('Y-m-d h:i:s');
        Auth::user()->save();
        return redirect('/member/post')->with('post_success','You post success');
        } else {

            return redirect('/member/post')->with('post_error','You need to add more money to your account');
            
        }

    }

    public function trash()
    {
        $posts = Products::onlyTrashed()->orderBy('id','DESC')->get();
        return view('admin.trashPost', compact('posts'));
    }

    public function restorePost(Request $request)
    {
        $posts = Products::withTrashed()->find($request->get('post_id'))
        ->restore();
        echo view('admin.trashPost', compact('posts'));
        exit;
    }

    public function scheduleAjax(Request $request) {
        $today = Carbon::parse($request->get('date'));
        $posts = Products::where('started_at', '<=', $today)
        ->where('expired_at', '>=', $today)
        ->orderBy('post_type_id','DESC')
        ->orderBy('created_at','DESC')
        ->get();
        $total_price = $posts->sum('post_price');
        echo view('admin.ajaxposts', compact('posts', 'total_price'));

    }

    public function memberEditPost($id) {
        $user = Auth::user()->id;
        $post = DB::table('products')->find($id);
        if($post->user_id != $user) {
            return redirect()->back()->with('mess','You are not admin');
        }
        $wards = Ward::all();
        $districts = District::all();
        $provinces = Province::all();
        $types = Post_type::all();
        $images = Image::where('products_id', '=', $id)->get();

        return view('admin.edit_post', compact('post', 'wards', 'districts', 'provinces', 'types', 'images'));
    }

    public function memberUpdatePost(Request $request, $id) {
        $post = Products::where('id', '=', $id)->first();
        $post->title = $request->get('title');
        $post->price = $request->get('price');
        $post->area = $request->get('area');
        $post->address = $request->get('address');
        $post->number_of_bedroom = $request->get('bedroom');
        $post->number_of_restroom = $request->get('restroom');
        $post->number_of_floor = $request->get('floor');
        $post->content = $request->get('content');
        $post->post_type_id = $request->get('type');
        $post->province_code = $request->get('province');
        $post->district_code = $request->get('district');
        $post->ward_code = $request->get('ward');
        $edit_mess = "";
        if ($post->save()) {
            $edit_mess = "Successfully Edited!";
        }
        return redirect()->route('editPost', [$id])->with('flash_success', 'Success');
    }
}

