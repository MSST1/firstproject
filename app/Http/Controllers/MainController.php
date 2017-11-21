<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function homepage()
    {
      return view('pages.home');
    }
    public function postList()
    {

      return view('pages.postList');
    }
}
