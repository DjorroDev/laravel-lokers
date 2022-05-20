@extends('layouts.main')

@section('container')
    <a href="/jobs" class="btn btn-dark mb-3"><i data-feather="chevron-left"></i> Back</a>
    <div class="row justify-content-center">
        <article class="border shadow col-md-8 p-3 mb-5">
            <h3>{{ $listing->title }}</h3>
            <x-tags :tagsCsv="$listing->tags"></x-tags>
            <h5 class="">{{ $listing->company }}</h5>
            <h6> <i class="icon-16" data-feather="link"></i> {{ $listing->website }} </h6>
            <h6 class="border-bottom pb-3"><i class="icon-16" data-feather="map-pin"></i>
                {{ $listing->location }}</h6>
            <p class="mt-4 text-start"> {!! $listing->description !!} </p>
            <div class="border-bottom mb-3"></div>
            <button type="submit" class="mb-3 btn btn-dark">Apply Job</button>
        </article>
        <div class="col-md-4">
            <article class="border shadow col-md-10 text-center py-3 px-1 mb-5">
                <h3 class="mb-2 border-bottom pb-2 mx-3">Company Profile</h3>
                <h5>{{ $listing->user->name }}</h5>
                @if ($listing->user->image)
                    <img src="{{ asset('storage/' . $listing->user->image) }}" alt="company picture" style="width: 200px"
                        class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/200x200/?seeker" alt="job" class="img-fluid">
                @endif
                <div class="p-3 text-start small"> {!! $listing->user->desc !!} </div>
            </article>
        </div>
    </div>
@endsection
