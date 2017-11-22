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
Auth::routes();
Route::get('/', 'MainController@homepage')->name('homepage');

Route::prefix('posts')->group(function(){
  Route::get('', 'PostController@postList')->name('postList');
  Route::get('create', 'PostController@createPost')->name('createPost');
  Route::post('save', 'PostController@savePost')->name('savePost');
  Route::post('delete', 'PostController@deletePost')->name('deletePost');
  Route::get('{id}', 'PostController@showPost')->name('showPost');
  Route::get('{id}/edit', 'PostController@editPost')->name('editPost');
  Route::post('{id}/update', 'PostController@updatePost')->name('updatePost');
});
