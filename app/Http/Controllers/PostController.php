<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Validator;
use Session;

class PostController extends Controller
{
  public function postList(){
    $posts = Post::all();
    return view('pages.postList', ['content' => $posts]);
  }

  public function categoryShow($categoryName){
    $category = Category::where('categoryName','=',$categoryName)->first();
    if ($category == null){
      abort(404);
    }
    $posts = Post::where('category_id','=',$category->id)->get();
    return view('pages.postList',['content' => $posts]);
  }

  public function createPost(){
    return view('pages.createPost');
  }

  public function savePost(Request $request, Post $post){
    $validator = Validator::make($request->all(),config('postValidation'));
    if ($validator->fails()){
      Session::flash('fail', 'Статья не создана!');
      return redirect('/posts/create')
                      ->withErrors($validator)
                      ->withInput();}
    $category = Category::where('categoryName', $request->category)->first();
    $post->title = $request->title;
    $post->content = $request->content;
    $post->user_id = Auth::user()->id;
    $post->category_id = $category->id;
    $post->save();
    return redirect('/posts');
  }

  public function showPost($id){
    $post = Post::findOrFail($id);
    return view('pages.showPost', ['post' => $post]);
  }

  public function editPost($id){
    $post = Post::findOrFail($id);
    return view('pages.editPost', ['post' => $post]);
  }

  public function updatePost(Request $request, $id){
    $post = Post::findOrFail($id);
    $validator = Validator::make($request->all(),config('postValidation'));
    if ($validator->fails()){
      Session::flash('fail', 'Статья не изменена');
      return redirect()->back()
                      ->withErrors($validator)
                      ->withInput();}
    $post->title = $request->title;
    $post->content = $request->content;
    $post->update();
    return redirect('/posts');
  }

  public function deletePost(Request $request){
    $post = Post::findOrFail($request->id);
    $post->delete();
    return redirect('/posts');
  }
}
