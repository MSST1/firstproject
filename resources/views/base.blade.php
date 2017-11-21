<!DOCTYPE html>
<html lang="ru">
@include('parts.__head')
  <body>
    @include('parts.__navbar')
      <div class="container">
        @yield('content')
      </div>
@include('parts.__JS')
</body>
</html>
