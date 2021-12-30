@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')
        <section class="py-20">
          <div class="max-w-7xl mx-auto px-4 sm:px-0">
            <div id="presonal">
              @include('web.services.personal')
            </div>
            <div id="online-coaching" class="mt-20">
              @include('web.services.online-coaching')
            </div>
            <div id="nutrition-coaching" class="mt-20">
              @include('web.services.nutrition-coaching')
            </div>
          </div>
        </section>


        <div class="h-100 bg-cover bg-center bg-no-repeat" style="background-image: url('/images/image00003.jpeg');"></div>

        @include('web.includes.footer')

    </div>

@endsection
