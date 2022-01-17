@extends('layouts.main')

@section('container')

    <h1>Authors</h1>

    <div class="container">
        <div class="row my-5">

            @foreach ($authors as $author)

            <div class="col-md-3 my-3">
                <a href="/authors/{{ $author->username }}">
                <div class="card bg-dark text-white">
                        <img src="http://source.unsplash.com/400x400?selfie" class="card-img" alt="{{ $author->name }}">
                        <div class="card-img-overlay d-flex" style="background: rgba(0, 0, 0, 0.7)">
                            <h3 class="card-title m-auto">{{ $author->name }}</h3>
                        </div>
                    </div>
                </a>
                </div>

            @endforeach

        </div>
    </div>

@endsection