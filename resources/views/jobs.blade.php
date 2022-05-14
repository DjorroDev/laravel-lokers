@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <form class="mt-3 col-10" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search jobs" aria-label="Search jobs"
                    aria-describedby="basic-addon2">
                <button type="submit" class=" input-group-text btn btn-secondary">Search</button>
            </div>

        </form>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-3">
                <div class=" row g-0">
                    <div class="col-md-3">
                        <img src="https://source.unsplash.com/200x200/?seeker" style="max-height: 300px;"
                            class="img-fluid rounded-start overflow-hidden border-right" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <button class="btn btn-dark btn mb-2">Apply job</button>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card mb-3">
                <div class=" row g-0">
                    <div class="col-md-3">
                        <img src="https://source.unsplash.com/200x200/?seeker" style="max-height: 300px;"
                            class="img-fluid rounded-start overflow-hidden border-right" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <button class="btn btn-dark btn mb-2">Apply job</button>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card mb-3">
                <div class=" row g-0">
                    <div class="col-md-3">
                        <img src="https://source.unsplash.com/200x200/?seeker" style="max-height: 300px;"
                            class="img-fluid rounded-start overflow-hidden border-right" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <button class="btn btn-dark btn mb-2">Apply job</button>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
