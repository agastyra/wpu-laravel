@extends('layouts.main')

@section('container')

    <h1>Authors</h1>

    @foreach ($authors as $author)
        <ul>
            <li><a href="/authors/{{ $author->username }}" class="text-decoration-none">{{ $author->name }}</a></li>
        </ul>
    @endforeach

@endsection