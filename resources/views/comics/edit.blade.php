@extends('layouts.template')

@section('title', 'Add Manga')

@section('section-id', 'mangas_editing')

@section('section-content')
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-5">
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Image URL</label>
                    <input value="{{ $comic->cover_image }}" type="text" name="cover_image" id="cover_image" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="english_title" class="form-label">English Title</label>
                    <input value="{{ $comic->english_title }}" type="text" name="english_title" id="english_title" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="japanese_title" class="form-label">Japanese Title</label>
                    <input value="{{ $comic->japanese_title }}" type="text" name="japanese_title" id="japanese_title" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input value="{{ $comic->author }}" type="text" name="author" id="author" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="summary" class="form-label">Summary</label>
                    <input value="{{ $comic->summary }}" type="text" name="summary" id="summary" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="release_date" class="form-label">Release Date</label>
                    <input value="{{ $comic->release_date }}" type="text" name="release_date" id="release_date" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input value="{{ $comic->price }}" type="number" name="price" id="price" class="form-control" required>
                </div>
                
            </div>
        </div>
        
        <div class="col-12 mt-4 d-flex justify-content-around">
            <button class="mb-3 btn btn-warning">
                <a class="text-decoration-none text-white" href="{{route('comics.index')}}">Go back to the Manga list</a>
            </button>
            <button type="submit" class="mb-3 btn btn-outline-dark">Edit Manga!</button>
        </div>
    </form>
@endsection