@extends('layouts.template')

@section('title', $comic->english_title)

@section('section-id', 'manga_detail')


@section('section-content')
    <h2>Would you like to read  {{$comic->english_title}}? Then pay {{$comic->price}}$</h2>
@endsection