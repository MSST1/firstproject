<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="">Блог</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li><a href="{{ route('postList') }}">Список постов</a></li>
  </ul>
  <div class="col-sm-4 pull-right">
  <ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
       <li><a href="{{ route('login') }}">Войти</a></li>
       <li><a href="{{ route('register') }}">Зарегистрироваться</a></li>
    @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
           {{ Auth::user()->login }} <span class="caret"></span>
          </a>
        </li>
        <li><a href="{{ route('logout') }}"onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form>
          </li>
    @endif
     </ul>
  </div>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
