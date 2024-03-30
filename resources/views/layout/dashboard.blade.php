<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row vh-100">
        <div class="offcanvas-lg offcanvas-start col bg-danger" style="max-width: 250px!important;" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
            <div class="offcanvas-body m-3 flex-column">
                <a class="text-light text-decoration-none " href="{{ route('dashboard') }}"><i class="bi bi-handbag"></i> SIMS Web App</a>
                <hr>
                <nav class="nav flex-column">
                    <a class="nav-link active text-light" aria-current="page" href="{{ route('dashboard') }}">
                        <i class="bi bi-box-seam"></i> Product
                    </a>
                    <a class="nav-link text-light" href="{{ route('dashboard.profile') }}">
                        <i class="bi bi-person"></i> Profile
                    </a>
                    <a class="nav-link text-light" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </nav>
            </div>
        </div>
        <div class="col p-3">
            <button class="btn btn-danger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"><i class="bi bi-list"></i></button>

            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>