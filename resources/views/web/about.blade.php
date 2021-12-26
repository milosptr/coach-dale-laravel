@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')


        <h1 class="text-center mt-5 mb-4 fs-1">{{ __('pages.about_h1') }}</h1>

        {{-- Start Container --}}
        <div class="container mt-md-5 mb-md-5 mt-2 mb-2">
            {{-- Start row --}}
            <div class="row font-13-px">
                {{-- Start col-md-6 --}}
                <div class="col-md-7 col-12 animate__animated animate__backInDown">

                    <p>
                        {{ __('pages.about_p1') }}
                    </p>

                    <br>

                    <p>
                        {{ __('pages.about_p2') }}
                    </p>

                    <br>

                    <p>
                        {{ __('pages.about_p3') }}
                    </p>

                    <br>

                    <p>

                        {{ __('pages.about_p4') }}
                    </p>

                    <br>

                    <p>
                        {{ __('pages.about_p5') }}

                    </p>

                </div>
                {{-- End col-md-6 --}}

                <div class="col-md-5 col-12">
                    <img src="/images/dragutin-mrdak.jpg" alt="Dragutin Mrdak" class="w-full mt-5 animate__animated animate__backInDown " style="min-width: 155%!important; margin-left: -70%; top: -60px ; z-index: -1; position: relative;">
                </div>
                {{-- End col-md-6 --}}

            </div>
            {{-- End row --}}

            {{-- Start row mt-5 --}}
            <div class="row mt-5 font-13-px">

                {{-- Start col-md-6 col-12 --}}
                <div class="col-md-6 col-12">
                    <img src="https://sreten-angular.vercel.app/assets/crossfit.jpg" alt="Crossfit" class="w-100 mt-5 mb-md-0 mb-2 animate__animated animate__backInDown box-shadow">
                </div>
                {{-- End col-md-6 col-12 --}}

                {{-- Start col-md-6 col-12 animate__animated animate__backInDown --}}
                <div class="mt-10 col-md-6 col-12 animate__animated animate__backInDown">

                    <h5 class="fs-4 mb-4">{{ __('pages.about_h5')}} </h5>

                    <p>
                        {{ __('pages.about_p6' )}}
                    </p>

                    <br>

                    <p>
                        {{ __('pages.about_p7' )}}

                    </p>

                    <br>

                    <p>
                      {!! __('pages.about_p8') !!}
                    </p>

                    <br>

                    <p>
                      {!! __('pages.about_p9') !!}

                    </p>
                </div>
                {{-- End col-md-6 col-12 animate__animated animate__backInDown --}}
            </div>
            {{-- End row mt-5 --}}

        </div>

        @include('web.includes.footer')

    </div>

@endsection
