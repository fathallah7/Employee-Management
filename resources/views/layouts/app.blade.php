<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
        }
        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-4" href="#">
            <i class="bi bi-stack"></i> Management
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-semibold {{ Request::routeIs('index') ? 'active text-primary' : '' }}" href="{{ route('index') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold {{ Request::routeIs('v') ? 'active text-primary' : '' }}" href="{{ route('index') }}">
                        Admins
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold {{ Request::routeIs('b') ? 'active text-primary' : '' }}" href="{{ route('index') }}">
                        Logout
                    </a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control rounded-pill me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary rounded-pill" type="submit">
                    <i class="bi bi-search"></i> Search
                </button>
            </form>
        </div>
    </div>
</nav>


@yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
