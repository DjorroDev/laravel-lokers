@extends('dashboard.layouts.main')

@section('main')
    <div class="row justify-content-center">
        <x-box class="col-md-8">
            <h1 class="text-center">Profile</h1>
            <x-flash-message type="success" />
            <img src="{{ asset('storage/' . $app->applicant->image) }}" alt="job" style="width: 250px"
                class="d-block me-auto  ms-auto mb-3 rounded-circle">
            <h5>Name:</h5>
            <p> {{ $app->applicant->name }}</p>
            <h5>Address:</h5>
            <address> {{ $app->applicant->address }}</address>
            <h5>Email:</h5>
            <p> {{ $app->applicant->email }}</p>
            <h5>Resume:</h5>
            @if ($app->applicant->file)
                <div class="border border-dark mb-3 p-2">
                    <i data-feather="file"></i> <a class="text-decoration-none text-dark" target="_blank"
                        href="{{ asset('storage/' . $app->applicant->file) }}">Download File</a>
                </div>
            @else
                No Attachment
            @endif
            <h5>Description</h5>
            {!! $app->applicant->desc !!}
        </x-box>
    </div>
@endsection
