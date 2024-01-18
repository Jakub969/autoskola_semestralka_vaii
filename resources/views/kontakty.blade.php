@extends('layout.layout')

@section('title', 'Kontakty')

@section('content')
    <div class="container">

    <section class="p-1">

        <!--Section: Contact v.1-->
        <section class="section pb-5">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Kontaktujte nás</h2>
            <!--Section description-->
            <p class="lead">V autoškole sa vždy snažíme poskytnúť najlepšiu možnú službu. Ak máte akékoľvek otázky, priania alebo sťažnosti, neváhajte nás kontaktovať. Vaša spätná väzba je pre nás dôležitá a pomáha nám neustále sa zlepšovať.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 mb-4">

                    <!--Form with header-->
                    <div class="card">

                        <div class="card-body">
                            <!--Header-->
                            <form action="/messages" method="POST">
                                @csrf
                            <div class="form-header blue accent-1">
                                <h3><i class="fas fa-envelope"></i> Napíšte nám:</h3>
                            </div>

                            <p class="lead">Tešíme sa na vašu spätnú väzbu a ďakujeme vám za dôveru v naše služby.</p>
                            <br>

                            <!--Body-->
                            <div class="mb-3">
                                <i class="bi bi-person"></i>
                                <label for="form-name">Vaše meno</label>
                                <input type="text" id="form-name" name="name" class="form-control" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Meno je povinné.
                                </div>
                            </div>

                            <div class="mb-3">
                                <i class="bi bi-envelope-at-fill"></i>
                                <label for="form-email">Váš email</label>
                                <input type="text" id="form-email" name="email" class="form-control" placeholder="you@example.com" value="" required="">
                            </div>

                            <div class="mb-3">
                                <i class="bi bi-hash"></i>
                                <label for="form-Subject">Typ správy</label>
                                <input type="text" id="form-Subject" name="subject" class="form-control" placeholder="" value="" required="">
                            </div>

                            <div class="mb-3">
                                <i class="bi bi-chat-left-text"></i>
                                <label for="form-text">Správa</label>
                                <textarea id="form-text" class="md-textarea form-control" name="message" rows="3" placeholder="Váš text." required=""></textarea>
                            </div>

                            <div class="text-center mt-4">
                                <input class="btn btn-primary" type="submit">
                            </div>
                            </form>
                        </div>

                    </div>
                    <!--Form with header-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7">
                    <!--Google map-->
                    <div class="googlemap" style="margin-left: 50px; margin-right: 50px;">
                        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1303.4544691861806!2d18.761811!3d49.202287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471459479ebe78cd%3A0x5794f873537c6ba9!2sFakulta%20riadenia%20a%20informatiky%20%C5%BDilinskej%20univerzity%20v%20%C5%BDiline!5e0!3m2!1ssk!2ssk!4v1704122250373!5m2!1ssk!2ssk"
                                width="100%" height="600" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <br>
                    <!--Buttons-->
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1 waves-effect waves-light"><i class="fas fa-map-marker-alt"></i></a>
                            <p>052 01  Spišská Nová Ves</p>
                            <p>Sládkovičova 7</p>
                        </div>

                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1 waves-effect waves-light"><i class="fas fa-phone"></i></a>
                            <p>052/542 23 01</p>
                            <p>Pon - Pia, 8:00-22:00</p>
                        </div>

                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1 waves-effect waves-light"><i class="fas fa-envelope"></i></a>
                            <p>autoschool@autoschool.sk</p>
                            <p>autoschool8@gmail.com</p>
                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.1-->

    </section>
    </div>
@endsection
