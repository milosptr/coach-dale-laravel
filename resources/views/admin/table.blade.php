<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Table') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="w-1/3 p-6 mb-1 border-r border-gray-200 overflow-scroll flex-1">
                    <div class="py-2 border-b border-gray-200">
                      <div class="font-bold text-3xl">Users</div>
                    </div>
                    @foreach($users as $user)
                      <a href="/admin/table/?user={{$user->id}}" class="block py-2 my-2 {{ isset($_GET['user']) && $_GET['user'] == $user->id ? 'bg-indigo-600 text-white' : 'bg-gray-100' }} rounded-lg px-5">
                        <div class="font-bold">{{ $user->name }}</div>
                        <div class="text-xs">{{ $user->email }}</div>
                      </a>
                    @endforeach
                </div>
                <div class="w-2/3 p-6 bg-white">
                  @if(isset($_GET['user']))
                    @foreach($users as $user)
                      @if($user->id == $_GET['user'])
                        @foreach($user->answers as $answers)
                        <div class="border-b border-gray-300">
                          <div class="border-b border-gray-300 py-1 mb-3 text-xl font-bold">
                            For date {{ date('d. M Y.',strtotime($answers['created_at'])) }}
                          </div>
                          @foreach($allQuestions as $question)
                            <div class="font-bold">
                              {{ $loop->iteration }}. {{ $question }}
                            </div>
                            <div class="mb-5">
                              {{ $answers["answer_$loop->iteration"] ?? '/' }}
                            </div>
                          @endforeach
                        </div>
                        @endforeach
                      @endif
                    @endforeach
                  @else
                    <div class="py-32 font-bold text-3xl text-center">Select user</div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
