@extends('layouts.app')


@section('title', 'home page')

@section('content')

    <div class="row">
        @foreach ($Movies as $Movie)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">{{ $Movie->title }}</p>
                        <p class="card-text">{{ $Movie->vote }}</p>
                        <p class="card-text">{{ $Movie->date }}</p>
                    </div>
                </div>
            </div>
    </div>

@endsection
