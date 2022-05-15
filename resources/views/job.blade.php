@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h3 class="my-3">{{ $listing->title }}</h3>
            <h5>{{ $listing->company }}</h5>
            <img src="https://source.unsplash.com/200x200/?seeker" alt="job" class="img-fluid">
            <p class="mt-4 text-start"> {{ $listing->description }} </p>
            <button type="submit" class="btn btn-dark">Apply Job</button>
        </div>
    </div>
@endsection
