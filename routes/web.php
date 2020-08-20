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



Auth::routes(['register'=>false]);


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
Route::get('/complaint_feedback',['uses' => 'PagesController@complaint_feedback']);
Route::get('/opinion_feedback',['uses' => 'PagesController@opinion_feedback']);
Route::get('/user',['uses' => 'PagesController@user']);
Route::get('/create_update',['uses' => 'PagesController@create_update']);


//complaint 
Route::post('/postComplaint',['uses' => 'ComplaintController@postComplaint']);
Route::get('/student_complaint/{id}',['uses' => 'ComplaintController@getComplaints']);
Route::get('/complaintsFeedback',['uses' => 'ComplaintController@getComplaintsMessage']);


//opinion
Route::post('/postOpinion',['uses' => 'OpinionController@postOpinion']);
Route::put('/updateReply',['uses' => 'OpinionController@updateReply']);

//resolver
Route::post('/postResolver',['uses' => 'ResolverController@postResolver']);
Route::get('/resolver',['uses' => 'ResolverController@getResolver']);
Route::post('/resolver/{id}',['uses' => 'ResolverController@editResolver']);
Route::delete('/resolver/{id}',['uses' => 'ResolverController@deleteResolver']);


// //Message
Route::post('/messageOpinion',['uses' => 'MessageController@postOpinionMessage']);
Route::post('/messageComplaint',['uses' => 'MessageController@postComplaintMessage']);
Route::post('/messageOpinion',['uses' => 'MessageController@postOpinionMessage']);

// Route::get('get/{id}',['uses' => 'OpinionController@getOpinion']);

// User
Route::post('register_user',['uses' => 'UserController@postUser']);
Route::delete('/user/{id}',['uses' => 'UserController@deleteUser']);


// Create News
Route::post('/postCreateNews',['uses' => 'Create_newsController@postCreateNews']);
Route::get('/update',['uses' => 'Create_newsController@getCreateNews']);






Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@posts')->name('posts');
