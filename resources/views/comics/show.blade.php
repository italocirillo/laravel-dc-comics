@extends('layouts.app')

@section('content')
    <div class="text-center py-4">
        <button class="btn btn-info">
            <a href="{{ route('comics.index') }}" class="text-decoration-none text-light">Ritorna alla home</a>
        </button>
    </div>
    <div class="card my-3 m-auto">
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
@endsection
