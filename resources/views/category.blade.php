@extends('layouts.main')

@section('container')

<h1>Blog Category : {{ $judul }}</h1>

@foreach ($blogs as $blog)

<article class="mb-5">
    <h2>
        <a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a>
    </h2>
    <p>By. <a href="/authors/{{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a> in <a href="/categories/{{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a></p>
    <p>{{$blog->excerpt}}</p>
</article>


@endforeach

<a href="/categories">Kembali ke halaman categories</a>

@endsection