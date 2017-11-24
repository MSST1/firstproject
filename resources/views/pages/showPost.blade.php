@extends('base')

@section('title')
 {{ $post->title }}
@endsection

@section('content')
  <div class="row" style="min-height:100px;" >
    <div class="col-md-8 col-md-offset-1">
      <h3>{{ $post->title }}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-1" style="min-height:350px;">
      {{ $post->content }}
      <br><br>
      Категория: {{ $post->category->categoryName }}
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <a class="btn btn-primary" role="button" href="{{ $post->id }}/edit/">Редактировать текст</a><br><br>
    </div>
    <div class="col-md-2">
  </div>
@endsection
