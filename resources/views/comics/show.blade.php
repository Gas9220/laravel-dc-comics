@extends('layout.app')

@section('page.title')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
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
        <div>
            <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Back</a>
        </div>
    </div>
@endsection
