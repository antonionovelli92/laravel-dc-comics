@extends('layouts.main')
@section('title', 'Add Comic')

@section('content')
    <div class="title-create">
        <h1 class="text-center p-5">Create your own comic!</h1>
    </div>
    <div class="form-create">
        <form action="">
            <div class="row">
                {{-- TITOLO --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Comic:</label>
                        <input type="text" class="form-control" id="title" placeholder="Titolo del tuo Comic"
                            name="title">
                    </div>
                </div>
                {{-- COPERTINA --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Copertina:</label>
                        <input type="url" class="form-control" id="thumb" placeholder="Copertina del tuo Comic"
                            name="thumb">
                    </div>
                </div>
                {{-- DESCRIZIONE --}}
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione Comic:</label>
                        <textarea name="description" id="description" cols="30" class="form-control"
                            placeholder="Descrizione del tuo Comic"></textarea>
                    </div>
                </div>
                {{-- PREZZO --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" min="0" value="10" class="form-control" id="price"
                            placeholder="Prezzo del tuo Comic" name="price">
                    </div>
                </div>
                {{-- SERIE --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" id="series" placeholder="Serie del tuo Comic"
                            name="series">
                    </div>
                </div>
                {{-- DATA --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data:</label>
                        <input type="date" class="form-control" id="sale_date" pattern="\d{4}-\d{2}-\d{2}"
                            placeholder="YYYY-MM-DD" name="sale_date">
                    </div>
                </div>
                {{-- TIPO --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere:</label>
                        <input type="text" class="form-control" value="Azione" id="type"
                            placeholder="Genere del tuo Comic" name="type">
                    </div>
                </div>
                {{-- ARTISTA --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artista:</label>
                        <input type="text" class="form-control" id="artists" placeholder="Artista del tuo Comic"
                            name="artists">
                    </div>
                </div>
                {{-- SCRITTORE --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittore:</label>
                        <input type="text" class="form-control" id="writers" placeholder="Scrittore del tuo Comic"
                            name="writers">
                    </div>
                </div>
            </div>
        </form>
    </div>



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

@endsection
