<div id="cssmenu" class="align-center">
  <ul>
    <li id="homepage-link" class=""><a href="{{ route('homepage') }}"><span>Блог</span></a></li>
    <li id="postList-link" class="has-sub"><a href="{{ route('postList') }}"><span>Статьи</span></a>
      <ul>
        @foreach($categories as $category)
          <li><a href="/category/{{$category->categoryName}}"><span>{{ $category->categoryName}}</span></a></li>
        @endforeach
          <li><a href="posts/create"><span>Создать статью</span></a></li>
      </ul>
    </li>
    <li id="contact-link"  ><a href="{{ route('contacts') }}"><span>Контакты</span></a></li>
    @if (Auth::guest())
    <li class="last has-sub"><a href="{{ route('login') }}">Войти</span></a>
      <ul>
        <li ><a href="{{ route('register') }}">Зарегистрироваться</span></a></li>
      </ul>
    </li>
    @else
      <li><a href="#"><span>{{ Auth::user()->name }}</span></a>
        <ul>
          <li class="last"><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><span>Выйти</span></a></li>
          <form id="logout-form" class="" action="{{ route('logout') }}" method="post" style="display:none;">
            {{ csrf_field() }}
          </form>
        </ul>
      </li>
    @endif
  </ul>
</div>
