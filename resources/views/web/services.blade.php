@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')

        <!-- Start services-img -->
        <div class="services-img align-content-center row services-img p-0 m-0">

            <div class="col-12 animate__animated animate__backInDown">

                <a href="/personal">
                    <button type="button" class="btn btn-danger mb-3 ml-40 w-160-px" tabindex="0">
                        Personalni 1 na 1
                    </button>
                </a>

            </div>

            <div class="col-12 animate__animated animate__backInDown">

                <a href="/#online-coaching">
                    <button type="button" class="btn btn-danger mb-3 ml-40 w-160-px">
                        Online coaching
                    </button>
                </a>

            </div>
            <div class="col-12 animate__animated animate__backInDown">
                <a href="/#nutrition-coaching">
                    <button type="button" class="btn btn-danger mb-3 ml-40 w-160-px">
                        Nutrition coaching
                    </button>
                </a>
            </div>
        </div>

        @include('web.includes.footer')

    </div>

@endsection
