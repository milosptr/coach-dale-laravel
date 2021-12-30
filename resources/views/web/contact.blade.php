@extends('web.master')

@section('content')

    <div>

        @include('web.includes.header')
        {{-- Start contakt-background --}}
        <div class="contakt-background">

            <div class="col-12 text-center p-3 mt-2">
                <h1 class="mt-4 text-3xl">{{ __('pages.contact_title') }}</h1>
            </div>

            {{-- Start Container --}}
            <div class="container">
                <div class="row p-0 m-0">
                    @foreach(range(0,9) as $a)
                      <div class="w-full sm:w-1/3">
                        <div id="accordion" class="mt-4">
                          <div class="question">
                            <div id="heading-{{ $loop->iteration }}">
                              <h5 class="mb-0">
                                <button data-toggle="collapse" data-target="#collapse-{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse-{{ $loop->iteration }}" class="btn col-12 p-0 color-withe">
                                  @php $question = "pages.faq_".$loop->iteration."_title"; @endphp
                                  {{ __($question) }}
                                </button>
                              </h5>
                            </div>
                            <div id="collapse-{{ $loop->iteration }}" aria-labelledby="heading-{{ $loop->iteration }}" data-parent="#accordion" class="collapse">
                              <div class="card-body">
                                @php $answer = "pages.faq_".$loop->iteration."_answer"; @endphp
                                {{ __($answer) }}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
            {{-- End Contatiner --}}

            {{-- Start Contact Section --}}
            <section id="contact" class="contact py-5">
                {{-- Start Container --}}
                <div class="container">
                    {{-- Start contakt-box --}}
                    <div class="row contakt-box p-3">

                        {{-- start col-md-6 --}}
                        <div class="col-md-6">

                            <div class="col-md-12 mb-2">
                                <h3 class="text-xl font-bold mb-2">{{ __('pages.say_hello') }}​</h3>
                                <p class="mb-10">
                                    {{ __('pages.say_hello_info') }}
                                </p>
                            </div>

                            <div class="address">
                                <h5>{{ __('pages.address_title') }}:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Beograd, Srbija
                                    </li>
                                </ul>
                            </div>

                            <div class="email">
                                <h5>{{ __('pages.email_title') }}:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        mrdak.dragutin@gmail.com
                                    </li>
                                </ul>
                            </div>

                            <div class="phone">
                                <h5>{{ __('pages.phone_title') }}:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        066 226 586
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- start col-md-6 --}}
                        <div class="col-md-6">

                            <div>

                                {{-- Start card-body --}}
                                <div class="card-body">
                                    {{-- Start form --}}
                                    <form novalidate="" class="ng-untouched ng-pristine ng-valid">

                                        <div class="form-row row">

                                            <div class="form-group col-md-6">
                                                <input id="Full Name" name="Full Name"
                                                    placeholder="{{ __('pages.your_name') }}" type="text"
                                                    class="form-control mb-md-0 mb-3">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input type="email" id="inputEmail4"
                                                    placeholder="{{ __('pages.your_email') }}" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-row mt-4">

                                            <div class="form-group col-md-12">
                                                <textarea id="comment" name="comment"
                                                    cols="40" rows="5" placeholder="{{ __('pages.your_message') }}"
                                                    class="form-control"></textarea>
                                            </div>

                                        </div>

                                        <div class="form-row mt-4 text-center">
                                            <button type="button" class="btn btn-danger">
                                                {{ __('pages.send') }} <i class="fas fa-paper-plane"></i>
                                            </button>
                                        </div>

                                    </form>
                                    {{-- End form --}}

                                </div>
                                {{-- End card-body --}}

                            </div>
                        </div>

                    </div>
                    {{-- End contakt-box --}}

                {{-- End Container --}}
                </div>

            </section>
            {{-- End Contact Section --}}

        </div>
        {{-- End contakt-background --}}

        <div class="mt-2">
            @include('web.includes.footer')
        </div>


    </div>

@endsection
