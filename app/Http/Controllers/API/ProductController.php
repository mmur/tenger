<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Products::findOrFail($id);

        return $product;
    }

    public function create(Request $request)
    {
        $product = new Product($request->all());
        if($request->category)
        {
            $category = Category::findOrFail($request->category);
            $product->category->associate($category);
        }
        $product->save();

        return $product;
    }

    public function edit(Request $request)
    {
        $product = Product::findOrFail($request->id);

        if($request->title) $product->title=$request->title;
        if($request->description) $product->description=$request->description;
        if($request->logo) $product->logo=$request->logo;
        if($request->body) $product->body=$request->body;
        if($request->en_title) $product->en_title=$request->en_title;
        if($request->en_description) $product->en_description=$request->en_description;
        if($request->en_body) $product->en_body=$request->en_body;
        if($request->special) $product->special=$request->special;

        if($request->category)
        {
            $category = Category::findOrFail($request->category);
            $product->category()->associate($category);
        }
        $product->save();

        return $product;
    }

    public function index(Request $request)
    {
        if($request->category){
            $products = Product::where('category_id', '=', $request->category)->get();
        } else
        {
            $products = Product::all();
        }

        return $products;
    }

    public function getSpecials()
    {
        $specialProducts = Product::where('special', '=', true);

        return $specialProducts;
    }
}
