<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\FeedbackUserMail;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Validator;
use Session;

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
      dump(Auth::user()->id);
      return 'OK';
    }

    public function contacts()
    {
      return view('pages.contacts');
    }

    public function feedbackSending(Request $request)
    {
      $validator = Validator::make($request->all(),config('feedbackValidation'));
      if ($validator->fails()){
        Session::flash('fail', 'Данные введены неверно, пожалуйста, заполните форму еще раз');
        return redirect('/contacts')
                        ->withErrors($validator)
                        ->withInput();
      }
      Mail::to($request->email)->send(new FeedbackUserMail());
      Session::flash('success', 'Ваша заявка успешно принята, спасибо за обращение.');
      return redirect('/contacts');
    }
}
