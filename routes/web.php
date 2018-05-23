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

Route::get('/', 'user\HomeController@index');

Route::get('post', 'user\PostController@index');


Route::resource('admin/post','admin\PostController');
Route::resource('admin/tag','admin\TagController');
Route::resource('admin/category','admin\CategoryController');

Route::get('admin/home', function () {
    return view('admin.home');
})->name('post'); 



