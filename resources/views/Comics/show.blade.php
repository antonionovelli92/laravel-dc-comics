@extends('layouts.main')

@section('title', $comic->title)

@section('content')
    <h1 class="text-center">{{ $comic->title }}</h1>
@endsection
