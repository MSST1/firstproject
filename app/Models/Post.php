<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'text', 'slug'];

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
}
