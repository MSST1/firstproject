<a href="/posts/{{$post->id}}"><div class="item">
  <div class="thumbnail" style="min-height:220px; min-width:120px">
    @if( isset($post->image) )
    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-responsive">
    @else
    <img src="http://placehold.it/600x340" alt="" class="img-responsive">
    @endif
    <div class="caption">
      <center><h4>{{ $post->title }}</h4><center>
    </div>
  </div>
</div></a>
