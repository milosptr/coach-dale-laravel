<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Progress') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="progres-images" class="grid grid-cols-4 gap-8">
                      <label for="upload-progress-image" class="w-48 h-48 upload-progress-image">
                        Click to Upload
                      </label>
                      @foreach($images as $image)
                        <div class="w-48 h-48">
                          <div class="h-full bg-center bg-cover bg-no-repeat" style="background-image: url('/{{ $image->file_path }}')"></div>
                        </div>
                      @endforeach
                    </div>
                    <input type="file" id="upload-progress-image" name="file" hidden />
                    <input type="text" value="{{ auth()->user()->id }}" name="user_id" hidden />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
