@extends('layouts.main')

@section('title', $comic->title)

@section('content')
    <h1>{{ $comic->title }}</h1>
@endsection
