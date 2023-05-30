@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="container text-center">
            <h1>Fumetti:</h1>
            <button class="btn btn-info">
                <a href="{{ route('comics.create') }}" class="text-decoration-none text-light">Crea fumetto</a>
            </button>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">COVER</th>
                        <th scope="col">TITOLO</th>
                        <th scope="col">INFO</th>
                        <th scope="col">AZIONI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="clickable-row" onclick="document.location='{{ route('comics.destroy', $comic->id) }}'">
                            <th scope="row">{{ $comic->id }}</th>
                            <td><img src="{{ $comic->thumb }}" class="w-50" alt="{{ $comic->title }}"></td>
                            <td>
                                <h5>{{ $comic->title }}</h5>
                            </td>
                            <td>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $comic->price }}</li>
                                    <li class="list-group-item">Series: {{ $comic->series }}</li>
                                    <li class="list-group-item">Data d'uscita: {{ $comic->sale_date }}</li>
                                    <li class="list-group-item">Tipo: {{ $comic->type }}</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="scelta-icone">
                                    <li class="list-group-item d-flex gap-1">
                                        <a href="{{ route('comics.show', $comic->id) }}">
                                            <button type="button" class="btn btn-light">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('comics.edit', $comic->id) }}">
                                            <button type="button" class="btn btn-success">
                                                <i class="fa-solid fa-marker"></i>
                                            </button>
                                        </a>
                                        <form id="deleteForm" action="{{ route('comics.destroy', $comic->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Sei sicuro?')">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
