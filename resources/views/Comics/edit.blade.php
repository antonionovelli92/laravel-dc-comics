@extends('layouts.main')
@section('title', 'Add Comic')

@section('content')
    <div class="title-create d-flex justify-content-between align-items-center">
        <h1 class="text-center p-5">Create your own comic!</h1>
        {{-- Bottone che mi porta alla pagina index --}}
        <div class="add-comic d-flex justify-content-center">
            <a href="{{ route('comics.index') }}" class="btn-add my-4 btn btn-small btn-primary">
                <div class="btn-text">
                    <span>BACK TO COMICS!</span>
                    <div class="btn-cloud"></div>
                </div>
                <div class="btn-border"></div>
                <div class="btn-bg"></div>
            </a>
        </div>
    </div>



    {{-- Creazione form --}}


    <div class="form-create">
        <form method="POST" action="{{ route('comics.update', $comic->id) }}">
            {{-- diamo un'altra interpretazione --}}
            @method('PUT')
            {{-- probelma pagina 419, usare questo metodo --}}
            @csrf
            <div class="row">
                {{-- TITOLO --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Comic:</label>
                        <input type="text" class="form-control" id="title" placeholder="Titolo del tuo Comic"
                            name="title" required value="{{ old('title', $comic->title) }}">
                    </div>
                </div>
                {{-- COPERTINA --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Copertina:</label>
                        <input type="url" class="form-control" id="thumb" placeholder="Copertina del tuo Comic"
                            name="thumb" required value="{{ old('thumb', $comic->thumb) }}">
                    </div>
                </div>
                {{-- DESCRIZIONE --}}
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione Comic:</label>
                        <textarea name="description" id="description" cols="30" class="form-control">{!! old('description', $comic->description) !!}"</textarea>
                    </div>
                </div>
                {{-- PREZZO --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" min="0" class="form-control" id="price"
                            placeholder="Prezzo del tuo Comic" name="price" value="{{ old('price', $comic->price) }}">
                    </div>
                </div>
                {{-- SERIE --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" id="series" placeholder="Serie del tuo Comic"
                            name="series" value="{{ old('series', $comic->series) }}">
                    </div>
                </div>
                {{-- DATA --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data:</label>
                        <input type="date" class="form-control" id="sale_date" pattern="\d{4}-\d{2}-\d{2}"
                            placeholder="YYYY-MM-DD" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                </div>
                {{-- TIPO --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere:</label>
                        <input type="text" class="form-control" value="Azione" id="type"
                            placeholder="Genere del tuo Comic" name="type" value="{{ old('type', $comic->type) }}">
                    </div>
                </div>
                {{-- ARTISTA --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artista:</label>
                        <input type="text" class="form-control" id="artists" placeholder="Artista del tuo Comic"
                            name="artists" value="{{ old('artists', $comic->artists) }}">
                    </div>
                </div>
                {{-- SCRITTORE --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittore:</label>
                        <input type="text" class="form-control" id="writers" placeholder="Scrittore del tuo Comic"
                            name="writers" value="{{ old('writers', $comic->writers) }}">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-5">
                <button type="submit" class="btn px-5 border-white btn-primary">SALVA</button>
            </div>
        </form>
    </div>


@endsection
