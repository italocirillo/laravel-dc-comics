@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="container text-center">
            <h1>Fumetti:</h1>
            <button class="btn btn-info">
                <a href="{{ route('comics.create') }}" class="text-decoration-none text-light">Crea fumetto</a>
            </button>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach ($comics as $comic)
                    <div class="col py-3">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="card">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                    <p class="card-text">{{ $comic->description }}</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ $comic->price }}</li>
                                        <li class="list-group-item">Series: {{ $comic->series }}</li>
                                        <li class="list-group-item">Data d'uscita: {{ $comic->sale_date }}</li>
                                        <li class="list-group-item">Tipo: {{ $comic->type }}</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
