@extends('layouts.main')

@section('container')

<article>
    <h2>{{$blogs->title}}</h2>
    <p>By. <a href="/authors/{{ $blogs->author->username }}" class="text-decoration-none">{{ $blogs->author->name }}</a> in <a href="/categories/{{ $blogs->category->slug }}">{{ $blogs->category->name }}</a></p>
    {!! $blogs->body !!}
</article>

<a href="/blogs">Kembali ke halaman blog</a>

@endsection