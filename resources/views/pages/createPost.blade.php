@extends('base')

@section('title')
 Создание поста
@endsection

@section('content')
  <div class="col-md-6">
    <h1>Создать новый пост</h1>
  </div>
<form class="" action="{{route('savePost')}}" method="post">
    {{ csrf_field() }}
    <input class="form-control" type="text" name="title" placeholder="Тема поста"><br>
    @if ($errors->has('title'))
      <div class="alert alert-danger">{{ $errors->first('title') }}</div>
    @endif
    <textarea  class="form-control" name="text" rows="8" cols="80" placeholder="Текст поста"></textarea><br>
    @if ($errors->has('text'))
      <div class="alert alert-danger">{{ $errors->first('text') }}</div>
    @endif
    <div class="col-md-4 col-md-offset-4">
       <input class="form-control btn-success" type="submit" name="" value="Принять">
    </div>
</form>
@endsection
