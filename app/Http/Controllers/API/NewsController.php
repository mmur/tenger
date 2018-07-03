<?php

namespace App\Http\Controllers\API;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $data = News::all();
        return $data;
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return $news;
    }


    public function create(Request $request)
    {
        $news = new News($request->all());
        $news->save();

        return $news;
    }

    public function edit(Request $request)
    {
        $news = News::findOrFail($request->id);

        if($request->title) $news->title = $request->title;
        if($request->description) $news->description = $request->description;
        if($request->body) $news->body = $request->body;
        if($request->category) $news->category = $request->category;
        if($request->language) $news->languge = $request->language;
        $news->save();

        return $news;
    }
}
