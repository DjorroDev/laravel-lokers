@extends('layouts.main')

@section('container')
    <section>
        <div class="card bg-dark text-white mb-5">
            <img src="https://source.unsplash.com/1200x400/?seeker" style="opacity:30%"
                class="card-img img-responsive d-sm-block" alt="jobs">
            <div
                class="card-img-overlay d-lg-flex d-lg-equal flex-wrap flex-column align-items-center justify-content-evenly">
                <h1 class="display-4 my-3 fw-normal ">Find your dream job here</h1>
                <p class="lead fw-normal text-center">And an even wittier subheading to boot. Jumpstart
                    your
                    marketing
                    efforts with this example based on Apple's marketing pages.</p>
                <a class="btn btn-secondary" href="#">Register Now</a>
            </div>
        </div>
    </section>
    <section>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Looking for job?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis excepturi dolorem nemo blanditiis
                        ex cumque aperiam quam nesciunt libero assumenda?</p>
                    <button class="btn btn-outline-light" type="button">Search job</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Want to hire people?</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, neque odit asperiores est dicta at
                        natus dolorem tempore rem quibusdam.</p>

                    <button class="btn btn-outline-secondary" type="button">Post a job</button>
                </div>
            </div>
        </div>

    </section>
    <section class="justify-content-center">
        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Find the great Job</h2>
                    <p class="lead">And an even wittier subheading.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;">
                    <button class="btn btn-dark px-5 py-3" style="position:relative; top:40%;">Click</button>
                </div>
            </div>
            <div class="bg-light me-md-3 pt-3 px-3 border-1 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Hiring?</h2>
                    <p class="lead">Best place jobs ads find best people.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;">
                    <button class="btn btn-light px-5 py-3" style="position:relative; top:40%;">Click</button>
                </div>
            </div>
        </div>
    </section>
@endsection
