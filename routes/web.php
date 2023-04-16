<?php
use App\Http\Controllers\frontendController;
use App\Http\Controllers\backendcontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
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
Route::get('/dashboard/home', [backendcontroller::class, 'index']);

Route::get('/students-create', [StudentController::class, 'screate']);

Route::post('/students-store', [StudentController::class, 'store']);

Route::get('/students-list', [StudentController::class, 'slist']);

Route::get('/student-destroy/{id}', [StudentController::class, 'trash']);

Route::get('/student-edit/{id}', [StudentController::class, 'edit']);

Route::post('/student-update/{id}', [StudentController::class, 'update']);

Route::get('/course-create', [CourseController::class, 'ccreate']);

Route::post('/course-store', [CourseController::class, 'cstore']);

Route::get('/course-list', [CourseController::class, 'clist']);

Route::get('/course-destroy/{id}', [CourseController::class, 'trash']);

Route::get('/course-edit/{id}', [CourseController::class, 'edit']);

Route::post('/course-update/{id}', [CourseController::class, 'update']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

