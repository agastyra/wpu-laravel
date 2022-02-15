@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="my-5">{{ $blog->title }}</h2>

                <a href="/dashboard/blogs/" class="btn btn-info"><span data-feather="arrow-left"></span> Back</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>

                <img src="http://source.unsplash.com/1200x400?{{ $blog->category->name }}"
                    alt="{{ $blog->category->name }}" class="img-fluid mt-5">

                <article class="my-5">
                    {!! $blog->body !!}
                </article>

            </div>
        </div>
    </div>


@endsection
