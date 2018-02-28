<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>adminpage</title>
    <link rel="stylesheet" href={{asset('css/adminStyles.css')}}>
    <link rel="stylesheet" href={{asset('css/bootstrap.css')}}>
    <link rel="stylesheet" href={{asset('font-awesome/css/font-awesome.css')}}>
    <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
    </script>
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
          <div id="app">
            <admin-example
              route_testuser="{{ route('admin_users.index') }}"
            ></admin-example>
          </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
