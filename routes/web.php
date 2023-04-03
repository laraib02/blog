<?php
use App\Http\Controllers\frontendController;
use App\Http\Controllers\backendcontroller;
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

Route::get('/',[frontendController::class, 'home']);

Route::get('/services', [frontendController::class, 'services']);

Route::get('/cases', [frontendController::class, 'cases']);

Route::get('/about', [frontendController::class, 'about']);

Route::get('/pricing', [frontendController::class, 'pricing']);

Route::get('/team', [frontendController::class, 'team']);

Route::get('/faq', [frontendController::class, 'faq']);

Route::get('/404', [frontendController::class, 'error']);

Route::get('/blog', [frontendController::class, 'blog']);

Route::get('/singleblog', [frontendController::class, 'singleblog']);

Route::get('/contact', [frontendController::class, 'contact']);
//Backend pages
Route::get('/dashboard/index', [backendcontroller::class, 'index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


