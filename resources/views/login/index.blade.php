@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {!! session('success') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {!! session('loginError') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating my-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required autofocus value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>

                <small class="d-block text-center mt-3">
                    Not registered ? <a href="/register">Register here</a>
                </small>
            </main>
        </div>
    </div>

@endsection
