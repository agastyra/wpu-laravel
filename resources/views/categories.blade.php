@extends('layouts.main')

@section('container')

<h1>Blog Categories</h1>

@foreach ($categories as $category)

<ul>
    <li>
        <h1><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h1>
    </li>
</ul>

@endforeach

@endsection