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
                      <a href="/admin/progress/?user={{$user->id}}" class="block py-2 my-2 {{ isset($_GET['user']) && $_GET['user'] == $user->id ? 'bg-indigo-600 text-white' : 'bg-gray-100' }} rounded-lg px-5">
                        <div class="font-bold">{{ $user->name }}</div>
                        <div class="text-xs">{{ $user->email }}</div>
                      </a>
                    @endforeach
                </div>
                <div class="w-2/3 p-6 bg-white">
                  @if(isset($_GET['user']))
                    @foreach($users as $user)
                      @if($user->id == $_GET['user'])
                      <div class="grid grid-cols-4 gap-8">
                          @foreach($user->images as $image)
                            <div class="w-48 h-48">
                              <div class="h-full bg-center bg-cover bg-no-repeat" style="background-image: url('/{{ $image->file_path }}')"></div>
                            </div>
                          @endforeach
                        </div>
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
