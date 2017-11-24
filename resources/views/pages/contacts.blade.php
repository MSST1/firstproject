@extends('base')

@section('title')
Написать мне
@endsection

@section('content')
<div class="row">
  <div class="col-md-6">
    <h1>Написать мне</h1>
  </div>
</div>
<div class="row">
@include('widgets.flashMessages')
<form class="" action="{{route('feedbackSending')}}" method="post">
  {{ csrf_field() }}

    <div class="col-md-6">
      <h3>Ваше имя</h3>
      <input class="form-control" type="text" name="author" placeholder="Ваше имя"><br>
      @if ($errors->has('author'))
        <div class="alert alert-danger">{{ $errors->first('author') }}</div>
      @endif
    </div>
    <div class="col-md-6">
      <h3>E-mail</h3>
      <input class="form-control" type="text" name="email" placeholder="Email"><br>
      @if ($errors->has('email'))
        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
      @endif
    </div><br>
    <div class="col-md-12">
      <textarea  class="form-control" name="text" rows="8" cols="40" placeholder="Обращение"></textarea><br>
      @if ($errors->has('text'))
        <div class="alert alert-danger">{{ $errors->first('text') }}</div>
      @endif
  </div>
  <div class="col-md-4 col-md-offset-4">
     <input class="form-control btn-success" type="submit" name="" value="Принять">
  </div>
</form>
@endsection
