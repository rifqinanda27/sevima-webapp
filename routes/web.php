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

Route::get('/', 'App\Http\Controllers\AdminController@homepage');
Route::get('/about', 'App\Http\Controllers\AdminController@about');
Route::get('/tutorial', 'App\Http\Controllers\AdminController@tutorial');
Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard');

Route::resource('/admin/posts', 'App\Http\Controllers\BlogController');
Route::resource('/admin/category', 'App\Http\Controllers\CategoryController');