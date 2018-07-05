<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create(Request $request)
    {
        //$faq = new Faq($request->all());
        $faq = new Faq();
        if($request->title) $faq->title = $request->title;
        if($request->description) $faq->description = $request->description;
        if($request->body) $faq->body = json_encode($request->body);
        if($request->en_title) $faq->en_title = $request->en_title;
        if($request->en_description) $faq->en_description = $request->en_description;
        if($request->en_body) $faq->en_body = json_encode($request->en_body);
        $faq->product_id = 0;
        $faq->save();

        return response()->json([
            'success' => true,
            'data' => $faq,
            'message'=> ""
        ], 201);
    }

    public function edit(Request $request)
    {
        $faq = Faq::findorFail($request->id);
        if($faq) {
        if($request->title) $faq->title = $request->title;
        if($request->description) $faq->description = $request->description;
        if($request->body) $faq->body = json_encode($request->body);
        if($request->en_title) $faq->en_title = $request->en_title;
        if($request->en_description) $faq->en_description = $request->en_description;
        if($request->en_body) $faq->en_body = json_encode($request->en_body);
        $faq->save();
        }

        if($faq) {
        return response()->json([
            'success' => true,
            'data' => $faq,
            'message'=> ""
        ], 201);
        } else
        {
            return response()->json([
                'success' => false,
                'data' => '',
                'message' => 'not fount'
            ], 404);
        }
    }

    public function index()
    {
        $allFaq = Faq::all();
        return $allFaq;
    }

    public function show($id)
    {
        $faq = Faq::findOrFail($id);

        return $faq;
    }
}
