@extends('layouts.main')

@section('container')

<h1>Halaman About</h1>
<h3>{{$nama}}</h3>
<p>{{$email}}</p>
<img src="assets/image/{{$gambar}}" alt="{{$nama}}" width="200" class="img-thumbnail">

@endsection