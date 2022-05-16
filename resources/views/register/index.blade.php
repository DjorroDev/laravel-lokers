@extends('layouts.main')

@section('container')
    <h3 class="text-center mt-4">Welcome to Lokers!</h3>
    <h5 class="text-center">First of all, what do you want to do?</h5>
    <div class="d-md-flex justify-content-around">
        <x-box class="bg-dark text-white">
            <h1 class="h4">Looking for a job</h1>
            <p>Register as the job seeker Lorem ipsum dolor sit amet Lorem, ipsum dolor. lorem consectetur adipisicing elit.
                Illo,
                enim!</p>
            <a href="/register/seeker" class="btn btn-light">Register</a>
        </x-box>
        <p class="align-self-center text-center lead">OR</p>
        <x-box>
            <h1 class="h3">Looking for a candidate</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel amet, debitis totam dolorum adipisci cupiditate.
            </p>
            <a href="/register/company" class="btn btn-dark">Register</a>
        </x-box>
    </div>
    <div class="text-center">
        <small>Already has an account? <a class="text-secondary" href="/login">Login
                here!</a></small>
    </div>
@endsection
