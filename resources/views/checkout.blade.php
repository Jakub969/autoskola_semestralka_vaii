<!DOCTYPE html>
<html lang="sk"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/checkout/form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <a href="{{ url('/') }}"><img class="d-block mx-auto mb-2" src="{{asset("fotky/logo.png")}}" alt="logo" style="width: 125px; height: 75px"></a>
            <h2>Checkout form</h2>
            <p class="lead">Prosím vyplňte formulár o platbe.</p>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Váš košík</span>
                    <span class="badge bg-primary rounded-pill">1</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Názov kurzu</h6>
                            <small class="text-muted">{{ $course }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Celkovo (EUR)</span>
                        <strong>{{ $price }}€</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Fakturačná adresa</h4>
                <form class="needs-validation was-validated" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Meno</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Meno je povinné.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Priezvisko</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Priezvisko je povinné.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
                            <div class="invalid-feedback">
                                Prosím zadajte validnú emailovú adresu.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Adresa</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Prosím zadajte správnu adresu.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Adresa 2 <span class="text-muted">(Nepovinné)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Platba</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                                <label class="form-check-label" for="credit">Kreditná karta</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="debit">Debetná karta</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Meno na karte</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Meno na karte je povinné
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Číslo karty</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Číslo karty je povinné
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Dátum expirácie</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Dátum expirácie je povinný
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Bezpečnostný kód je povinný
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Pokračovať k zaplateniu</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2023 Autoškola Hrubizna s.r.o.</p>
    </footer>
</div>


<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://getbootstrap.com/docs/5.0/examples/checkout/form-validation.js"></script>


</body></html>
