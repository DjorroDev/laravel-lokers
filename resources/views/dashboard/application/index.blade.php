@extends('dashboard.layouts.main')

@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List of Applicants</h1>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table table-striped my-3 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Time applied</th>
                        <th scope="col">Attachment</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apps as $app)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="/dashboard/applications/{{ $app->id }}" class="text-decoration-none text-dark">
                                    <img src="{{ asset($app->applicant->image) }}" style="width: 100px"
                                        class="img-fluid" alt="123">
                                    {{ $app->applicant->name }} </a> </td>
                            <td>{{ $app->title }}</td>
                            <td>
                                @if ($app->applicant->file)
                                    <a class="text-decoration-none text-dark" target="_blank"
                                        href="{{ asset('storage/' . $app->applicant->file) }}"> <i
                                            data-feather="file"></i>
                                        See or download
                                        file</a>
                                @else
                                    No Attachment
                                @endif
                            </td>
                            <td> {{ $app->created_at->diffForhumans() }} </td>
                            <td><a href="/dashboard/applications/{{ $app->id }}" class="badge bg-dark">
                                    <i data-feather="eye"></i>
                                </a>
                                <button class="showModal badge bg-danger border-0" data-id="{{ $app->id }}"
                                    data-title="{{ $app->title }}" data-bs-toggle="modal" data-bs-target="#modal"><i
                                        data-feather="x-circle"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
