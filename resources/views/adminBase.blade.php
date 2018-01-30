<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>adminpage</title>
    <link rel="stylesheet" href={{asset('css/adminStyles.css')}}>
    <link rel="stylesheet" href={{asset('font-awesome/css/font-awesome.css')}}>
  </head>
  <body>
    <div class="menu">
      <div class="logo">
      </div>
      <div class="sidebarMenu">
        <div class="menuItem">
          <span class="fa fa-user fa-2x"></span><br>
          users
        </div>
        <div class="menuItem">
          <span class="fa fa-trash fa-2x"></span><br>
          posts
        </div>
      </div>
    </div>
    <div class="topMenu">
      topmenu
    </div>
    <div class="content">
          @yield('content')
    </div>

  </body>
</html>
