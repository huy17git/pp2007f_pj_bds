<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTypeFromRequest;
use App\Models\Post_type;
use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    //
    public function index()
    {
        $post_types = Post_type::all();
        return view('pages.admin.post_typesIndex', compact('post_types'));
    }

    public function create()
    {
        return view('pages.admin.createPost_Types');
    }

    public function store(PostTypeFromRequest $request){
        $post_type = new Post_type();
        $post_type->name = $request->get('name');
        $post_type->price = $request->get('price');
        $post_type->unit = $request->get('unit');
        $post_type->days = $request->get('days');

        $mess = "";
        if($post_type->save()){
            $mess = "Successful add new!";
        }

        return view('pages.admin.createPost_Types', compact('post_type'))->with('mess', $mess);
    }

    public function edit($id)
    {
        $post_types = Post_type::find($id);
        return view('pages.admin.editPost_Types', compact('post_types'));
    }

    public function update(PostTypeFromRequest $request , $id)
    {
        $post_types = Post_type::find($id);
        $post_types->name = $request->get('name');
        $post_types->price = $request->get('price');
        $post_types->unit = $request->get('unit');
        $post_types->days = $request->get('days');

        $mess = '';
        if($post_types->save()){
            $mess = "Successful update!";
        };
        return view('pages.admin.editPost_Types', compact('post_types'))->with('mess', $mess);
    }

    public function delete(Request $request, $id)
    {
        $post_type = Post_type::find($id);
        $post_type->delete();
        return redirect()->route('postTypeIndex')->with('mess', 'Deleted successfully!');
    }
}
