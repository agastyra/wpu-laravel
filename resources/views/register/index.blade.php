@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf

                    <div class="form-floating my-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>

                <small class="d-block text-center mt-3">
                    Already registered ? <a href="/login">Login here</a>
                </small>
            </main>
        </div>
    </div>

@endsection
