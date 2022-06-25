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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['check_off_login'])->group(function() {
    Route::get('/admin/login', 'App\Http\Controllers\AuthController@login');
    Route::get('/admin/register', 'App\Http\Controllers\AuthController@register');
    Route::post('/admin/saveregister', 'App\Http\Controllers\AuthController@saveregister');
    Route::post('/admin/savelogin', 'App\Http\Controllers\AuthController@savelogin');
});

Route::middleware(['check_on_login'])->group(function() {
    Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard');
    Route::resource('/admin/posts', 'App\Http\Controllers\BlogController');
    Route::resource('/admin/category', 'App\Http\Controllers\CategoryController');
    Route::post('/admin/logout', 'App\Http\Controllers\AuthController@logout');
});

Route::get('/', 'App\Http\Controllers\AdminController@homepage');
Route::get('/about', 'App\Http\Controllers\AdminController@about');
Route::get('/posts', 'App\Http\Controllers\AdminController@posts');
Route::get('/view-category/{id}', 'App\Http\Controllers\AdminController@viewcategory');
Route::get('/show-post/{id}', 'App\Http\Controllers\AdminController@viewpost');
Route::get('/all-categories', 'App\Http\Controllers\AdminController@allcategory');