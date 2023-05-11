@extends('layouts.app')


@section('title', 'home page')

@section('content')
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">{{ $movie->title }}</p>
                        <p class="card-text">{{ $movie->vote }}</p>
                        <p class="card-text">{{ $movie->date }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
