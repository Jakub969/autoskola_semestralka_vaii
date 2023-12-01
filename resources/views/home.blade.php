@extends('layout.layout')

@section('title', 'Home Page')

@section('content')

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
            <a href="{{ url('/kurzy') }}" class="btn btn-lg btn-primary fw-bold border-white bg-black">Prihlásiť sa na kurz</a>
        </p>
    </main>

@endsection
