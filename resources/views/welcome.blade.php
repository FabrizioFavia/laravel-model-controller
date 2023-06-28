@extends('layouts.app')

@section('content')

<div class="mainContainer">
@foreach ($movies as $movie)
    <p>{{$movie->title}}</p>
@endforeach
</div>

@endsection