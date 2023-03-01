@extends('layouts.main')
@section('icon', $comic->thumb)
@section('title', $comic->title)

@section('content')
    <h1 class="text-center">{{ $comic->title }}</h1>
@endsection
