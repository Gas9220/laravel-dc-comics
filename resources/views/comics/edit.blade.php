@extends('layout.app')

@section('page.title')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="me-3">
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <h1>{{ $comic->title }}</h1>

            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cancella" class="btn btn-danger btn-sm">
            </form>
        </div>
    </div>
@endsection

@section('page.main')
    <div class="container p-2">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $comic->description }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image link</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{ $comic->artists }}">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{ $comic->writers }}">
            </div>

            <div class="mb-3">
                <label for="sale_date">Sale date:</label>
                <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">

            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
