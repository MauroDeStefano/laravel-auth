@extends('layouts.app');

@section('content')

<div class="container">
 
  <h1>{{$post->title}}</h1>

  <p>{{$post->content}}</p>

  <a href="{{route('admin.posts.index')}}" class="btn btn-warning">Torna alla lista</a>

</div>


@endsection