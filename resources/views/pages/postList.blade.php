@extends('base')

@section('title')
  PostFeed
@endsection

@section('content')
<div class="col-md-8">
  <div class="row masonry" data-columns>
    @foreach($content as $post)
      <a href="posts/{{$post->id}}"><div class="item">
        <div class="thumbnail">
          @if( isset($post->image) )
          <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-responsive">
          @else
          <img src="http://placehold.it/600x340" alt="" class="img-responsive">
          @endif
          <div class="caption">
            <center><h3>{{ $post->title }}</h3><center>
          </div>
        </div>
      </div></a>
    @endforeach
  </div>
</div>
@endsection
