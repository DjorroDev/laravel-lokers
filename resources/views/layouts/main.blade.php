<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lokers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><span data-feather="briefcase"></span> Lokers</a>
                <button class="navbar-toggler btn-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('jobs*') ? 'active' : '' }} " href="/jobs">Job
                                Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Post Job</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">{{ auth()->user()->name }} <i class="bi bi-person-circle"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Profil</a></li>
                                    <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right"></i>
                                                Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="/login" class="rounded-0 btn btn-outline-light">Login</a>
                                    </li>
                                    <li>
                                        <a href="/register" class="rounded-0 btn btn-light">Register</a>
                                    </li>
                                @endauth
                            </ul>
                            {{-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form> --}}
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-2">
            @yield('container')
        </div>
    </main>

    {{-- <footer class="text-white">
        <div class="bg-dark py-2">
            <p class="container">&copy; 2022 Company, Inc. All rights reserved.</p>
        </div>
    </footer> --}}
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
