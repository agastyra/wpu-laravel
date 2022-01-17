@extends('layouts.main')

@section('container')

<h1>Blog Categories</h1>


<div class="container">
    <div class="row my-5">

        @foreach ($categories as $category)

        <div class="col-md-3 my-3">
            <a href="/categories/{{ $category->slug }}">
            <div class="card bg-dark text-white">
                    <img src="http://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex" style="background: rgba(0, 0, 0, 0.7)">
                        <h3 class="card-title m-auto">{{ $category->name }}</h3>
                    </div>
                </div>
            </a>
            </div>

        @endforeach

    </div>
</div>

{{-- <ul>
    <li>
        <h1><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h1>
    </li>
</ul> --}}


@endsection