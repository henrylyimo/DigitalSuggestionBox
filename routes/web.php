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



Auth::routes();


//pages controller
Route::get('/date',['uses' => 'PagesController@date']);
Route::get('/about',['uses' => 'PagesController@about']);
Route::get('/homepage',['uses' => 'PagesController@homepage']);
Route::get('/profilepage',['uses' => 'PagesController@profilepage']);
Route::get('/update',['uses' => 'PagesController@updatePage']);





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@posts')->name('posts');
