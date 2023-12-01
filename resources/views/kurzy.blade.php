@extends('layout.layout')

@section('title', 'Kurzy')

@section('content')

    <div class="album py-5 bg-light">
    <div class="container">
        <!--TODO nastaviť card body aby bolo dole-->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{asset("fotky/volkswagen_tiguan.png")}}" alt="osobny_automobil">
                    <div class="card-body">
                        <p class="card-text">Osobný automobil</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn">
                                <a href="{{url('/osobny_automobil')}}" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{asset("fotky/motocykel.png")}}" alt="motocykel">
                    <div class="card-body">
                        <p class="card-text">Motocykel</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{asset("fotky/nakladny_automobil.png")}}" alt="nakladny_automobil">
                    <div class="card-body">
                        <p class="card-text">Nákladný automobil</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{asset("fotky/autobus.png")}}" alt="autobus">
                    <div class="card-body">
                        <p class="card-text">Autobus</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{asset("fotky/tractor.png")}}" alt="traktor">
                    <div class="card-body">
                        <p class="card-text">Traktor</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{asset("fotky/trailer.png")}}" alt="prives">
                    <div class="card-body">
                        <p class="card-text">Príves</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
