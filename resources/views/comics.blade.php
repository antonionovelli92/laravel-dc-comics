@extends('layouts.main')

@section('title', 'comics')

@section('content')
    <h1 class="text-center p-5">comics</h1>
    <div class="deck d-flex justify-content-center align-items-center flex-wrap">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
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
