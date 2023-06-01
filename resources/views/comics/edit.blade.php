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

            <h3>Modifica il fumetto #ID{{ $comic->id }}</h3>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control @error('title') is-invalid @else is-valid @enderror "
                    id="title" placeholder="titolo" name="title" value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine:</label>
                <input type="text" class="form-control @error('thumb') is-invalid @else is-valid @enderror "
                    id="thumb" placeholder="immagine" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="invalid-feedback">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" class="form-control @error('price') is-invalid @else is-valid @enderror "
                    id="price" placeholder="$0.00" name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="invalid-feedback">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control @error('description') is-invalid @else is-valid @enderror" id="description"
                    placeholder="....TEXT..." rows="3" name="description">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div>
                <label for="series" class="form-label">Serie:</label>
                <select id="series" class="form-select @error('series') is-invalid @else is-valid @enderror "
                    aria-label="Default select example" name="series">
                    @if ($comic->series === 'Batman' || $comic->series === 'Superman' || $comic->series === 'Spiderman')
                        <option @selected(old('series', $comic->series) === 'Batman') value="Batman">Batman</option>
                        <option @selected(old('series', $comic->series) === 'Superman') value="Superman">Superman</option>
                        <option @selected(old('series', $comic->series) === 'Spiderman') value="Spiderman">Spiderman</option>
                    @else
                        <option value="Batman">Batman</option>
                        <option value="Superman">Superman</option>
                        <option value="Spiderman">Spiderman</option>
                        <option selected value="{{ old('series', $comic->series) }}">{{ old('series', $comic->series) }}
                        </option>
                    @endif
                </select>
                @error('series')
                    <div class="invalid-feedback">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data:</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @else is-valid @enderror "
                    id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            <div>
                <label for="type" class="form-label">Tipo:</label>
                <select id="type" class="form-select @error('type') is-invalid @else is-valid @enderror "
                    aria-label="Default select example" name="type">
                    @if ($comic->type === 'comic book' || $comic->type === 'graphic novel')
                        <option @selected(old('type', $comic->type) === 'comic book') value="comic book">Comic Book</option>
                        <option @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">Graphic novel</option>
                    @else
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic novel</option>
                        <option selected value="{{ old('novel', $comic->type) }}">{{ old('novel', $comic->type) }}
                        </option>
                    @endif
                </select>
                @error('type')
                    <div class="invalid-feedback">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success my-3">Invia</button>
        </form>
    </div>
@endsection
