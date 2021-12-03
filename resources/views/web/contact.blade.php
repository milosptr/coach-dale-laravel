@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')
        {{-- Start contakt-background --}}
        <div class="contakt-background">

            <div class="col-12 text-center p-3 mt-2">
                <h1>KONTAKT</h1>
                <p>TU SAM ZA SVA VASA PITANJA.</p>
            </div>

            {{-- Start Container --}}
            <div class="container">
                <div class="row p-0 m-0">
                    <div class="col-4">
                        <div id="accordion">
                            <div class="question">
                                <div id="heading1">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse1"
                                            aria-expanded="true" aria-controls="collapse1"
                                            class="btn col-12 p-0 color-withe"> Kako izgleda
                                            online saradnja? </button></h5>
                                </div>
                                <div id="collapse1" aria-labelledby="heading1" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Nakon što pregledaš videe o ponuđenim
                                        programima možeš me kontaktirati za dodatne konsultacije. Nakon izvršene uplate za
                                        određeni vremenski period, dobijaš log in za svoj profil na sajtu gdje ćeš imati
                                        početni upitnik kao I tabelu gdje ćes uploadovati slike progresa kilažu I mjere
                                        svakog vikenda. Imaćes pristup video klipovima svih vježbi I pored ovoga možeš mi
                                        slati klipove vježbi kako bi ispravljali tehniku I pisati kad god želiš na whatsappu
                                        za dodatne konsultacije I nedoumice. Kompletna online saradnja obuhvata I plan
                                        treninga I nutrition coaching. </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="mt-4">
                            <div class="question">
                                <div id="heading1-1">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse1-1"
                                            aria-expanded="true" aria-controls="collapse1-1"
                                            class="btn col-12 p-0 color-withe"> Šta je nutrition
                                            coaching? </button></h5>
                                </div>
                                <div id="collapse1-1" aria-labelledby="heading1-1" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Nutrition coaching je najbolje rečeno
                                        način da naučiš da se pravilno hraniš I jedeš onako kako je najbolje za tvoje
                                        potrebe, cilj I životni stil. U sklopu nutrition coachinga dobijaš EBOOK sa kratkom
                                        edukacijom I makronutrijentima,tajmingu obroka, zdravim navikama kao I 50+ zdravih
                                        recepata, nedeljni check in kao I svakodnevne whatsapp konsultacije. Nakon izvršene
                                        uplate dobijaš log in za svoj profil gdje popuniš upitnik I sve podatke, odradimo
                                        dodatne konsultacije I krećemo sa saradnjom. Prvih nedelju dana upisuješ u
                                        aplikaciju sta jedeš I svakodnevno mi šalješ da u hodu korigujemo šta treba da bi
                                        već od sledeće nedelje dobio tačan iznos kalorija I raspored makrosa koji pratiš za
                                        najbolje rezultate. Dobro je da me izvještavaš I o treninzima koje radiš kako bih
                                        imao uvid u izvore energije koje trošiš najviše. </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="mt-4">
                            <div class="question">
                                <div id="heading1-2">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse1-2"
                                            aria-expanded="true" aria-controls="collapse1-2"
                                            class="btn col-12 p-0 color-withe"> Da li moram da
                                            treniram u teretani? </button></h5>
                                </div>
                                <div id="collapse1-2" aria-labelledby="heading1-2" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Trening u teretani tj sa opterećenjem
                                        je poželjan za bolje rezultate ali ako nisi u mogućnosti da posjećujes teretanu a
                                        imaš tegove kod kuće možemo I tako praviti plan. Ako si totalni početnik I nakon
                                        odrađenih testova I konsultacija utvrdimo tvoj nivo, možda su I treninzi bez
                                        opterećenja najbolji izbor prve 4 nedelje </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="mt-4">
                            <div class="question">
                                <div id="heading1-3">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse1-3"
                                            aria-expanded="true" aria-controls="collapse1-3"
                                            class="btn col-12 p-0 color-withe"> Na kom jeziku su
                                            pisani treninzi? </button></h5>
                                </div>
                                <div id="collapse1-3" aria-labelledby="heading1-3" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Sve planove treninga pišem na
                                        engleskom jeziku. Ovo je malo I navika zbog CrossFit-a ali je ujedno I vama lakše da
                                        neku vježbu nađete na youtube-u pod engleskim nazivom prije nego na srpskom.
                                        Objašnjenja treninga su pisana na srpskom ali u priručniku koji dobijete imate skoro
                                        sva objašnjenja. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="accordion">
                            <div class="question">
                                <div id="heading2">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse2"
                                            aria-expanded="true" aria-controls="collapse2"
                                            class="btn col-12 p-0 color-withe"> Kako da izaberem
                                            program za sebe? </button></h5>
                                </div>
                                <div id="collapse2" aria-labelledby="heading2" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Odgledaj video online saradnje da
                                        vidiš šta nudim, ali ćemo svakako nakon odrađenih konsultacija odrediti najbolji
                                        program shodno tvom cilju, stanju I navikama. Ako nakon odrađenih konsultacija
                                        utvrdim da ni jedan od ponuđenih programa nije pogodan za tebe onda kreiramo nov
                                        shodno tvojim potrebama I mogućnostima. Postoji I mogućnost pisanja treninga na
                                        nedeljnom nivou radi boljih progresija. </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="mt-4">
                            <div class="question">
                                <div id="heading2-2">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse2-2"
                                            aria-expanded="true" aria-controls="collapse2-2"
                                            class="btn col-12 p-0 color-withe"> Kako funkcionišu
                                            personalni treninzi? </button></h5>
                                </div>
                                <div id="collapse2-2" aria-labelledby="heading2-2" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Nakon odrađenih konsultacija I
                                        popunjavanja PARQ zdravstvenog upitnika radi se kompletno mjerenje tjelesne
                                        kompozicije (TANITA vaga, mjere/obimi , mjerenje % masti kaliperom, slikanje radi
                                        boljeg praćenja napretka) FMS testovi (testovi funkcionalne pokretljivosti),
                                        kardiovaskulardni test I testovi snage nakon čega kreiramo plan I program treninga.
                                        Broj treninga u nedelji će zavisiti od trenutnog stanja, cilja kao I od tvog
                                        budžeta. </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="mt-4">
                            <div class="question">
                                <div id="heading2-3">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse2-3"
                                            aria-expanded="true" aria-controls="collapse2-3"
                                            class="btn col-12 p-0 color-withe"> Do kad imam
                                            pristup svom profilu? </button></h5>
                                </div>
                                <div id="collapse2-3" aria-labelledby="heading2-3" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Pristup profilu I videoteci imaš za
                                        uplaćeni vremenski period. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="accordion">
                            <div class="question">
                                <div id="heading3">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse3"
                                            aria-expanded="true" aria-controls="collapse3"
                                            class="btn col-12 p-0 color-withe"> Kakve rezultate
                                            mogu da očekujem? </button></h5>
                                </div>
                                <div id="collapse3" aria-labelledby="heading3" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Svaka individua napreduje različitom
                                        brzinom. Ono što mogu da ti kažem je da je za svaku promjenu potrebno vrijeme I
                                        garantujem da ćemo postići najbolje rezultate ako budeš poštovao plan I komunicirao
                                        sa mnom. </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="mt-4">
                            <div class="question">
                                <div id="heading3-1">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse3-1"
                                            aria-expanded="true" aria-controls="collapse3-1"
                                            class="btn col-12 p-0 color-withe"> Koliko puta
                                            nedeljno moram da treniram? </button></h5>
                                </div>
                                <div id="collapse3-1" aria-labelledby="heading3-1" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Broj nedeljnih treninga će zavisiti
                                        od tvoje trenutne utreniranosti, nivoa stresa I ostalih aktivnosti koje imaš u toku
                                        dana/nedelje. Moje mišljenje je da je 3 treninga sa opterećenjem na nedeljnom nivou
                                        neki minimum a sa 4 se već mogu očekivati I bolji rezultati. </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="mt-4">
                            <div class="question">
                                <div id="heading3-2">
                                    <h5 class="mb-0"><button data-toggle="collapse" data-target="#collapse3-2"
                                            aria-expanded="true" aria-controls="collapse3-2"
                                            class="btn col-12 p-0 color-withe"> Da li mogu da
                                            kupim samo program? </button></h5>
                                </div>
                                <div id="collapse3-2" aria-labelledby="heading3-2" data-parent="#accordion"
                                    class="collapse">
                                    <div class="card-body"> Ako si iskusniji vježbač I želiš da
                                        kupiš samo plan treninga bez konsultacija I komuniciranja sa mnom možeš me
                                        kontaktirati da izaberemo najbolju opciju za tebe. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Contatiner --}}

            {{-- Start Contact Section --}}
            <section id="contact" class="contact py-5">
                {{-- Start Container --}}
                <div class="container">
                    {{-- Start contakt-box --}}
                    <div class="row contakt-box p-3">

                        {{-- start col-md-6 --}}
                        <div class="col-md-6">

                            <div class="col-md-12 mb-2">
                                <h3>PIŠITE MI!​</h3>
                                <p>
                                    Možeš da mi se javiš putem Instagrama, Facebooka, Vibera ili
                                    WhatsApp-a gde redovno komuniciram sa klijentima, i upućujem ih ako imaju neka dodatna
                                    pitanja u vezi sa online saradnjom. Uvek odgovaram na poruke, tako da možeš očekivati da
                                    se isti dan dogovorimo o svemu što je bitno za dalju saradnju...
                                </p>
                            </div>

                            <div class="address">
                                <h5>Adresa:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Beograd, Srbija
                                    </li>
                                </ul>
                            </div>

                            <div class="email">
                                <h5>Email:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        mrdak.dragutin@gmail.com
                                    </li>
                                </ul>
                            </div>

                            <div class="phone">
                                <h5>Telefon:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        063/ 87 - 09 - 090
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- start col-md-6 --}}
                        <div class="col-md-6">

                            <div>

                                {{-- Start card-body --}}
                                <div class="card-body">
                                    {{-- Start form --}}
                                    <form novalidate="" class="ng-untouched ng-pristine ng-valid">

                                        <div class="form-row row">

                                            <div class="form-group col-md-6">
                                                <input id="Full Name" name="Full Name"
                                                    placeholder="Vase ime i Prezime" type="text"
                                                    class="form-control mb-md-0 mb-3">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input type="email" id="inputEmail4"
                                                    placeholder="Vas Email" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-row mt-4">

                                            <div class="form-group col-md-12">
                                                <textarea id="comment" name="comment"
                                                    cols="40" rows="5" placeholder="Vasa Poruka"
                                                    class="form-control"></textarea>
                                            </div>

                                        </div>

                                        <div class="form-row mt-4 text-center">
                                            <button type="button" class="btn btn-danger">
                                                Posalji <i class="fas fa-paper-plane"></i>
                                            </button>
                                        </div>

                                    </form>
                                    {{-- End form --}}

                                </div>
                                {{-- End card-body --}}

                            </div>
                        </div>

                    </div>
                    {{-- End contakt-box --}}

                {{-- End Container --}}
                </div>

            </section>
            {{-- End Contact Section --}}

        </div>
        {{-- End contakt-background --}}

        <div class="mt-2">
            @include('web.includes.footer')
        </div>


    </div>

@endsection
