@extends('base')

@section('title')
  PostFeed
@endsection

@section('content')
<div class="col-md-8">
  <div class="row masonry" data-columns>
    @foreach($content as $post)
      @include('widgets.postCard')
    @endforeach
  </div>
</div>
@endsection
