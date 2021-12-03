@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')

        <!--  Start Slider  -->

        <div id="slider">
            <figure>
                <img src="https://sreten-angular.vercel.app/assets/slider1.jpg" alt="slider1">
                <img src="https://sreten-angular.vercel.app/assets/slider2.jpg" alt="slider2">
                <img src="https://sreten-angular.vercel.app/assets/slider3.jpg" alt="slider3">
                <img src="https://sreten-angular.vercel.app/assets/slider1.jpg" alt="slider1">
                <img src="https://sreten-angular.vercel.app/assets/slider2.jpg" alt="slider2">
            </figure>
        </div>

        <div class="row g-0 justify-content-center align-items-center">

            <div class="col-md-6 col-12 text-center animate__animated animate__backInDown">
                <p class="text-grey fs-4 text-uppercase">Dobrodosli</p>
                <p class="text-grey-white fs-1 text-uppercase">Dragutin Mrdak</p>
                <p class="fs-6">FITNES TRENER</p>
            </div>

            <div class="col-md-5 col-12 pr-4 mb-5 mt-4 animate__animated animate__backInUp">
                <p class="line-height font-weight-bold">
                    Ukoliko si u potrazi za personalnim
                    trenerom radi postizanja najboljih rezultata na pravom si mjestu, 8 godina personalnih treninga
                    i 5 godina CrossFit grupnih treninga mi je dao mnogo razlicitih profila i vjezbaca razlicitih
                    nivoa kao i izazova sto mi je pomoglo u kreiranju vise programa treninga koji te mogu dovesti do
                    cilja.
                </p>

                <br>

                <p class="line-height font-weight-light">
                    Moj fokus je prvenstveno na zdravlje
                    i dugorocnost u fitnesu/sportu kao i edukaciji klijenata, pa je i pristup svakom klijentu
                    individualizovan. Neke od mojih treninga sa klijentima mozete vidjeti na instagramu kao i
                    recepte koji dobijate u planu ishrane.
                </p>
            </div>

        </div>
        <!-- End Slider -->

        <!-- Start Container-Whtite -->
        <div class="container-white">

            <div class="container">

                <div class="col-12 text-center">
                    <h6 class="pt-4 color-red">ŽELJENI REZULTATI NADOMAK RUKE</h6>
                    <h2 class="pb-5 color-red">SAZNAJ VIŠE</h2>
                </div>

                <div class="text-center mb-5">

                    <iframe width="70%" height="450"
                        src="https://www.youtube.com/embed/fcN37TxBE_s" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="">
                    </iframe>

                </div>
            </div>

        </div>
        <!-- End Container-Whtite -->
        @include('web.includes.footer')

    </div>

@endsection
