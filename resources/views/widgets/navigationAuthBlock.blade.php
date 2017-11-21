<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
     <li><a href="{{ route('login') }}">Войти</a></li>
     <li><a href="{{ route('register') }}">Зарегистрироваться</a></li>
  @else
      <li>
         <a href="#">{{ Auth::user()->name }}</a> <!-- А здесь( в теории) будет личный кабинет -->
      </li>
      <li><a href="{{ route('logout') }}"onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form>
        </li>
  @endif
   </ul>
