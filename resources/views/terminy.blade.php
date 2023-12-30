@extends('layout.layout')

@section('title', 'Termíny')

@section('content')

    <div class="container px-4 py-3" id="icon-grid">
        <h2 style="text-align: center" class="pb-2 border-bottom">Termíny</h2>

        <div class="row row-cols-1 row-cols-sm-2 g-4 py-5 center-last-column">
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0">Vodičský kurz motocykel <i class="bi bi-bicycle" style="font-size: 25px"></i> </h4>
                    <p>Nový kurz začína každé 2 týždne.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0">Vodičský kurz osobný automobil <i class="bi bi-car-front-fill" style="font-size: 25px"></i></h4>
                    <p>Kurz na osobný automobil sa otvára každé dva mesiace.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0">Vodičský kurz nákladný automobil <i class="bi bi-truck" style="font-size: 25px"></i></h4>
                    <p>Kurz pre získanie vodičského oprávnenia na nákladný automobil začína každý mesiac.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0">Vodičský kurz autobus <i class="bi bi-bus-front" style="font-size: 25px"></i></h4>
                    <p>Kurz pre získanie vodičského oprávnenia na autobus začína každý mesiac.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0">Kvalifikačná karta vodiča <i class="bi bi-person-vcard" style="font-size: 25px"></i></h4>
                    <p>Kurz sa uskutočňuje každý mesiac, alebo podľa záujmu. Pravidelný výcvik sa začína každé 2 týždne, alebo taktiež v prípade záujmu.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
