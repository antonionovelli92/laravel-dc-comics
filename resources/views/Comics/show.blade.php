@extends('layouts.main')
@section('icon', $comic->thumb)
@section('title', $comic->title)

@section('content')
    <h1 class="text-center p-2">{{ $comic->title }}</h1>
    <div class="comic-show d-flex align-items-center p-5">
        <div class="comic">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
        </div>
        <div class="description">
            <p>
                {!! $comic->description !!}
            </p>
            <div class="d-flex justify-content-end">
                {{-- Bottone per modificare --}}
                <div class="add-comic">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn-add my-4 btn btn-small btn-danger">
                        <div class="btn-text">
                            <span>EDIT</span>
                            <div class="btn-cloud"></div>
                        </div>
                        <div class="btn-border"></div>
                        <div class="btn-bg"></div>
                    </a>
                </div>
                {{-- Bottone che mi porta ai comics --}}
                <div class="add-comic ms-3">
                    <a href="{{ route('comics.index') }}" class="btn-add my-4 btn btn-small btn-primary">
                        <div class="btn-text">
                            <span>TORNA AI COMICS!</span>
                            <div class="btn-cloud"></div>
                        </div>
                        <div class="btn-border"></div>
                        <div class="btn-bg"></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
