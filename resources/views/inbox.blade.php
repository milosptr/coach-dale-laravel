<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inbox') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex items-center justify-center">
                <div class="w-2/3 p-6 bg-white border-b border-gray-200">
                    <div class="border-b border-solid border-gray-200 text-center py-2">
                      <img src="/images/user.png" class="opacity-30 mx-auto mb-2" width="50" height="50" alt="coach" />
                      <div class="font-bold">Coach</div>
                    </div>
                    <div id="inbox" class="mt-6 overflow-scroll" style="height: 400px;">
                      @foreach($messages as $message)
                        @if($message->from == auth()->user()->email)
                          <div class="mb-4 w-1/2 ml-auto p-3 bg-indigo-500 text-white rounded-lg">
                            <div>{{ $message->message }}</div>
                            <div class="text-gray-100 text-xs text-right mt-1">Sent {{ date('d.m.y. - H:i', strtotime($message->created_at)) }}</div>
                          </div>
                        @else
                          <div class="mb-4 w-1/2 p-3 bg-gray-100 rounded-lg">
                            <div>{{ $message->message }}</div>
                            <div class="text-gray-600 text-xs text-right mt-1">Sent {{ date("d.m.y. - H:i", strtotime($message->created_at)) }}</div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                    <div class="mt-6 pt-3 border-t border-solid border-gray-200">
                    <form action="/api/messages" method="POST" class="w-full">
                      @csrf
                      <textarea placeholder="{{ __('Your message...') }}" row="4" class="w-full outline-none resize-none rounded-lg border-gray-300" name="message"></textarea>
                      <input type="email" name="email" value="{{ auth()->user()->email }}" hidden>
                      <button class="block rounded-lg py-1 w-24 text-center text-white bg-indigo-600 ml-auto" type="submit">{{ __('Send') }}</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      let inbox = document.getElementById("inbox")
      inbox.scrollTop = inbox.scrollHeight
    </script>
</x-app-layout>
