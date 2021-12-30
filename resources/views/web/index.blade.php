@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')

        <!--  Start Slider  -->

        <div class="h-full relative">
          <div class="services-img align-content-center row p-0 m-0 relative">

              <div class="col-12 animate__animated animate__backInDown">

                  <a href="/services/#personal">
                      <button type="button" class="btn btn-danger mb-3 ml-40 w-160-px" tabindex="0">
                          {{ __('pages.personal101') }}
                      </button>
                  </a>

              </div>

              <div class="col-12 animate__animated animate__backInDown">

                  <a href="/services/#online-coaching">
                      <button type="button" class="btn btn-danger mb-3 ml-40 w-160-px">
                          Online coaching
                      </button>
                  </a>

              </div>
              <div class="col-12 animate__animated animate__backInDown">
                  <a href="/services/#nutrition-coaching">
                      <button type="button" class="btn btn-danger mb-3 ml-40 w-160-px">
                          Nutrition coaching
                      </button>
                  </a>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row g-0 justify-content-center align-items-center">

              <div class="col-md-6 col-12 text-center animate__animated animate__backInDown mt-4 sm:mt-0">
                  <p class="text-grey fs-4 text-uppercase poppins">{{ __('pages.welcome') }}</p>
                  <p class="text-grey-white fs-1 text-uppercase poppins">{{ __('pages.name') }}</p>
                  <p class="fs-6 poppins">{{ __('pages.job') }}</p>
              </div>

              <div class="col-md-5 col-12 pr-4 mb-5 mt-4 animate__animated animate__backInUp px-4 sm:px-0">
                  <p class="line-height font-weight-bold">
                      {{ __('pages.p1') }}
                  </p>

                  <br>

                  <p class="line-height font-weight-light">
                      {{ __('pages.p2') }}
                  </p>
              </div>

          </div>
        </div>
        <!-- End Slider -->

        <!-- Start Container-Whtite -->
        <div class="container-white">

            <div class="container">

                <div class="col-12 text-center">
                    <h6 class="pt-4 color-red">{{ __('pages.video_title') }}</h6>
                </div>

                <div class="text-center mb-5 py-8">

                    <iframe class="mx-auto" width="70%" height="450"
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
