<?php

namespace App\Http\Controllers\API;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create()
    {
        $faq = new Faq($request->all());
        $faq->save();

        return $faq;
    }

    public function edit(Request $request)
    {
        $faq = Faq::findorFail($request->id);
        if($request->title) $faq->title = $request->title;
        if($request->description) $faq->description = $request->description;
        if($request->category) $faq->category = $request->category;
        if($request->body) $faq->body = $request->body;
        $faq->save();

        return $faq;
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
