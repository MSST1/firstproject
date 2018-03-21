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
Route::get('relations', 'MainController@relations');
Route::get('category/{categoryName}', 'PostController@categoryShow')->name('categoryShow');
Route::get('contacts', 'MainController@contacts')->name('contacts');
Route::post('feedbackSending', 'MainController@feedbackSending')->name('feedbackSending');

Route::prefix('posts')->group(function(){
  Route::get('', 'PostController@postList')->name('postList');
  Route::get('create', 'PostController@createPost')->name('createPost')->middleware('auth');
  Route::post('save', 'PostController@savePost')->name('savePost');
  Route::post('delete', 'PostController@deletePost')->name('deletePost')->middleware('auth');
  Route::get('{id}', 'PostController@showPost')->name('showPost');
  Route::get('{id}/edit', 'PostController@editPost')->name('editPost')->middleware('auth');
  Route::post('{id}/update', 'PostController@updatePost')->name('updatePost');
});

Route::get('admin', 'Admin\AdminController@index')->name('adminHomepage');
