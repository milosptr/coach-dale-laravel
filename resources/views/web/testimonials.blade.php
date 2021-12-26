@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')

        <div class="container mx-auto py-20 max-w-7xl">
          <div class="text-3xl font-medium mb-10 text-center">
            <h1>{{ __('pages.testimonials_title') }}</h1>
          </div>
          <div class="my-10">
            <div id="lightgallery" class="grid grid-cols-2 sm:grid-cols-4 gap-6">
              <a href="/images/PicsArt_07-23-03.25.08.jpg">
                <img src="/images/PicsArt_07-23-03.25.08.jpg" />
              </a>
              <a href="/images/PicsArt_07-30-02.25.19.jpg">
                <img src="/images/PicsArt_07-30-02.25.19.jpg" />
              </a>
              <a href="/images/PicsArt_09-25-02.18.11.jpg">
                <img src="/images/PicsArt_09-25-02.18.11.jpg" />
              </a>
              <a href="/images/PicsArt_09-25-02.18.34.jpg">
                <img src="/images/PicsArt_09-25-02.18.34.jpg" />
              </a>
              <a href="/images/PicsArt_09-25-11.42.50.jpg">
                <img src="/images/PicsArt_09-25-11.42.50.jpg" />
              </a>
              <a href="/images/PicsArt_09-27-09.00.42.jpg">
                <img src="/images/PicsArt_09-27-09.00.42.jpg" />
              </a>
              <a href="/images/PicsArt_10-01-01.00.31.jpg">
                <img src="/images/PicsArt_10-01-01.00.31.jpg" />
              </a>
            </div>
          </div>
          <div class="flex flex-wrap justify-center">
            <div class="w-full sm:w-1/2">
              <div class="h-full flex sm:mr-5 border border-solid border-red-500 rounded-md py-3 px-8" style="border-color: rgb(239, 68, 68)!important">
                <div class="">
                  <p class="font-thin font-sm">Dale-Moja doza pozitivne energije 🍀 Trener,psiholog,ucitelj,a pre svega covek. Savrsen mix znanja, posvecenosti, strpljenja, motivacije i discipline.</p>
                  <p class="font-thin font-sm">On, zato sto je sve u jednom.</p>
                  <p class="text-lg font-medium mt-3 pl-5">— Zorana - Personalni 1 na 1</p>
                </div>
              </div>
            </div>
            <div class="w-full sm:w-1/2 mt-10 sm:mt-0">
              <div class="h-full flex sm:ml-5 border border-solid border-red-500 rounded-md py-3 px-8" style="border-color: rgb(239, 68, 68)!important">
                <div class="">
                  <p class="font-thin font-sm">Iskreno odlucio sam se da pocnem sa treninzima kod tebe jer mi je bilo najblize da se ne lazemo,ali vec posle prvog meseca bio sa zadovoljan napretkom, tvojim pristupom I posvecenoscu. Iako si neodgovoran I kasnis na treninge vredi pricekati 5 do 10 minuta, odnos trenera i mene kao mladog sportiste😂 je takav da ti mene mozes da oteras u kurac kad god a isto tako i ja tebe. Slusas I modifikujes sve sto ti kazem da mi ne odgovara (ne gadja misic) itd. A najbitnije od svega teras me i ne das mi da odustanem kad mislim da ne mogu vise pokazes mi da mogu. I sta jos da ti kazem sve I ovo si svakako znao.</p>
                  <p class="font-thin font-sm">I da na kraju krajeva napredak je apsolutno evidentan 💪</p>
                  <p class="text-lg font-medium mt-3 pl-5">— Davor - Personalni 1 na 1</p>
                </div>
              </div>
            </div>
            <div class="w-full sm:w-1/2 mt-10">
              <div class="h-full flex sm:mr-5 border border-solid border-red-500 rounded-md py-3 px-8" style="border-color: rgb(239, 68, 68)!important">
                <div class="">
                  <p class="font-thin font-sm">Straight forward, personal (which lacks a lot in online coaching especially), a good motivator and very genuine and nice to talk to in general (important to get thrust in the process). Very good in adapting and adjusting depending on the situation. Makes training schedules in a way that I haven’t seen before (very positive). Understands his profession very well!</p>
                  <p class="text-lg font-medium mt-3 pl-5">— Richard - Online Client</p>
                </div>
              </div>
            </div>
            <div class="w-full sm:w-1/2 mt-10">
              <div class="h-full flex border sm:ml-5 border-solid border-red-500 rounded-md py-3 px-8" style="border-color: rgb(239, 68, 68)!important">
                <div class="">
                  <p class="font-thin font-sm">Dugo sam trenirala i kilogrami se nisu pomerali dok me Dale nije naučio da pravilno koristim “gorivo”. Da jedem više i treniram pametno.💪🏼 Dale je više od trenera, svakodnevna komunikacija i podrška u svakom trenutku. Budite iskreni prema sebi i rezultati su neminovni.💪🏼</p>
                  <p class="text-lg font-medium mt-3 pl-5">— Jelena - Nutrition Coaching</p>
                </div>
              </div>
            </div>
            <div class="w-full sm:w-1/2 mt-10">
              <div class="flex border border-solid border-red-500 rounded-md py-3 px-8" style="border-color: rgb(239, 68, 68)!important">
                <div class="">
                  <p class="font-thin font-sm">Kod Daleta najviše volim što osluškuje moje potrebe, mogućnosti i želje. Tu je da pomera moje granice izdržljivosti, da balansira dozu treninga i smijeha, i da me ohrabri da nastavim dalje. Sve što kreira znam da je kreirano za mene, u skladu sa mojim ciljem i uz ogromno znanje steknuto kroz razne sertifikacije. Ukoliko želite trenera za kojeg znate da vam je posvećen, onda ste na pravom mjestu!</p>
                  <p class="text-lg font-medium mt-3 pl-5">— Mirjana - Nutrition Coaching</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('web.includes.footer')

    </div>

@endsection
