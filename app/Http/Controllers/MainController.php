<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\User;

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
    public function relations()
    {
      $cat = Category::find('1');
      dump($cat->categoryName);
      $catId = Category::where('categoryName', $cat->categoryName)->first();
      $catIdNull = Category::where('categoryName', 'gfdsgdfs')->first();
      dump($catId->id);
      dump($catIdNull);
      return 'OK';
    }
}
