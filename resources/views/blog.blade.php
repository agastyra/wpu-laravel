@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{$blogs->title}}</h2>

            <p>
                By. <a href="/authors/{{ $blogs->author->username }}" class="text-decoration-none">{{ $blogs->author->name }}</a> in <a href="/categories/{{ $blogs->category->slug }}" class="text-decoration-none">{{ $blogs->category->name }}</a> {{ $blogs->created_at->diffForHumans() }}
            </p>

            <img src="http://source.unsplash.com/1200x400?{{ $blogs->category->name }}" alt="{{ $blogs->category->name }}" class="img-fluid">

            <article class="my-5">
                {!! $blogs->body !!}
            </article>
            
            <a href="/blogs" class="d-block mb-5">Kembali ke halaman blog</a>
        </div>
    </div>
</div>


@endsection