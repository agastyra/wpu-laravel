@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form>
                    <div class="form-floating my-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                            required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                            required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
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
