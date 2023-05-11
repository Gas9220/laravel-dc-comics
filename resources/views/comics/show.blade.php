@extends('layout.app')

@section('page.title')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <h1>{{ $comic->title }}</h1>
            <div class="me-3">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Edit</a>
            </div>
        </div>
    </div>
@endsection

@section('page.main')
    <div class="container">
        <p>{{ $comic->description }}</p>
        <h6>Writed by</h6>
        <p>{{ $comic->writers }}</p>
        <h6>Artists</h6>
        <p>{{ $comic->artists }}</p>
        <div>
            <span>Available from {{ $comic->sale_date }} at {{ $comic->price . '€' }}</span>
        </div>
    </div>
@endsection
