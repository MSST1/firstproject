@extends('base')

@section('content')
<section class="content-box zerogrid">
  <div class="row wrap-box">
    <h4 class="t-center">Авторизация</h4>
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="wrap-col">
              <label for="email" class="">E-mail</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))

              @endif
            </div>
          </div>
          <div class="row">
            <div class="wrap-col">
              <label for="password" class="">Пароль</label>
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))

              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-1-4" style="margin-left: 5px">
                <label for="remember"> Запомнить меня</label>
            </div>
            <div class="col-1-4">
                <input id="remember" style="margin-top:13px" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Войти
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
            </div>
          </div>
      </form>
</div>
</section>
@endsection
