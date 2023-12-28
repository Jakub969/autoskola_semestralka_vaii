@extends('layout.layout')

@section('title', 'Prives')

@section('content')
    <div class="container py-3">
        <header>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Ceník</h1>
                <p class="fs-5 text-muted">Vyberte si kurz pre prívesy, ktorý vám vyhovuje.</p>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Trojmesačný</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">550€</h1>
                            <a href="{{ url('/checkout') }}" class="w-100 btn btn-lg btn-outline-primary">Prihlásiť sa</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Dvojmesačný</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">750€</h1>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Prihlásiť sa</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Mesačný</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">950€</h1>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Prihlásiť sa</button>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Porovnanie plánu</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th style="width: 34%;"></th>
                        <th style="width: 22%;">Trojmesačný</th>
                        <th style="width: 22%;">Dvojmesačný</th>
                        <th style="width: 22%;">Mesačný</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="text-start">Trvanie</th>
                        <td><p>Trvanie 3 mesiace+skúška</p></td>
                        <td><p>Trvanie 2 mesiace+skúška</p></td>
                        <td><p>Trvanie 1 mesiac+skúška</p></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Min. vek</th>
                        <td><p>18 rokov</p></td>
                        <td><p>18 rokov</p></td>
                        <td><p>18 rokov</p></td>
                    </tr>
                    </tbody>

                    <tbody>
                    <tr>
                        <th scope="row" class="text-start">Individuálny čas výučby</th>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Individuálny čas jázd</th>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Dni v týždni</th>
                        <td><p>Pondelok - Sobota</p></td>
                        <td><p>Pondelok - Nedeľa</p></td>
                        <td><p>Pondelok - Nedeľa</p></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Voľba inštruktora</th>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Na splátky bez navýšenia</th>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                        <td><i class="bi bi-check"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

@endsection
