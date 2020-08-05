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
    return view('auth.login');
});



Auth::routes();


//pages controller
Route::get('/date',['uses' => 'PagesController@date']);
Route::get('/about',['uses' => 'PagesController@about']);
Route::get('/homepage',['uses' => 'PagesController@homepage']);
Route::get('/profilepage',['uses' => 'PagesController@profilepage']);
Route::get('/update',['uses' => 'PagesController@updatePage']);
Route::get('/complaint_form',['uses' => 'PagesController@complaint_form']);
Route::get('/opinion_form',['uses' => 'PagesController@opinion_form']);
Route::get('/student_opinion/{id}',['uses' => 'OpinionController@getInnovation']);
Route::get('/student_challange',['uses' => 'PagesController@student_challange']);
Route::get('/feedback',['uses' => 'PagesController@feedback']);


//challenge 
// Route::get('/getChallenges',['uses' => 'ChallengeController@getChallenges']);
// Route::post('/postChallenges',['uses' => 'ChallengeController@postChallenges']);

//opinion
Route::post('/postOpinion',['uses' => 'OpinionController@postOpinion']);

// //Message
Route::post('/reply',['uses' => 'MessageController@postMessage']);



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@posts')->name('posts');
