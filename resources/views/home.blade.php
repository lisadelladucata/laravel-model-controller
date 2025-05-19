@extends('layouts.app')

@section('title', 'Lista Film')

@section('content')
    <div class="movie-grid">
        @foreach($movies as $movie)
            <div class="movie-card">
                <h2>{{ $movie->title }}</h2>
                <p><strong>Titolo originale:</strong> {{ $movie->original_title }}</p>
                <p><strong>Nazionalità:</strong> {{ $movie->nationality }}</p>
                <p><strong>Data:</strong> {{ $movie->date }}</p>
                <p><strong>Voto:</strong> {{ $movie->vote }}</p>
            </div>
        @endforeach
    </div>
@endsection
