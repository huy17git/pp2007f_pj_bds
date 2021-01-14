<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\Products;
use App\Models\Image;
use App\Models\Ward;
use App\Models\District;
use App\Models\Province;
use App\Models\Post_type;
use App\Models\Menu_category;
use App\Models\User;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PostNotification;
use Pusher\Pusher;

class PostController extends Controller
{

    public function post() {
        $categories = Post_type::all();
        return view('', compact('categories'));
    }

    public function viewPost() {
        $posts = Products::orderBy('id', 'DESC')
        ->paginate(10);
        $total_posts = $posts->total();
        $post_type = Post_type::all();
        return view('admin.posts', compact('posts', 'total_posts', 'post_type'));
    }


    public function filterPost(Request $request) {

        if ($request->post_type == 'all' and $request->post_status == 'all') {
                $posts = Products::where('created_at', '>=', Carbon::now()->subDays($request->get('post_date')))
                ->where('created_at', '<=', Carbon::now())
                ->where('title', 'LIKE', '%' .$request->get('post_title') . '%')
                ->orWhere('id', $request->get('post_title'))
                ->orderBy('id', $request->get('post_id'))
                ->paginate(10)->withQueryString();
        } elseif ($request->post_type == 'all') {
        $posts = Products::where('created_at', '>=', Carbon::now()->subDays($request->get('post_date')))
        ->where('created_at', '<=', Carbon::now())
        ->where('status', $request->get('post_status'))
        ->where('title', 'LIKE', '%' .$request->get('post_title') . '%')
        ->orWhere('id', $request->get('post_title'))
        ->orderBy('id', $request->get('post_id'))
        ->paginate(10)->withQueryString();
    }   elseif ($request->post_status == 'all') {
        $posts = Products::where('created_at', '>=', Carbon::now()->subDays($request->get('post_date')))
        ->where('created_at', '<=', Carbon::now())
        ->where('post_type_id', '=', $request->get('post_type'))
        ->where('title', 'LIKE', '%' .$request->get('post_title') . '%')
        ->orWhere('id', $request->get('post_title'))
        ->orderBy('id', $request->get('post_id'))
        ->paginate(10)->withQueryString();
    } else {
            $posts = Products::where('created_at', '>=', Carbon::now()->subDays($request->get('post_date')))
            ->where('created_at', '<=', Carbon::now())
            ->where('post_type_id', '=', $request->get('post_type'))
            ->where('status', $request->get('post_status'))
            ->where('title', 'LIKE', '%' .$request->get('post_title') . '%')
            ->orWhere('id', $request->get('post_title'))
            ->orderBy('id', $request->get('post_id'))
            ->paginate(10)->withQueryString();
    }
    $total_posts = $posts->total();
    $post_type = Post_type::all();
    return view('admin.posts', compact('posts', 'total_posts', 'post_type'));
    }


    public function schedulePost() {
        $today = date('Y-m-d');
        $posts = Products::where('started_at',$today)->orderBy('post_type_id','DESC')->paginate(10);
        $total_posts = $posts->total();
        $post_type = Post_type::all();
        return view('admin.posts', compact('posts', 'total_posts', 'post_type'));
    }

    public function shelfPost($user) {
        $posts = User::find($user)->Products()->orderBy('id','DESC')->paginate(10);
        $total_posts = $posts->total();
        $post_type = Post_type::all();
        return view('admin.posts', compact('posts', 'total_posts', 'post_type'));
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
        $post = Products::find($id);
        $post->title = $request->get('title');
        $post->price = $request->get('price');
        $post->area = $request->get('area');
        $post->address = $request->get('address');
        $post->number_of_bedroom = $request->get('bedroom');
        $post->number_of_restroom = $request->get('restroom');
        $post->number_of_floor = $request->get('floor');
        $post->content = $request->get('content');
        $post->province_code = $request->get('province');
        $post->district_code = $request->get('district');
        $post->ward_code = $request->get('ward');
        $edit_mess = "Success!";
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
        return redirect()->route('editPost', [$id])->with('edit_mess', 'Successfully Edited!!!');
    }
    
    public function deleteImage(Request $request)
    {   
            $image = Image::find($request->get('image_id'));
            $image->delete();

    }

    public function verify($id)
    {
        $post = Products::where('id', '=', $id)->first();
        $post->status = 1;
        $post->save();
        return back();
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
        $post->status = 0;
        $post->started_at = Carbon::parse($request->get('start_date'));
        $post->expired_at = Carbon::parse($request->get('end_date'));
        $post->user_id = Auth::user()->id;
        $post->post_price = $moneys;
        $post->save();
        
        // Notification
        // $users = DB::table('users')->leftJoin('role_user','users.id','=','role_user.user_id')
        //                            ->leftJoin('roles','roles.id','=','role_user.role_id')
        //                            ->where('name','Admin')
        //                            ->select('users.*')
                                   ; // id user này sẻ nhận được thông báo
        $users = Role::where('name','Admin')->first()->users;
        // dd($users);
        // dd($users);
        $data = $request->only([
            'title',
            'content',
        ]);

        foreach($users as $user) {

            $user->notify(new PostNotification($data));
        };

        $data['avatar'] = Auth::user()->avatar;
        $data['username'] = Auth::user()->username;
        // dd($data);

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );

        $pusher = new Pusher(
            '9f08d9c0efa4ca8ec17f',
            '79e9faaaff38dd0157a7',
            '1128691',
            $options
        );

        $pusher->trigger('PostEvent', 'send-message', $data);
        // dd($pusher->trigger('PostEvent', 'send-message', $data));

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


    public function deletePost(Request $request)
    {   
        // if(is_string($request->get('post_id')))
        // {
            $posts = Products::find($request->get('post_id'));
            $userId = Products::find($request->get('post_id'))->user()->first()->id;
            $userAccount = User::where('id', '=', $userId)->first()->account;
            $user = User::find($userId);
            $money = Products::find($request->get('post_id'))->post_price;
            $moneyBack = $userAccount + $money;
            $user->account = $moneyBack;
            $user->save();
            $posts->delete();
        // }
        // if($request->get('post_id'))
        // foreach ($request->get('post_id') as $reg) {
        // $posts = Products::find($reg);
        // $posts->delete();
        // }

    }
    
    public function trash()
    {
        $posts = Products::onlyTrashed()->orderBy('id','DESC')->get();
        return view('admin.trashPost', compact('posts'));
    }

    public function restorePost(Request $request)
    {
        $posts = Products::withTrashed()->find($request->get('post_id'));
        $userId = Products::withTrashed()->find($request->get('post_id'))->user()->first()->id;
            $userAccount = User::where('id', '=', $userId)->first()->account;
            $user = User::find($userId);
            $money = Products::withTrashed()->find($request->get('post_id'))->post_price;
            $moneyBack = $userAccount - $money;
            $user->account = $moneyBack;
            $user->save();
        $posts->restore();
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
        // dd($post);
        if($post->user_id != $user) {
            return redirect()->back()->with('mess','You are not admin');
        }
        $post = Products::where('id', '=', $id)->first();
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
        return redirect()->route('memberEditPost', [$id])->with('edit_mess', 'Success');
    }

}

