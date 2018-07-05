<?php

namespace App\Http\Controllers\API;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        if($request->image)
        {
            $image = Image::make($request->image)->save('test.jpg');
        } else return "no image, sorry, i'll improve my error responses";
    }

    public function index()
    {
        $images = Image::all();

        return $images;
    }
}
