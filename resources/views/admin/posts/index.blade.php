@include('layouts.app');

@section('content')

@foreach ($posts as $post)
  <h5>{{$post->title}}</h5>
  <p>{{$post->content}}</p>
@endforeach


@endsection