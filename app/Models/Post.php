<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'slug'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function tags()
    {
      return $this->hasMany('App\Models\Tag');
    }

    public function category()
    {
      return $this->belongsTo('App\Models\Category');
    }

    public function getSmallText()
    {
      $text = $this->content;
      if (strlen($text) > 100){
        $text = substr($text, 0, 100) . "...";
      }
      return $text;
    }
}
