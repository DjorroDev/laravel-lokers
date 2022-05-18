@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <x-box class="col-md-8">
            <h1 class="text-center">Profile</h1>
            <img src="https://source.unsplash.com/200x200/?seeker" alt="job"
                class="d-block me-auto ms-auto mb-3 rounded-circle">
            <form method="post" action="/dashboard/lists">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full name</label>
                    <input type="text" name="title" placeholder="Job's title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $user->name) }}"
                        aria-describedby="title">
                    <div class="invalid-feedback">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="tags" value="{{ old('tags', $user->email) }}"
                        placeholder="example: developer, progammer, etc"
                        class="form-control @error('tags') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('tags')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" value="{{ old('location', $user->location) }}"
                        placeholder="Address place" class="form-control @error('location') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('location')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile">
                    <div class="invalid-feedback">
                        @error('image')
                            is-invalid
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Resume or CV</label>
                    <input class="form-control @error('file') is-invalid @enderror" type="file" id="formFile">
                    <div class="invalid-feedback">
                        @error('file')
                            is-invalid
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description (Tell us more about yourself)</label>
                    @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <input id="x" name="description" type="hidden" value="{{ old('description', $user->description) }}"
                        name="content">
                    <trix-editor input="x"></trix-editor>
                </div>

                <button type="submit" class="btn btn-dark">Save change</button>
            </form>
        </x-box>
    </div>
@endsection
