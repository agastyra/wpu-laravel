@extends('layouts.main')

@section('container')

@foreach ($blogs as $blog)
<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/blogs/{{$blog->slug}}" class="text-decoration-none">{{$blog->title}}</a>
    </h2>
    <p>By. <a href="/authors/{{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a> in <a href="/categories/{{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a></p>
    <p>{{$blog->excerpt}}</p>

    <a href="/blogs/{{$blog->slug}}" class="text-decoration-none">Read more...</a>
</article>
@endforeach

@endsection