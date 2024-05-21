@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
   <div class="jumbotron">

   </div>
   <div class="gallery-comics">
    @foreach ($comics as $comic)
    <div>
        <img src="{{$comic['thumb'] }}" alt="{{$comic['title']}}">
        <p>{{$comic['title']}}</p>
    </div>
    @endforeach
   </div>
</main>

@endsection