@extends('base')

@section('content')
<section class="content-box zerogrid">
  <div class="row wrap-box">
    <h4 class="t-center">Регистрация</h4>
    <form class="" action="{{ route('register') }}" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="wrap-col">
          <label for="name">Логин</label>
          <input type="text" id="name" class="" name="name" value="{{ old('name') }}">
        </div>
        @if($errors->has('name'))
          {{ $errors->first('name') }}
        @endif
      </div>
      <div class="row">
        <div class="wrap-col">
          <label for="email">Адрес электроной почты</label>
          <input type="text" id="email" class="" name="email" value="{{ old('email') }}">
          @if ($errors->has('email'))
            {{ $errors->first('email') }}
          @endif
        </div>
      </div>
      <div class="row">
        <div class="wrap-col">
          <label for="password" class="">Пароль</label>
          <input id="password" type="password" class="form-control" name="password" required>
          @if ($errors->has('password'))
            {{ $errors->first('password') }}
          @endif
        </div>
      </div>
      <div class="row">
        <div class="wrap-col">
          <label for="password-confirm" class="">Ещё раз пароль</label>
          <div class="col-md-6">
              <input id="password-confirm" type="password" class="" name="password_confirmation" required>
          </div>
        </div>
        <div class="row">
          <div class="col-1-2 offset-1-4">
            <button type="submit" class="btn btn-primary">
                Зарегистрироваться
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
