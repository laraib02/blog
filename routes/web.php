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
    return view ('frontend.pages.home');
});

Route::get('/services', function () {
    return view ('frontend.pages.services');
});
Route::get('/cases', function () {
    return view ('frontend.pages.caeses');
});
Route::get('/about', function () {
    return view ('frontend.pages.about');
});
Route::get('/pricing', function () {
    return view ('frontend.pages.pricing');
});
Route::get('/team', function () {
    return view ('frontend.pages.team');
});
Route::get('/faq', function () {
    return view ('frontend.pages.faq');
});
Route::get('/404', function () {
    return view ('frontend.pages.404');
});
Route::get('/blog', function () {
    return view ('frontend.pages.blog');
});
Route::get('/singleblog', function () {
    return view ('frontend.pages.singleblog');
});
Route::get('/contact', function () {
    return view ('frontend.pages.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


