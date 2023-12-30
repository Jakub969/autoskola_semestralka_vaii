<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fotogaléria</title>
    <link rel="icon" type="image/png" href="{{asset("fotky/logo.png")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/mystylesheet.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <nav class="navbar bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset("fotky/logo.png")}}" alt="logo" style="width: 125px; height: 75px">
                </a>
            </div>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Kurzy
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('/osobny_automobil')}}">Osobný automobil</a></li>
                        <li><a class="dropdown-item" href="{{url('/motocykel')}}">Motocykel</a></li>
                        <li><a class="dropdown-item" href="{{url('/nakladny_automobil')}}">Nákladný automobil</a></li>
                        <li><a class="dropdown-item" href="{{url('/autobus')}}">Autobus</a></li>
                        <li><a class="dropdown-item" href="{{url('/traktor')}}">Traktor</a></li>
                        <li><a class="dropdown-item" href="{{url('/prives')}}">Príves</a></li>
                    </ul>
                </li>
                <li><a class="nav-link active" aria-current="page" href="{{url('/terminy')}}">Termíny</a></li>
                <li><a class="nav-link active" aria-current="page" href="{{ url('/fotogaleria') }}">Fotogaléria</a></li>
                <li><a class="nav-link active" aria-current="page" href="{{ url('/kontakty') }}">Kontakty</a></li>
            </ul>
            <div class="text-end">
                <a href="{{url('/login')}}" class="btn btn-outline-light me-2 mb-2">Prihlásiť sa</a>
                <a href="{{url('/register')}}"  class="btn btn-warning mb-2">Zaregistrovať sa</a>
            </div>
        </div>
    </div>
</nav>
