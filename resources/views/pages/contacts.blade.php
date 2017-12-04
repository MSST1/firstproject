@extends('base')

@section('title')
Написать мне
@endsection

@section('content')
<section class="content-box zerogrid">
		<div class="row wrap-box"><!--Start Box-->
			<h3 class="t-center" style="font-size:30px;margin: 10px 0 30px">Свяжитесь со мной!</h3>
			<div id="contact_form">
        @include('widgets.__flashMessages')
				<form name="form1" id="ff" method="post" action="{{ route('feedbackSending') }}">
          {{ csrf_field() }}
          <label class="row">
						<div class="col-1-2">
							<div class="wrap-col">
								<input type="text" name="author" id="author" placeholder="Как к вам обращаться?*" value="{{ old('author') }}"/>
							</div>
							@if ($errors->has('author'))
								<div class="alert alert-danger text-center">{{ $errors->first('author') }}</div>
							@endif
						</div>
						<div class="col-1-2">
							<div class="wrap-col">
								<input type="text" name="email" id="email" placeholder="Ваш email*" value="{{ old('email') }}"/>
							</div>
							@if ($errors->has('email'))
								<div class="alert alert-danger text-center">{{ $errors->first('email') }}</div>
							@endif
						</div>
					</label>
					<label class="row">
						<div class="wrap-col">
							<textarea name="text" id="text" class="form-control" rows="4" cols="25"
							placeholder="Текст обращения*">{{ old('text') }}</textarea>
						</div>
            @if ($errors->has('text'))
              <div class="alert alert-danger text-center">{{ $errors->first('text') }}</div>
            @endif
					</label>
					<center><input class="sendButton" type="submit" name="submitcontact" value="Отправить!"></center>
				</form>
			</div>
		</div>
</section>
@endsection

@section('JS')
<script type="text/javascript">
	let activeMenuElement = document.querySelector("#contact-link");
	activeMenuElement.classList.add("active");
</script>
	@if($errors->has('author'))
		<script>
			let erroredAuth = document.getElementById('author');;
			erroredAuth.classList.add("field-validation-error");
		</script>
	@endif
	@if($errors->has('email'))
	<script>
		let erroredEmail = document.getElementById('email');
		erroredEmail.classList.add("field-validation-error");
	</script>
	@endif
	@if($errors->has('text'))
	<script>
		let erroredText = document.getElementById('text');
		erroredText.classList.add("field-validation-error");
	</script>
	@endif
@endsection
