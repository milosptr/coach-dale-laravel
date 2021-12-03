@php
  $date = Carbon\Carbon::now(); // or $date = new Carbon();
  $firstDay = $date->startOfWeek()->format('d.m.Y.'); // 2016-10-17 00:00:00.000000
  $lastDay = $date->endOfWeek()->format('d.m.Y.'); // 2016-10-23 23:59:59.000000
  $range = '('.$firstDay.' - '.$lastDay.')';
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Weekly Questions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="w-2/3 mx-auto mb-4">
                      <div class="my-10 text-3xl font-bold">
                        {{ __('Weekly Questions') }}
                        <div class="text-lg text-gray-500 font-normal">{{ $range }}</div>
                      </div>
                      <form action="/api/weekly-answers" method="POST">
                        @csrf
                        <input name="user_id" type="text" value="{{ auth()->user()->id }}" hidden readonly>
                        @foreach($allQuestions as $question)
                          <div class="mb-5">
                            <label for="answer-{{ $loop->index + 1 }}" class="block font-bold text-gray-700">
                              {{ $loop->index + 1 }}. {{ $question }}
                            </label>
                            <div class="mt-1">
                              <input type="text" value="{{ $answers['answer_'.$loop->iteration] ?? '' }}" name="answer_{{ $loop->index + 1 }}" id="answer-{{ $loop->index + 1 }}" class="label-if-not-empty shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full border-gray-300 rounded-md placeholder-gray-300" placeholder="{{ __('Your answer ...') }}">
                            </div>
                          </div>
                        @endforeach
                        <div class="mt-10">
                          <button type="submit" class="block px-10 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Submit answers')}}
                          </button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
