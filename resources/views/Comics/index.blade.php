@extends('layouts.main')

@section('title', 'comics')

@section('content')
    <div class="deck d-flex justify-content-center align-items-center flex-wrap">
        @foreach ($comics as $comic)
            <div class="card-comics p-3 my-4">
                <img src="{{ $comic->thumb }}" class=" img-fluid" alt="{{ $comic->title }}">
                <div class="card-body text-white text-center">
                    <h5 class="card-title mt-3">{{ $comic->title }}</h5>
                    {{-- <p class="card-text">Price: {{ $comic->price }}</p>
                    <p class="card-text">Series: {{ $comic->series }}</p>
                    <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
                    <p class="card-text">Type: {{ $comic->type }}</p> --}}

                </div>
            </div>
        @endforeach
    </div>

@endsection





{{--         @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">Price: {{ $comic->price }}</p>
                    <p class="card-text">Series: {{ $comic->series }}</p>
                    <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
                    <p class="card-text">Type: {{ $comic->type }}</p>
                    <p class="card-text">Artists:</p>
                    <ul>
                        @foreach ($comic->artists as $artist)
                            <li>{{ $artist }}</li>
                        @endforeach
                    </ul>
                    <p class="card-text">Writers:</p>
                    <ul>
                        @foreach ($comic->writers as $writer)
                            <li>{{ $writer }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
 --}}
