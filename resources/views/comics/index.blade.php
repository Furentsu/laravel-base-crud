@extends('layouts.template')

@section('title', 'Manga\'s List')

@section('section-id', 'mangas_list')


@section('section-content')

    <div class="row p-5 d-flex flex-wrap justify-content-center">
        @forelse ($comics as $comic)
            <div class="card text-center col-3 p-0 m-3">

                <img class="img-fluid" src="{{$comic->cover_image}}" class="card-img-top" alt="{{$comic->english_title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->english_title}}</h5>
                    <h5 class="card-title">{{$comic->japanese_title}}</h5>
                    <h5 class="card-title">{{$comic->author}}</h5>
                    <h5 class="card-title">{{$comic->release_date}}</h5>
                    <p class="card-text">{{$comic->summary}}</p>
                    <span>{{$comic->price}}$</span>

                    <h3>{{$comic->available}}</h3>

                    <a href="{{ route("comics.show", $comic) }}" class="btn btn-primary">Start Reading</a>
                </div>
            </div>
        @empty
            <h3 class="text-center">No results</h3>
        @endforelse

    </div>
  
@endsection