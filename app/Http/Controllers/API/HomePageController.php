<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function show()
    {
        $page = HomePage::find(1);
        $news = News::orderBy('created_at', desc)->take(10)->get();
        $slider = Slider::find($page->slider_id);
        $claim = [
            "claim_title" => $page->stat_title
        ];
    }

    public function edit(Request $request)
    {
        $page = HomePage::find(1);
        if($request->contact_phone)$page->contact_phone = $request->contact_phone;
        if($request->stat_title)$page->stat_title = $request->stat_title;
        if($request->en_stat_title)$page->en_stat_title = $request->en_stat_title;
        if($request->slider_id)$page->slider_id = $request->slider_id;
        if($request->image_id)$page->image_id = $request->image_id;
        if($request->stat1_text)$page->stat1_text = $request->stat1_text;
        if($request->stat2_text)$page->stat2_text = $request->stat2_text;
        if($request->stat3_text)$page->stat3_text = $request->stat3_text;
        if($request->stat4_text)$page->stat4_text = $request->stat4_text;
        if($request->stat5_text)$page->stat5_text = $request->stat5_text;
        if($request->en_stat1_text)$page->en_stat1_text = $request->en_stat1_text;
        if($request->en_stat2_text)$page->en_stat2_text = $request->en_stat2_text;
        if($request->en_stat3_text)$page->en_stat3_text = $request->en_stat3_text;
        if($request->en_stat4_text)$page->en_stat4_text = $request->en_stat4_text;
        if($request->en_stat5_text)$page->en_stat5_text = $request->en_stat5_text;
        if($request->stat1_number)$page->stat1_number = $request->stat1_number;
        if($request->stat1_number)$page->stat1_number = $request->stat1_number;
        if($request->stat1_number)$page->stat1_number = $request->stat1_number;
        if($request->stat1_number)$page->stat1_number = $request->stat1_number;
        if($request->stat1_number)$page->stat1_number = $request->stat1_number;
        $page->save();

        return response()->json([
            'success' => true,
            'data' => $page,
            'message' => ''
        ], 200);
    }
}
