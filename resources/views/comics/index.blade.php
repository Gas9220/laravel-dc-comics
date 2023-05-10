@extends('layout.app')

@section('page.title')
    <div class="container d-flex justify-content-between p-2">
        <h1>Available comics</h1>
    </div>
@endsection

@section('page.main')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2 p-2">
                    <a href="{{ route('comics.show', $comic->id) }}"
                        class="d-flex flex-column justify-content-between align-items-center text-decoration-none item">
                        <img class="thumb" src="{{ $comic->thumb }}" alt="cover-img">
                        <h6 class="text-black">{{ $comic->title }}</h6>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
