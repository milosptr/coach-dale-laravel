@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')

        <div class="container mx-auto py-20 max-w-7xl">
          <div class="flex items-center justify-between">
            <div class="w-1/4">
              <a href="/personal" class="flex items-center justify-center text-center py-2 rounded-md w-full bg-red-500 text-white text-base uppercase">personal</a>
            </div>
            <div class="w-1/4">
              <a href="/personal" class="flex items-center justify-center text-center py-2 rounded-md w-full bg-red-500 text-white text-base uppercase">personal</a>
            </div>
            <div class="w-1/4">
              <a href="/personal" class="flex items-center justify-center text-center py-2 rounded-md w-full bg-red-500 text-white text-base uppercase">personal</a>
            </div>
          </div>
        </div>
        <div class="h-100 bg-cover bg-center bg-no-repeat" style="background-image: url('/images/image00003.jpeg');"></div>

        @include('web.includes.footer')

    </div>

@endsection
