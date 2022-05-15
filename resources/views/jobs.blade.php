@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <form class="mt-3 col-10" action="/jobs" method="GET">
            <div class="input-group mb-3">
                <input name="search" type="text" class="form-control" placeholder="Search jobs" aria-label="Search jobs"
                    aria-describedby="basic-addon2" value="{{ request('search') }}">
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
                            <a href="/jobs/{{ $listing->id }}" class="text-decoration-none">
                                <img src="https://source.unsplash.com/300x300/?seeker" style="max-height: 300px;"
                                    class="img-fluid rounded-start overflow-hidden border-right" alt="...">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title border-bottom pb-2"><a class="text-decoration-none text-dark"
                                        href="/jobs/{{ $listing->id }}">{{ $listing->title }}</a></h4>
                                <x-tags :tagsCsv="$listing->tags" />
                                <small class="lead">{{ $listing->company }}</small>
                                <small class="d-block"> {{ $listing->website }} </small>
                                <small class="d-block border-bottom pb-2"><i style="width:16px; height:16px"
                                        data-feather="map-pin"></i>
                                    {{ $listing->location }}</small>
                                <button class="mt-3 btn btn-dark btn">Apply job</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
