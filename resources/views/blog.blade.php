@extends('layouts.main')

@section('container')

<article>
    <h2>{{$posts->title}}</h2>
    {{-- <h5>{{$posts->author}}</h5> --}}
    {!! $posts->body !!}
</article>

<a href="/blogs">Kembali ke halaman blog</a>

@endsection