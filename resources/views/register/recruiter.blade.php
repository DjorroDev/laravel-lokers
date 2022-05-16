@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center my-5">
        <div class="col-md-5 p-5 shadow border">
            <form class="">
                <h1 class="h3 mb-5 fw-normal text-center">Please Register</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="your name">
                    <label for="floatingInput">Full name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-dark my-3" type="submit">register</button>
                <small class="d-block text-center">Already has an account? <a class="text-secondary" href="/login">Login
                        here!</a></small>
            </form>
        </div>
    </div>
@endsection
