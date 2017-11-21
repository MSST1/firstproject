@extends('base')

@section('title')
 {{ $post->title }}
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <h3>{{ $post->title }}</h3>
    </div>
  </div>
  <div class="col-md-8 col-md-offset-1">
    {{ $post->content }}
  </div>
@endsection
