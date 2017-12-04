@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      <b><center> {{ Session::get('success') }} </center></b>
    </div>
@endif

@if (Session::has('fail'))
    <div class="alert alert-danger" role="alert">
      <b><center> {{ Session::get('fail') }} </center></b>
    </div>
@endif
