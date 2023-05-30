@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="text-center py-4">
                <button class="btn btn-info">
                    <a href="{{ route('comics.index') }}" class="text-decoration-none text-light">Ritorna alla home</a>
                </button>
            </div>

            <h3>Modifica il fumetto</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" placeholder="titolo" name="title"
                    value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine:</label>
                <input type="text" class="form-control" id="thumb" placeholder="immagine" name="thumb"
                    value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" rows="3" name="description">
                    {{ $comic->description }}
                </textarea>
            </div>
            <div>
                <label for="series" class="form-label">Serie:</label>
                <select id="series" class="form-select" aria-label="Default select example" name="series">
                    @if ($comic->series === 'Batman' || $comic->series === 'Superman' || $comic->series === 'Spiderman')
                        <option @selected($comic->series === 'Batman') value="Batman">Batman</option>
                        <option @selected($comic->series === 'Superman') value="Superman">Superman</option>
                        <option @selected($comic->series === 'Spiderman') value="Spiderman">Spiderman</option>
                    @else
                        <option value="Batman">Batman</option>
                        <option value="Superman">Superman</option>
                        <option value="Spiderman">Spiderman</option>
                        <option selected value="{{ $comic->series }}">{{ $comic->series }}</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div>
                <label for="type" class="form-label">Tipo:</label>
                <select id="type" class="form-select" aria-label="Default select example" name="type">
                    @if ($comic->type === 'comic book' || $comic->type === 'graphic novel')
                        <option @selected($comic->type === 'comic book') value="comic book">Comic Book</option>
                        <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic novel</option>
                    @else
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic novel</option>
                        <option selected value="{{ $comic->type }}">{{ $comic->type }}</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-success my-3">Invia</button>
        </form>
    </div>
@endsection
