<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsFromRequest;
use App\Models\Article;

class NewsController extends Controller
{
    //

    public function listNews() {
        $news =Article::orderBy('id', 'DESC')->get();
        return view ('pages.admin.listNews', compact('news'));
    }

    public function create()
    {
        return view('pages.admin.createNews');
    }

    public function store(NewsFromRequest $NewsFromRequest){
        $news = new Article();
        $news->content = $NewsFromRequest->get('content');
        $news->title = $NewsFromRequest->get('title');
        $news->type = $NewsFromRequest->get('type');
        $news->image_link = $NewsFromRequest->get('image_link');
        $news->slug = $NewsFromRequest->get('slug');


        $mess = "";
        if($news->save()){
            $mess = "Successful add news!";
        }

        return view('pages.admin.createNews', compact('news'))->with('mess', $mess);
    }
}
