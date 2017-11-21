<!DOCTYPE html>
<html lang="ru">
@include('parts.__head')
  <body>
    @include('parts.__navbar')
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            @include('widgets.leftSidebar')
          </div>
          <div class="col-md-10">
            @yield('content')
          </div>
        </div>
      </div>
@include('parts.__JS')
</body>
</html>
