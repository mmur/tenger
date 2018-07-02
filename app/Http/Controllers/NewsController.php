<?php

namespace App\Http\Controllers;

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
}
