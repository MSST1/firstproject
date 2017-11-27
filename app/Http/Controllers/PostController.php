<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\User;

class PostController extends Controller
{
  public function postList()
  {
    $posts = Post::all();
    // return view('pages.postList', ['content' => $posts]);Список всех постов
  }
  public function categoryShow($categoryName)
  {
    $category = Category::where('categoryName','=',$categoryName)->first();
    if ($category == null){
      abort(404);
    }
    $posts = Post::where('category_id','=',$category->id)->get();
    // return view('pages.postList',['content' => $posts]);
  }
  public function createPost()
  {
    // return view('pages.createPost');
  }
  public function savePost(Request $request, Post $post)
  {
    $this->validate($request,config('postValidation'));
    $category = Category::where('categoryName', $request->category)->first();
    $post->title = $request->title;
    $post->content = $request->text;
    $post->user_id = Auth::user()->id;
    $post->category_id = $category->id;
    $post->save();
    // return redirect('/posts');
  }
  public function showPost($id)
  {
    $post = Post::find($id);
    // return view('pages.showPost', ['post' => $post]);
  }
  public function editPost($id)
  {
    $post = Post::find($id);
    // return view('pages.editPost', ['post' => $post]);
  }
  public function updatePost(Request $request, $id)
  {
    $this->validate($request,config('postValidation'));
    $post = Post::find($id);
    $post->title = $request->title;
    $post->content = $request->text;
    $post->save();
    // return redirect('/posts');
  }
}
