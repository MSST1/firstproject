@extends('base')

@section('title')
  {{ $post->title }}
@endsection

@section('content')
<div id="main-content">
					<div class="wrap-content">
						<div class="row">
  							<article class="single-post zerogrid">
  								<div class="row wrap-post"><!--Start Box-->
  									<div class="entry-header">
  										<span class="time">{{ $post->updated_at }}</span>
  										<h2 class="entry-title"><a href="#">{{ $post->title }}</a></h2>
  										<span class="cat-links"><a href="#">Категория:{{ $post->category->categoryName }}</a></span>
                      <!-- <span class="cat-links"></span> Сюда запихнёшь теги(Когда доделаешь!)-->
  									</div>
  									<div class="post-thumbnail-wrap">
                      @if($post->imgSrc != null)
  										  <img src="{{ $post->imgSrc }}"> <!-- Ну или как там фотка из стораджа достается -->
                      @else
                        <img src="http://placehold.it/640x320">
                      @endif
  									</div>
  									<div class="entry-content">
  										<p>{{ $post->content }}</p>
  									</div>
  								</div>
  							</article>
						</div>
					</div>
				</div>
@endsection
