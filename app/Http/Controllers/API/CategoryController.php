<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return $categories;
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return $category;
    }

    public function create(Request $request)
    {
        $category = new Category($request->all());
        $category->save();

        return $category;
    }


    public function edit(Request $request)
    {
        $category = Category::findOrFail($request->id);

        if($request->title) $category->title = $request->title;
        if($request->description) $category->description = $request->description;
        $category->save();

        return $category;
    }
}
