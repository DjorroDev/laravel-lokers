@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <form class="mt-3 col-10" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search jobs" aria-label="Search jobs"
                    aria-describedby="basic-addon2">
                <button type="submit" class=" input-group-text btn btn-dark">Search</button>
            </div>

        </form>
    </div>
    <div class="row justify-content-center">
        @foreach ($listings as $listing)
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class=" row g-0">
                        <div class="col-md-3">
                            <img src="https://source.unsplash.com/200x200/?seeker" style="max-height: 300px;"
                                class="img-fluid rounded-start overflow-hidden border-right" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none text-dark"
                                        href="/jobs/{{ $listing->id }}">{{ $listing->title }}</a></h5>
                                <small class="card-text mb-2">{{ $listing->company }}</small>
                                <p class="card-text">{{ $listing->description }}</p>
                                <button class="btn btn-dark btn">Apply job</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
