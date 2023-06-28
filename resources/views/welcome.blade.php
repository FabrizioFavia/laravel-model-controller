@extends('layouts.app')

@section('content')
    <div class="mainContainer d-flex flex-wrap mb-3">
        <div class="container-lg d-flex flex-wrap">
            @foreach ($movies as $movie)
                <div class="movieCard me-3 mt-3 p-3 border border-success">
                    <h4>{{ $movie->title }}</h4>
                    <p> Titolo originale: {{ $movie->original_title }}</p>
                    <p>Lingua: {{ $movie->nationality }}</p>
                    <p>Data d'uscita: {{ $movie->date }}</p>
                    <p>Voto: {{ $movie->vote }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
