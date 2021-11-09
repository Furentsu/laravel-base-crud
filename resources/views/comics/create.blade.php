@extends('layouts.template')

@section('title', 'Add Manga')

@section('section-id', 'mangas_creation')

@section('section-content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-5">
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Image URL</label>
                    <input type="text" name="cover_image" id="cover_image" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="english_title" class="form-label">English Title</label>
                    <input type="text" name="english_title" id="english_title" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="japanese_title" class="form-label">Japanese Title</label>
                    <input type="text" name="japanese_title" id="japanese_title" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="summary" class="form-label">Summary</label>
                    <input type="text" name="summary" id="summary" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="release_date" class="form-label">Release Date</label>
                    <input type="text" name="release_date" id="release_date" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>
                
            </div>
        </div>
        
        <div class="col-12 mt-4 d-flex justify-content-around">
            <button class="btn btn-warning">
                <a class="text-decoration-none text-white" href="{{route('comics.index')}}">Go back to the Manga list</a>
            </button>
            <button type="submit" class="btn btn-outline-dark">Add Manga!</button>
        </div>
    </form>
@endsection