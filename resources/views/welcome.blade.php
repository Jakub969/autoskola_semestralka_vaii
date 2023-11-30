<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autoškola Hrubizna</title>
    <link rel="icon" type="image/png" href="{{asset("fotky/logo.png")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/mystylesheet.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <nav class="navbar bg-dark">
            <div class="container">
                <a class="navbar-brand" href="welcome.blade.php">
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
                        <li><a class="dropdown-item" href="osobny_automobil.html">Osobný automobil</a></li>
                        <li><a class="dropdown-item" href="#">Motocykel</a></li>
                        <li><a class="dropdown-item" href="#">Nákladný automobil</a></li>
                        <li><a class="dropdown-item" href="#">Autobus</a></li>
                        <li><a class="dropdown-item" href="#">Traktor</a></li>
                        <li><a class="dropdown-item" href="#">Príves</a></li>
                    </ul>
                </li>
                <li><a class="nav-link active" aria-current="page" href="#">Termíny</a></li>
                <li><a class="nav-link active" aria-current="page" href="fotogaleria.html">Fotogaléria</a></li>
                <li><a class="nav-link active" aria-current="page" href="#">Kontakty</a></li>
            </ul>
            <div class="text-end">
                <a href="prihlasenie.html" class="btn btn-outline-light me-2 mb-2">Prihlásiť sa</a>
                <button type="button" class="btn btn-warning mb-2">Zaregistrovať sa</button>
            </div>
        </div>
    </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset("fotky/seat_leon.png")}}" class="d-block" alt="seat_leon">
        </div>
        <div class="carousel-item">
            <img src="{{asset("fotky/sanderoComet.png")}}" class="d-block" alt="sanderoComet">
        </div>
        <div class="carousel-item">
            <img src="{{asset("fotky/volkswagen_tiguan.png")}}" class="d-block" alt="ford_focus">
        </div>
        <div class="carousel-item">
            <img src="{{asset("fotky/honda_civic.png")}}" class="d-block" alt="honda_civic">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<main class="px-3">
    <h1>O nás</h1>
    <p class="lead">Autoškola Hrubizna vznikla v roku 2001 a od tohoto obdobia až doteraz prevádzkuje prípravu pre
        vodičov všetkých skupín vodičských oprávnení. Výsledkom tejto činnosti sú tisíce dobrých a spokojných vodičov.
        Súčasťou našej činnosti sú školenia pre vodičov referentov ako aj vodičov z povolania. Od roku 2010 sme našu
        činnosť rozšírili aj o prípravu vodičov z povolania k získaniu kvalifikačnej karty vodiča. Od začiatku je našim
        cieľom poskytnúť uchádzačom vhodné podmienky pri výcviku a výuke, čo zabezpečujeme na kvalitnej úrovni v
        zrekonštruovaných priestoroch.</p>
    <p class="lead">
        <a href="kurzy.html" class="btn btn-lg btn-primary fw-bold border-white bg-black">Prihlásiť sa na kurz</a>
    </p>
</main>
<footer class="pt-5 bg-dark mt-auto text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Výhody</h5>
                <ul class="list list-icons list-primary mt-2" style="color: #fdfdfd;">
                    <li><i class="fa fa-check"></i> skúsenosti a znalosti od založenia r. 2001</li>
                    <li><i class="fa fa-check"></i> platba na splátky bez navýšenia</li>
                    <li><i class="fa fa-check"></i> kurz prvej pomoci v autoškole</li>
                    <li><i class="fa fa-check"></i> prispôsobenie kurzu na mieru</li>
                    <li><i class="fa fa-check"></i> vozidlá v plnej výbave</li>
                    <li><i class="fa fa-check"></i> individuálny prístup</li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Prihláste sa na odber aby ste získali novinky.</h5>
                    <p>Získajte prehľad toho, čo je u nás nové a vzrušujúce.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Emailová adresa">
                        <button class="btn btn-primary" type="button">Odoberať</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2023 Autoškola Hrubizna s.r.o. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook" style="font-size: 25px; color: #fdfdfd"></i></a></li>
                <li class="ms-3"><a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram" style="font-size: 25px; color: #fdfdfd"></i></a></li>
                <li class="ms-3"><a href="https://twitter.com/?lang=sk" target="_blank"><i class="bi bi-twitter-x" style="font-size: 25px; color: #fdfdfd"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
