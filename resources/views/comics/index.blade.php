@extends('layouts.app')

@section('content')
    <div class="container text-center py-3">
        <h1>Fumetti:</h1>
        <button class="btn btn-info">
            <a href="{{ route('comics.create') }}" class="text-decoration-none text-light ">Crea fumetto</a>
        </button>
        <table class="table table-hover m-3">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">COVER</th>
                    <th scope="col">TITOLO</th>
                    <th scope="col">INFO</th>
                    <th scope="col">AZIONI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                        <td>
                            <h5>{{ $comic->title }}</h5>
                        </td>
                        <td>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action">{{ $comic->price }}</li>
                                <li class="list-group-item list-group-item-action">Series: {{ $comic->series }}</li>
                                <li class="list-group-item list-group-item-action">Data d'uscita: {{ $comic->sale_date }}
                                </li>
                                <li class="list-group-item list-group-item-action">Tipologia: {{ $comic->type }}</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="scelta-icone">
                                <li class=" d-flex gap-1">
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
@endsection
