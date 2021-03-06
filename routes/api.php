<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\PassportController@login');

//Route::post('register', 'API\PassportController@register');

Route::group(['middleware' => 'auth:api'], function(){

    Route::prefix('faq')->group(function () {
        Route::post('/', 'API\FaqController@create');
        Route::put('/', 'API\FaqController@edit');
    });

    Route::prefix('product')->group(function () {
        Route::post('/', 'API\ProductController@create');
        Route::put('/', 'API\ProductController@edit');
    });

    Route::prefix('category')->group(function () {
        Route::post('/', 'CategoryController@create');
        Route::put('/', 'CategoryController@edit');
    });


});


Route::get('news/', 'API\NewsController@index');
Route::get('news/{id}', 'API\NewsController@show');


Route::get('faq', 'API\FaqController@index');
Route::get('faq{id}', 'API\FaqController@show');

Route::get('product', 'API\ProductController@index');
Route::get('product{id}', 'API\ProductController@show');
Route::get('specialproducts', 'API\ProductController@getSpecials');

Route::get('category', 'CategoryController@index');
Route::get('category/{id}', 'CategoryController@show');

Route::post('uploadimage', 'API\ImageController@store');

