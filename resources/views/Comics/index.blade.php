@extends('layouts.main')

@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
        integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
        crossorigin='anonymous' />
@endsection

@section('title', 'comics')

@section('content')
    <div class="deck d-flex justify-content-center align-items-center flex-wrap">
        @forelse ($comics as $comic)
            <div class="card-comics p-3 my-4">
                <img src="{{ $comic->thumb }}" class=" img-fluid" alt="{{ $comic->title }}">
                <div class="card-body text-white text-center">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <h5 class="card-title mt-3">{{ $comic->title }}</h5>
                    </a>

                    {{-- Bottone per modificare --}}
                    <div class="edit-comic">
                        <a href="{{ route('comics.edit', $comic->id) }}" class=" btn btn-small ">
                            <span><i class="fa-regular fa-pen-to-square"></i></span>
                        </a>
                    </div>

                    {{-- <p class="card-text">Price: {{ $comic->price }}</p>
                    <p class="card-text">Series: {{ $comic->series }}</p>
                    <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
                    <p class="card-text">Type: {{ $comic->type }}</p> --}}
                </div>
            </div>
        @empty
            <h1 class="text-center text-white">NON CI SONO FUMETTI A DISPOSIZIONE</h1>
        @endforelse
    </div>
    {{-- Bottone che mi porta alla pagina create --}}
    <div class="add-comic d-flex justify-content-center">
        <a href="{{ route('comics.create') }}" class="btn-add my-4 btn btn-small btn-primary">
            <div class="btn-text">
                <span>ADD COMIC!</span>
                <div class="btn-cloud"></div>
            </div>
            <div class="btn-border"></div>
            <div class="btn-bg"></div>
        </a>
    </div>


@endsection
