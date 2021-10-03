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
    return view('home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/soon', function () {
    return view('pages.soon');
});


Route::get('/fuerte', function () {
    return view('blog.fue_avocado');
});
Route::get('/grapes', function () {
    return view('blog.grapes');
});
Route::get('/hass', function () {
    return view('blog.hass_avocado');
});
Route::get('/mangoes', function () {
    return view('blog.mangoes');
});
Route::get('/navel', function () {
    return view('blog.navel_orange');
});
Route::get('/pixie', function () {
    return view('blog.pixie_orange');
});
Route::get('/pomegranates', function () {
    return view('blog.pomegranates');
});
