@extends('layouts.main')

@section('container')

@if ($blogs->count())

    <div class="card mb-5">
        <img src="http://source.unsplash.com/1200x400?{{ $blogs[0]->category->name }}" class="card-img-top" alt="{{ $blogs[0]->category->name }}">
        <div class="card-body text-center">
            <h3>
                <a href="/blogs/{{$blogs[0]->slug}}" class="text-decoration-none text-black">{{$blogs[0]->title}}</a>
            </h3>

            <p>
                <small>
                    By. <a href="/authors/{{ $blogs[0]->author->username }}" class="text-decoration-none">{{ $blogs[0]->author->name }}</a> in <a href="/categories/{{ $blogs[0]->category->slug }}" class="text-decoration-none">{{ $blogs[0]->category->name }}</a> {{ $blogs[0]->created_at->diffForHumans() }}
                </small>
            </p>

            <p class="card-text">{{ $blogs[0]->excerpt }}</p>

            <a href="/blogs/{{$blogs[0]->slug}}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>

    @else

    <p class="text-center fs-4">No blog found.</p>

@endif

<div class="container">
    <div class="row">
        @foreach ($blogs->skip(1) as $blog)
        
        <div class="col-md-4 mb-3">
            <div class="card">
                <a href="/categories/{{ $blog->category->slug }}" class="position-absolute bg-danger text-white px-3 py-2 text-decoration-none">{{ $blog->category->name }}</a>
                <img src="http://source.unsplash.com/500x400?{{ $blog->category->name }}" class="card-img-top" alt="{{ $blog->category->name }}">
                <div class="card-body">
                    <h5 class="card-title"><a href="/blogs/{{$blog->slug}}" class="text-decoration-none text-black">{{$blog->title}}</a></h5>
                    <p>
                        <small>
                            By. <a href="/authors/{{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a> {{ $blog->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $blog->excerpt }}</p>
                    <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection