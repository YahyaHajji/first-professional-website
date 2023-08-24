<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/AdminMenu.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>@yield('title')</title>
</head>
<header>
    <nav class="menu navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <div class="logo me-auto">
                    <img src="{{ asset('images/Logo-ATESMA.png')}}" alt="atesma logo">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="ul-menu navbar-nav ms-auto">

                    <li class="li-menu nav-item">
                        <a class="nav-link text-dark" href="{{route('app.certi')}}">Certifications</a>
                    </li>
                    <li class="li-menu nav-item">
                        <a class="nav-link text-dark" href="{{route('admins.index')}}">Compte</a>
                    </li>
                    <li class="li-menu nav-item">
                        <a class="btn btn-danger" href="{{route('app.logout')}}">Deconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body style="background-color:#F6F1F1">
        @yield('content')
</body>

</html>
