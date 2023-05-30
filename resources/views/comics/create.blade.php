@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center py-4">
            <button class="btn btn-info">
                <a href="{{ route('comics.index') }}" class="text-decoration-none text-light">Ritorna alla home</a>
            </button>
        </div>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <h3>Crea un fumetto</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" placeholder="titolo" name="title">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine:</label>
                <input type="text" class="form-control" id="thumb" placeholder="immagine" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div>
                <label for="series" class="form-label">Serie:</label>
                <select class="form-select" aria-label="Default select example" name="series">
                    <option selected>Serie</option>
                    <option value="Batman">Batman</option>
                    <option value="Superman">Superman</option>
                    <option value="Spiderman">Spiderman</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div>
                <label for="type" class="form-label">Tipo:</label>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option selected>Tipo</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success my-3">Invia</button>
        </form>
    </div>
@endsection
