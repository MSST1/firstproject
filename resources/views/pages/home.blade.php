@extends('base')

@section('title')
  Yet another blog
@endsection

@section('content')
<h3>Последние посты</h3>
<div class="col-md-8">
  <div class="row masonry" data-columns>
  @foreach($content as $post)
    @include('widgets.postCard')
  @endforeach
  </div>
</div>
@endsection
