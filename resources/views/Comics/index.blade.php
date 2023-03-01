@extends('layouts.main')


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
    <div class="add-comic d-flex justify-content-center">
        <a href="{{ route('comics.create') }}" class="btn-add my-4 btn btn-small btn-primary">ADD COMIC!</a>
    </div>

@endsection
