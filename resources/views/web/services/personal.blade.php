@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')


        <h2 class="col-12 text-center mt-3 mb-5">Personalni Trening</h2>

        <div class="col-12">
            <h1>Veliki video ovde treba poslati...</h1>
        </div>
        {{-- Start p-2 --}}
        <div class="p-2">

            <p>
                Personalni treninzi, tj treninzi 1 na 1 su najdetaljniji oblik saradnje. Na samom
                pocetku klijent popunjava upitnik, zdravstveni skrining a onda se krece sa mjerenjem i testovima:
            </p>

            <ol>
                <li>Mjerenje tjelesnog sastava (Tanita, % masti kaliperom, obimi, slikanje)</li>
                <li>Test funkcionalne pokretljivosti</li>
                <li>Testovi snage i izdrzljivosti</li>
                <li>Testovi kardiorespiratorne forme</li>
            </ol>

            <p>
                Sva ova testiranja mi daju detaljan uvid u vase trenutno stanje posle kojih se
                postavlja cilj i pravi plan za postizanje istog. Uz sve pakete personalnih treninga se dobija i plan
                ishrane. Ukoliko niste upoznati sa makrosima i niste nikad pratili unos hrane, prvi mjesec je zbog pisanja
                plana ishrane ce biti malo uvecana cijena.
            </p>

            <h6>
                *Napomena* koliko ne dajete maksimum na treningu i ne pridrzavate plana ishrane,
                trener vam ne moze garantovati rezultate.
            </h6>

        </div>
        {{-- End p-2 --}}

        {{-- Start demo --}}
        <div class="demo">
            {{-- Start Container --}}
            <div class="container">
                {{-- Start row text-center --}}
                <div class="row text-center">
                    <h1 class="heading-title">Cenovnik</h1>
                </div>
                {{-- End row text-center --}}

                {{-- Start row --}}
                <div class="row">

                    {{-- Start col-md-4 col-sm-6 --}}
                    <div class="col-md-4 col-sm-6">

                        {{-- Start pricingTable --}}
                        <div class="pricingTable">

                            <div class="pricingTable-header">
                                <h3 class="heading">Standard</h3>
                                <span class="subtitle">12 Termina Mesecno</span>
                                <div class="price-value">200
                                    <span class="currency"> €</span>
                                    <span class="month">/mo</span>
                                </div>
                            </div>

                            <ul class="pricing-content">
                                <li>?</li>
                                <li>?</li>
                                <li>?</li>
                                <li>?</li>
                            </ul>

                            <a href="#" class="read">Prijavi se
                                <i class="fa fa-angle-right"></i>
                            </a>

                        </div>
                        {{-- End pricingTable --}}

                    </div>
                    {{-- End col-md-4 col-sm-6 --}}

                    {{-- Start col-md-4 col-sm-6 --}}
                    <div class="col-md-4 col-sm-6">

                        {{-- Start pricingTable --}}
                        <div class="pricingTable">

                            <div class="pricingTable-header">
                                <h3 class="heading">Business</h3>
                                <span class="subtitle">16 termina mesecno</span>
                                <div class="price-value">240
                                    <span class="currency"> €</span>
                                    <span class="month">/mo</span>
                                </div>
                            </div>

                            <ul class="pricing-content">
                                <li>?</li>
                                <li>?</li>
                                <li>?</li>
                                <li>?</li>
                            </ul>

                            <a href="#" class="read">Prijavi se
                                <i class="fa fa-angle-right"></i>
                            </a>

                        </div>
                        {{-- End pricingTable --}}

                    </div>
                    {{-- End col-md-4 col-sm-6 --}}

                    {{-- Start col-md-4 col-sm-6 --}}
                    <div class="col-md-4 col-sm-6">
                        {{-- Start pricingTable --}}
                        <div class="pricingTable">

                            <div class="pricingTable-header">
                                <h3 class="heading">Premium</h3>
                                <span class="subtitle">20 termina mesecno</span>
                                <div class="price-value">290
                                    <span class="currency"> €</span>
                                    <span class="month">/mo</span>
                                </div>
                            </div>

                            <ul class="pricing-content">
                                <li>?</li>
                                <li>?</li>
                                <li>?</li>
                                <li>?</li>
                            </ul>

                            <a href="#" class="read">Prijavi se
                                <i class="fa fa-angle-right"></i>
                            </a>

                        </div>
                        {{-- End pricingTable --}}

                    </div>
                    {{-- End col-md-4 col-sm-6 --}}

                </div>
                {{-- Start row --}}
            </div>
            {{-- End Container --}}
        </div>
        {{-- End demo --}}

        {{-- Start col-12 text-center --}}
        <div class="col-12 text-center">
            <h6>Kontaktirajte Me</h6>
            <img src="https://sreten-angular.vercel.app/assets/viber.png" alt="Viber" class="w-50-px mt-2 m-2">
            <img src="https://sreten-angular.vercel.app/assets/whatsapp.png" alt="Whatsapp" class="w-50-px mt-2 m-2">
        </div>
        {{-- Start col-12 text-center --}}

        @include('web.includes.footer')

    </div>

@endsection
