@extends('dashboard.layouts.main')

@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }} </h1>
    </div>
    <h2>Job Lists</h2>
    <a href="/dashboard/lists/create" class="btn btn-dark my-3">Create new list</a>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped mb-6">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Listed at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lists as $list)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $list->title }}</td>
                            <td>
                                <x-tags :tagsCsv="$list->tags" readOnly="true" />
                            </td>
                            <td> {{ $list->created_at->diffForhumans() }} </td>
                            <td><a href="" class="badge bg-dark">
                                    <i data-feather="eye"></i>
                                </a>
                                <a href="" class="badge bg-secondary">
                                    <i data-feather="edit"></i>
                                </a>
                                <a href="" class="badge bg-danger">
                                    <i data-feather="x-circle"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
