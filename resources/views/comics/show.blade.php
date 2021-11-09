@extends('layouts.template')

@section('title', $comic->english_title)

@section('section-id', 'manga_detail')

@section('cdn-import')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
@endsection

@section('section-content')
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-6 text-center">
            <h2 class="mb-3">Summary <i class="far fa-hand-point-right"></i> <span class="text-danger">{{$comic->english_title}}</span>:</h2>
            <p class="fs-3 text-center">{{$comic->summary}}</p>
        </div>
    </div>
@endsection