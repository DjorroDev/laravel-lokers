@extends('dashboard.layouts.main')

@section('main')
    <div class="row justify-content-center">
        <x-box class="col-md-8">
            <h1 class="text-center ">{{ $app->applicant->name }}</h1>
            <h5 class="text-center text-muted mb-3 border-bottom border-2 border-secondary pb-2">
                {{ $app->applicant->email }}</h5>
            <img src="{{ asset($app->applicant->image) }}" alt="job" style="width: 250px"
                class="d-block me-auto my-2 ms-auto mb-3 rounded-circle">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-1">Address</h5>
                            <p class="card-text">{{ $app->applicant->address }}
                            </p>
                        </div>
                    </div>
                </div>
                @if ($app->applicant->file)
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title border-bottom pb-1">Resume</h5>
                                <div class="border border-dark mb-3 p-2">
                                    <i data-feather="file"></i> <a class="text-decoration-none text-dark" target="_blank"
                                        href="{{ asset('storage/' . $app->applicant->file) }}">Download File</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <h5 class="border-bottom pb-1">About Me</h5>
            {!! $app->applicant->desc !!}
        </x-box>
    </div>
@endsection
