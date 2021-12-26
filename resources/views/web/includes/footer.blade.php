{{-- Start Footer --}}
<footer>

    {{-- Start row g-0 justify-content-evenly p-md-0 p-4 --}}
    <div class="row g-0 justify-content-evenly p-md-0 p-4">

        {{-- Start col-md-3 col-12 mt-md-5 mt-2 --}}
        <div class="col-md-3 col-12 mt-md-5 mt-2">
            <img src="/images/logo.jpeg" alt="Dragutin Mrdak"
                class="w-60-logo ml-2 border-radius">

            <p class="mt-2 font-11-px">
                {{ __('pages.footer_description') }}
            </p>

        </div>

        {{-- Start col-md-3 col-12 mt-md-5 mt-2 --}}
        <div class="col-md-3 col-12 mt-md-5 mt-2">

            <h5 class="mb-4">{{__('pages.contact_title') }}</h5>

            <span>
                <i class="fas fa-envelope"></i> {{ __('pages.email') }}
            </span>

            <br>
            <span>
                <i class="fas fa-phone"></i> {{ __('pages.phone') }}
            </span>

            <br>
            <span>
                <i class="fas fa-map-marker-alt"></i> {{ __('pages.location' )}}
            </span>

        </div>

        {{-- Start col-md-3 col-12 mt-md-5 mt-2 footer --}}
        <div class="col-md-3 col-12 mt-md-5 mt-2 footer">

            <h5 class="mb-4">{{ __('pages.social_title') }}</h5>

            <span class="icon-border">
                <i class="fab fa-facebook-square"></i>
            </span>

            <a href="https://www.instagram.com/dale_5_fitness/?hl=sr" target="_blank">
                <span class="icon-border">
                    <i class="fab fa-instagram"></i>
                </span>
            </a>

            <a href="https://msng.link/o/?0638709090=vi">
                <span class="icon-border">
                    <i class="fab fa-viber"></i>
                </span>
            </a>

            <a href="https://msng.link/o/?0638709090=wa">
                <span class="icon-border">
                    <i class="fab fa-whatsapp"></i>
                </span>
            </a>

        </div>

    </div>
    {{-- End row g-0 justify-content-evenly p-md-0 p-4 --}}

    {{-- Start footer-white col-12 text-center p-1 mt-5 --}}
    <div class="footer-white col-12 text-center p-1 mt-5">
        <p class="mb-0">
            <i class="far fa-registered mr-2"></i>
            <b>{{ __('pages.copyright') }}</b>
        </p>
    </div>
    {{-- Start footer-white col-12 text-center p-1 mt-5 --}}


</footer>
{{-- End Footer --}}
