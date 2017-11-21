<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  public function postList()
  {
    $posts = Post::all();
    return view('pages.postList', ['content' => $posts]); //Список всех постов
  }
  public function createPost()
  {
    return view('pages.createPost');
  }
  public function savePost(Request $request, Post $post)
  {
    $this->validate($request,config('postValidation'));
    $post->title = $request->title;
    $post->content = $request->text;
    $post->save();
    return redirect('/posts');
  }
}
