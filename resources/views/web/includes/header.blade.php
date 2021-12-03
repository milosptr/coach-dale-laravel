{{-- Start Header --}}
<header>

    {{-- Start nav --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light pt-3 pb-3">

        <div class="container-fluid">

            <img src="https://sreten-angular.vercel.app/assets/logo.jpg" alt="Dragutin Mrdak" class="w-60-logo">

            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler">

                <span class="navbar-toggler-icon"></span>

            </button>

            {{-- Start navbarNavAltMarkup --}}
            <div id="navbarNavAltMarkup" class="collapse navbar-collapse text-uppercase font-14-px">

                {{-- Start navbar-nav --}}
                <div class="navbar-nav">

                    <a aria-current="page" class="nav-link" href="/home">Pocetna</a>

                    <a class="nav-link" href="/about">O meni</a>

                    <a class="nav-link" href="/services">Usluge</a>

                    <a class="nav-link" href="/contact">Kontakt</a>

                    <a class="nav-link position-absolute-right border-red text-uppercase" href="/login">
                        Uloguj se <i class="fas fa-sign-in-alt"></i>
                    </a>

                    <a class="nav-link position-absolute-right-5 border-red text-uppercase" href="/registration">
                        <i class="fas fa-user"></i> Registracija
                    </a>

                </div>
                {{-- End navbar-nav --}}

            </div>
            {{-- End navbarNavAltMarkup --}}
        </div>
    </nav>
    {{-- End nav --}}

</header>
{{-- End Header --}}
