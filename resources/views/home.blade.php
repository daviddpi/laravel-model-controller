@extends('layout.main')

@section('title', 'home')
    
@section('content')
    <div class="container">
        <div class="row g-3">
            @forelse ($movies as $movie)
            
                <div class="col-4">
                    <h2>Titolo: {{ $movie->title }}</h2>
                    <h3>Titolo originale: {{ $movie->original_title }}</h3>
                    <p>Data uscita: {{ $movie->date . " " . $movie->nationality}}</p>
                    <h5>Voto: {{ $movie->vote }}</h5>
                </div>

            @empty
                
            @endforelse
        </div>
    </div>
@endsection