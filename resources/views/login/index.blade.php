@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center my-5">
        <div class="col-md-5 p-5 shadow border">
            <form class="">
                <h1 class="h3 mb-5 fw-normal text-center">Please Login</h1>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-dark my-3" type="submit">Login</button>
                <small class="d-block text-center">don't have an account? <a class="text-secondary" href="/register">Register
                        Now!</a></small>
            </form>
        </div>
    </div>
@endsection
