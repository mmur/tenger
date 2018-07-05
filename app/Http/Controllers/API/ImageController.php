<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        if($request->image)
        {
            $image = Image::make($request->image)->save('storage/asd.jpg');
            return $image;
        } else return "no image, sorry, i'll improve my error responses";
    }

    public function index()
    {
        $images = Image::all();

        return $images;
    }
}
