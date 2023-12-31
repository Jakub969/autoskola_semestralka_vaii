@extends('layout.layout')

@section('title', 'Kontakty')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <div class="container">

    <section class="p-1">

        <!--Section: Contact v.1-->
        <section class="section pb-5">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Contact us</h2>
            <!--Section description-->
            <p class="section-description pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur
                accusamus veniam.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 mb-4">

                    <!--Form with header-->
                    <div class="card">

                        <div class="card-body">
                            <!--Header-->
                            <div class="form-header blue accent-1">
                                <h3><i class="fas fa-envelope"></i> Write to us:</h3>
                            </div>

                            <p>We'll write rarely, but with only the best content.</p>
                            <br>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="form-name" class="form-control">
                                <label for="form-name">Your name</label>
                            </div>

                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" id="form-email" class="form-control">
                                <label for="form-email">Your email</label>
                            </div>

                            <div class="md-form">
                                <i class="fas fa-tag prefix grey-text"></i>
                                <input type="text" id="form-Subject" class="form-control">
                                <label for="form-Subject">Subject</label>
                            </div>

                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix grey-text"></i>
                                <textarea id="form-text" class="md-textarea form-control" rows="3"></textarea>
                                <label for="form-text">Textarea</label>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-light-blue waves-effect waves-light">Submit</button>
                            </div>

                        </div>

                    </div>
                    <!--Form with header-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7">

                    <!--Google map-->
                    <div id="map-container-google-10" class="z-depth-1-half map-container-7" style="height: 400px">
                        <iframe src="https://maps.google.com/maps?q=new%20delphi&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>

                    <br>
                    <!--Buttons-->
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1 waves-effect waves-light"><i class="fas fa-map-marker-alt"></i></a>
                            <p>San Francisco, CA 94126</p>
                            <p>United States</p>
                        </div>

                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1 waves-effect waves-light"><i class="fas fa-phone"></i></a>
                            <p>+ 01 234 567 89</p>
                            <p>Mon - Fri, 8:00-22:00</p>
                        </div>

                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1 waves-effect waves-light"><i class="fas fa-envelope"></i></a>
                            <p>info@gmail.com</p>
                            <p>sale@gmail.com</p>
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
