<?php

namespace App\Http\Controllers\API;

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
        $product->save();

        return $product;
    }

    public function index()
    {
        $products = Product::all();

        return $products;
    }

    public function getSpecials()
    {
        $specialProducts = Product::where('special', '=', true);

        return $specialProducts;
    }
}
