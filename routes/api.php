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

    Route::post('get-details', 'API\PassportController@getDetails');

    Route::prefix('news')->group(function () {
        Route::post('/', 'NewsController@create');
        Route::put('/', 'NewsController@edit');
    });

    Route::prefix('faq')->group(function () {
        Route::post('/', 'FaqController@create');
        Route::post('/{id}', 'FaqController@edit');
    });

    Route::prefix('product')->group(function () {
        Route::post('/', 'ProductController@create');
        Route::post('/{id}', 'ProductController@edit');
    });

    Route::prefix('category')->group(function () {
        Route::post('/', 'CategoryController@create');
        Route::put('/', 'CategoryController@edit');
    });

});


Route::get('news/', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');


Route::get('faq', 'FaqController@index');
Route::get('faq{id}', 'FaqController@show');

Route::get('product', 'FaqController@index');
Route::get('product{id}', 'FaqController@show');

Route::get('category', 'CategoryController@index');
Route::get('category/{id}', 'CategoryController@show');
