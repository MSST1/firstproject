<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function homepage()
    {
      $lastPosts = Post::latest('created_at')->limit(3)->get();
      return view('pages.home', ['content' => $lastPosts]); //Сюда список последних постов
    }
}
