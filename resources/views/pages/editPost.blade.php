@extends('base')

@section('title')
  Редактирование статьи
@endsection

@section('content')
<section class="content-box zerogrid">
		<div class="row wrap-box"><!--Start Box-->
			<h3 class="t-center" style="font-size:30px;margin: 10px 0 30px">Редактирование статьи</h3>
			<div id="createPostForm">
        @include('widgets.__flashMessages')
				<form name="form1" id="ff" method="post" action="{{ route('savePost') }}">
          {{ csrf_field() }}
          <label class="row">
						<div class="wrap-col">
							<div class="wrap-col">
								<input type="text" name="title" id="title" placeholder="Тема статьи*" value="{{ $post->title }}"/>
							</div>
              @if ($errors->has('title'))
                <div class="alert alert-danger text-center">{{ $errors->first('title') }}</div>
              @endif
						</div>
						<div class="wrap-col">
							<div class="wrap-col">
                <textarea name="content" id="text" rows="4" cols="25" placeholder="Текст статьи*">{{ $post->content }}</textarea>
							</div>
              @if ($errors->has('content'))
                <div class="alert alert-danger text-center">{{ $errors->first('content') }}</div>
              @endif
						</div>
            <div class="wrap-col">
              <div class="wrap-col">
                <select class="" name="category">
                    @foreach($categories as $category)
                        <option label="" {{ $post->category->categoryName == $category->categoryName ? 'selected' : '' }}>
                          {{ $category->categoryName }}
                        </option>
                    @endforeach
                </select>
              </div>
            </div>
					</label>
					<center><input class="sendButton" type="submit" name="submitcontact" value="Отправить!"></center>
				</form>
			</div>
		</div>
</section>
@endsection

@section('JS')
<script type="text/javascript">
    let activeMenuElement = document.querySelector("#postList-link");
    activeMenuElement.classList.add("active");
</script>
@endsection
