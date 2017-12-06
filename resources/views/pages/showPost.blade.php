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
  										<h2 class="entry-title">{{ $post->title }}</a></h2>
  										<span class="cat-links"><a href="/category/{{$post->category->categoryName}}">Категория:{{ $post->category->categoryName }}</a></span>
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
                    <div class="buttons">
                       <center>
                         <a href="{{ $post->id }}/edit" class="btn btn-primary" role="button">Редактировать текст</a>
                         <a href="#" class="btn btn-danger" role="button" onclick="event.preventDefault();  document.getElementById('deletePostForm').submit();">Удалить текст</a>
                         <form id="deletePostForm" action="{{ route('deletePost') }}" method="post" style="display:none;">
                           {{ csrf_field() }}
                           <input type="hidden" name="id" value="{{ $post->id }}">
                         </form>
                       </center>
                    </div>
  								</div>
  							</article>
						</div>
					</div>
				</div>
@endsection

@section('JS')
  @include('parts.menuScripts.__postsMenu')
@endsection
