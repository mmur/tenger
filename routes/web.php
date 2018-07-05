<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/image', function()
{
    $img = Image::make('storage/td.jpg')->resize(300, 200);

    return $img->response('jpg');
});

Route::get('/image2', function()
{
    $img = Image::canvas(800, 600, '#ff0000');

    // create response and add encoded image data
    $response = Response::make($img->encode('png'));

    // set content-type
    $response->header('Content-Type', 'image/png');

    // output
    return $response;
});

