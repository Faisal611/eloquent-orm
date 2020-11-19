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
    return view('welcome');
});

//User create
Route::get('create_user','PostController@createUser');

//post create
Route::get('create_post','PostController@createPost');

//Data lifting
Route::get('all_post','PostController@allPost');

//parameter create
Route::get('post_id/{id}','PostController@postId');

//new post create
Route::get('add_post','PostController@addPost');

// update post
Route::get('update_post','PostController@updatePost');

//Delete post
Route::get('delete_post','PostController@deletePost');
