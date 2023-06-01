@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center py-4">
            <button class="btn btn-info">
                <a href="{{ route('comics.index') }}" class="text-decoration-none text-light">Ritorna alla home</a>
            </button>
        </div>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <h3>Crea un fumetto</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
                    placeholder="titolo" name="title" value="@error('title') @else{{ old('title') }} @enderror">
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
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="title"
                    id="thumb" placeholder="immagine" name="thumb"
                    value="@error('thumb') @else{{ old('thumb') }} @enderror">
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
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    placeholder="$0.00" name="price" value="@error('price') @else{{ old('price') }} @enderror">
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
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" placeholder="....TEXT..."
                    rows="3" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            <div>
                <label for="series" class="form-label">Serie:</label>
                <select id="series" class="form-select @error('series') is-invalid @enderror"
                    aria-label="Default select example" name="series">
                    <option value="">Serie</option>
                    <option @selected(old('series') === 'Batman') value="Batman">Batman</option>
                    <option @selected(old('series') === 'Superman') value="Superman">Superman</option>
                    <option @selected(old('series') === 'Spiederman') value="Spiderman">Spiderman</option>
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
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date') }}">
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
                <select class="form-select @error('type') is-invalid @enderror" aria-label="Default select example"
                    name="type" value="{{ old('type') }}">
                    <option value="">Tipo</option>
                    <option @selected(old('type')) value="comic book">Comic Book</option>
                    <option @selected(old('type')) value="graphic novel">Graphic novel</option>
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
