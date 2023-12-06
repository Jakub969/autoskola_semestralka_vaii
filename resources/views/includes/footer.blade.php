<footer class="pt-5 bg-dark mt-auto text-white">
    <script src="{{ asset('js/validacia_formulara.js') }}"></script>
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
                <form id="myForm">
                    <h5>Prihláste sa na odber aby ste získali novinky.</h5>
                    <p>Získajte prehľad toho, čo je u nás nové a vzrušujúce.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="email" class="visually-hidden">Email address</label>
                        <input id="email" type="text" class="form-control" placeholder="Emailová adresa">
                        <span id="emailError" style="color:red"></span>
                        <input class="btn btn-primary" type="submit">
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
