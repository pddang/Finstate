<?php

use Illuminate\Support\Facades\Route;

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
    $listings = App\Property::all();
    return view('home',[
        'listings' => $listings
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/properties/{property}', 'PropertiesController@show');
Route::get('/properties', 'PropertiesController@index');

