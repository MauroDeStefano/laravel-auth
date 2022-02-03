@extends('layouts.app');

@section('content')

<div class="container">
  <h1>Elenco di post presenti nel server</h1>
  <a href="{{route('admin.posts.create')}}" class="btn btn-primary m-5">Nuovo</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Contenuto</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
     <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td class="row">
        <a class="btn btn-success w-100 mb-2" href="">EDIT</a>
        <a class="btn btn-danger w-100" href="">DELETE</a>
      </td>
    </tr> 
    @endforeach
    
  </tbody>
</table>
</div>

@endsection