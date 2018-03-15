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
    <div id="app">
      <admin-layout
        asset="{{ asset('public') }}"
        route_testuser="{{ route('admin_users.index') }}"
      ></admin-layout>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
