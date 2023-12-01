@extends('layout.layout')

@section('title', 'Fotogaleria')

@section('content')
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
            <div class="col-12 col-md-6 col-lg-12 py-3">
                <img src="fotky_auta/B/01.jpg" data-target="#indicators" data-slide-to="0" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/02.jpg" data-target="#indicators" data-slide-to="1" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/03.jpg" data-target="#indicators" data-slide-to="2"  alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/04.jpg" data-target="#indicators" data-slide-to="3" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/05.jpg" data-target="#indicators" data-slide-to="4"  alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/06.jpg" data-target="#indicators" data-slide-to="5" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/07.jpg" data-target="#indicators" data-slide-to="6" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/08.jpg" data-target="#indicators" data-slide-to="7" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/09.jpg" data-target="#indicators" data-slide-to="8"  alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/10.jpg" data-target="#indicators" data-slide-to="9" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/11.jpg" data-target="#indicators" data-slide-to="10"  alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/12.jpg" data-target="#indicators" data-slide-to="11" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/13.jpg" data-target="#indicators" data-slide-to="12" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/B/14.jpg" data-target="#indicators" data-slide-to="13" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/A/01.jpg" data-target="#indicators" data-slide-to="14"  alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/A/02.jpg" data-target="#indicators" data-slide-to="15" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/A/03.jpg" data-target="#indicators" data-slide-to="16"  alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/A/04.jpg" data-target="#indicators" data-slide-to="17" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/C/01.jpg" data-target="#indicators" data-slide-to="18" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/C/02.jpg" data-target="#indicators" data-slide-to="19" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/D/01.jpg" data-target="#indicators" data-slide-to="20"  alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/D/02.jpg" data-target="#indicators" data-slide-to="21" alt="" >
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <img src="fotky_auta/T/01.jpg" data-target="#indicators" data-slide-to="22"  alt="" >
            </div>
        </div>


        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="indicators" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#indicators" data-slide-to="0" class="active"></li>
                            <li data-target="#indicators" data-slide-to="1"></li>
                            <li data-target="#indicators" data-slide-to="2"></li>
                            <li data-target="#indicators" data-slide-to="3"></li>
                            <li data-target="#indicators" data-slide-to="4"></li>
                            <li data-target="#indicators" data-slide-to="5"></li>
                            <li data-target="#indicators" data-slide-to="6"></li>
                            <li data-target="#indicators" data-slide-to="7"></li>
                            <li data-target="#indicators" data-slide-to="8"></li>
                            <li data-target="#indicators" data-slide-to="9"></li>
                            <li data-target="#indicators" data-slide-to="10"></li>
                            <li data-target="#indicators" data-slide-to="11"></li>
                            <li data-target="#indicators" data-slide-to="12"></li>
                            <li data-target="#indicators" data-slide-to="13"></li>
                            <li data-target="#indicators" data-slide-to="14"></li>
                            <li data-target="#indicators" data-slide-to="15"></li>
                            <li data-target="#indicators" data-slide-to="16"></li>
                            <li data-target="#indicators" data-slide-to="17"></li>
                            <li data-target="#indicators" data-slide-to="18"></li>
                            <li data-target="#indicators" data-slide-to="19"></li>
                            <li data-target="#indicators" data-slide-to="20"></li>
                            <li data-target="#indicators" data-slide-to="21"></li>
                            <li data-target="#indicators" data-slide-to="22"></li>
                        </ol>
                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <img class="d-block w-100 img-fluid" src="fotky_auta/B/01.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/02.jpg" alt="Prvý slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/03.jpg" alt="Druhý slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/04.jpg" alt="Tretí slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/05.jpg" alt="Štvrtý slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/06.jpg" alt="Piaty slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/07.jpg" alt="Šiesty slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/08.jpg" alt="Siedmy slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/09.jpg" alt="Eight slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/10.jpg" alt="Deviaty slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/11.jpg" alt="Desiaty slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/12.jpg" alt="Jedenasty slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/13.jpg" alt="Dvanasty slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/B/14.jpg" alt="Trinásty slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/A/01.jpg" alt="Štrnástny slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/A/02.jpg" alt="15 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/A/03.jpg" alt="16 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/A/04.jpg" alt="17 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/C/01.jpg" alt="18 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/C/02.jpg" alt="19 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/D/01.jpg" alt="20 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/D/02.jpg" alt="21 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fotky_auta/T/01.jpg" alt="22 slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
