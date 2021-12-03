<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inbox') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="w-1/3 p-6 mb-1 border-r border-gray-200 overflow-scroll flex-1">
                    <div class="py-2 border-b border-gray-200">
                      <div class="font-bold text-3xl">Chats</div>
                    </div>
                    @foreach($users as $user)
                      <a href="/admin/inbox/?user={{$user->email}}" class="block py-2 my-2 {{ isset($_GET['user']) && $_GET['user'] == $user->email ? 'bg-indigo-600 text-white' : 'bg-gray-100' }} rounded-lg px-5">
                        <div class="font-bold">{{ $user->name }}</div>
                        <div class="text-xs">{{ $user->email }}</div>
                      </a>
                    @endforeach
                </div>
                <div class="w-2/3 p-6 bg-white">
                  @if(isset($_GET['user']))
                    <div class="border-b border-solid border-gray-200 text-center py-2">
                      <img src="/images/user.png" class="opacity-30 mx-auto mb-2" width="50" height="50" alt="coach" />
                      <div class="font-bold">Coach</div>
                    </div>
                    <div id="inbox" class="mt-6 overflow-scroll" style="height: 400px;">
                      @foreach($users as $user)
                        @if($_GET['user'] == $user->email)
                         @foreach($user->messages as $message)
                           @if($message->from != $user->email)
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
                        @endif
                      @endforeach
                    </div>
                    <div class="mt-6 pt-3 border-t border-solid border-gray-200">
                      <form action="/api/messages" method="POST" class="w-full">
                        @csrf
                        <textarea placeholder="{{ __('Your message...') }}" row="4" class="w-full outline-none resize-none rounded-lg border-gray-300" name="message"></textarea>
                        <input type="email" name="email" value="{{ auth()->user()->email }}" hidden>
                        @if(isset($_GET['user']))
                          <input type="email" name="to" value="{{$_GET['user']}}" hidden readonly>
                        @endif
                        <button class="block rounded-lg py-1 w-24 text-center text-white bg-indigo-600 ml-auto" type="submit">{{ __('Send') }}</button>
                      </form>
                    </div>
                  @else
                    <div class="py-32 font-bold text-3xl text-center">Select chat</div>
                  @endif
                </div>
            </div>
        </div>
    </div>
    <script>
      let inbox = document.getElementById("inbox")
      inbox.scrollTop = inbox.scrollHeight
    </script>
</x-app-layout>
