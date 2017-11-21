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
