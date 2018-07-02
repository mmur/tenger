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

Route::post('register', 'API\PassportController@register');

Route::group(['middleware' => 'auth:api'], function(){

    Route::post('get-details', 'API\PassportController@getDetails');


    Route::prefix('news')->group(function () {
        Route::post('/', 'NewsController@create');
        Route::post('/{id}', 'NewController@edit');
    });

});


Route::get('news/', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');
