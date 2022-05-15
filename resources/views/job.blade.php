@extends('layouts.main')

@section('container')
    <a href="/jobs" class="btn btn-dark mb-3"><i data-feather="chevron-left"></i> Back</a>
    <div class="row justify-content-center">
        <article class="border-1 shadow col-md-8 mb-5">
            <h3>{{ $listing->title }}</h3>
            <div class="col mb-2">
                <a href="" class="me-2 badge bg-dark text-decoration-none">vue</a>
                <a href="" class="me-2 badge bg-dark text-decoration-none">vue</a>
                <a href="" class="me-2 badge bg-dark text-decoration-none">vue</a>
            </div>
            <h5 class="">{{ $listing->company }}</h5>
            <h6> {{ $listing->website }} </h6>
            <h6 class="border-bottom pb-3"><i style="width:16px; height:16px" data-feather="map-pin"></i>
                {{ $listing->location }}</h6>
            <p class="mt-4 text-start"> {{ $listing->description }} </p>
            <button type="submit" class="mb-3 btn btn-dark">Apply Job</button>
        </article>
        <div class="col-md-4">
            <article class="border-1 shadow col-md-10 text-center pb-2 mb-5">
                <h3 class="mb-3">Company Profile</h3>
                <h5>{{ $listing->company }}</h5>
                <img src="https://source.unsplash.com/200x200/?seeker" alt="job" class="img-fluid">
                <p class="m-4 text-start small"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi natus
                    explicabo eum nulla labore minima odit saepe facilis dignissimos. </p>
            </article>
        </div>
    </div>
@endsection
