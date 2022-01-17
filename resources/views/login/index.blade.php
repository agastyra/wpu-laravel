@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form>
                    <div class="form-floating my-3">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                            required>
                        <label for="username">Username</label>
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
