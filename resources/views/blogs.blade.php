@extends('layouts.main')

@section('container')

<h2>Judul</h2>
<h5>Rangga Agastya</h5>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, quo.</p>

@foreach ($posts as $post)

<article class="mb-5">
    <h2>
        <a href="/blogs/{{$post->id}}">{{$post->title}}</a>
    </h2>
    {{-- <h5>By: {{$post->author}}</h5> --}}
    <p>{{$post->excerpt}}</p>
</article>
@endforeach

@endsection