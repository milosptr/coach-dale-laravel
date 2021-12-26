
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-black">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center border-b-2 border-red-600 py-3 md:justify-start md:space-x-10">
      <div class="flex justify-start w-10O">
        <a href="#">
          <span class="sr-only">Dragutin Mrdak</span>
          <img class="h-8 w-auto sm:h-10" src="/images/logo-black.jpg" alt="Dragutin Mrdak">
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button type="button" class="bg-black rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <nav class="hidden md:flex space-x-10">
        <a href="{{ __('pages.current_language_url') }}" class="text-base font-medium text-white hover:text-gramy-900">
          {{ __('header.home') }}
        </a>
        <a href="{{ __('pages.current_language_url') }}about" class="text-base font-medium text-white hover:text-gray-900">
           {{ __('header.about') }}
        </a>
        <a href="{{ __('pages.current_language_url') }}services" class="text-base font-medium text-white hover:text-gramy-900">
          {{ __('header.services') }}
        </a>
        <a href="{{ __('pages.current_language_url') }}testimonials" class="text-base font-medium text-white hover:text-gray-900">
           {{ __('pages.testimonials_title') }}
        </a>
        <a href="{{ __('pages.current_language_url') }}contact" class="text-base font-medium text-white hover:text-gray-900">
           {{ __('header.contact') }}
        </a>
      </nav>
      <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
        <a href="/login" class="whitespace-nowrap text-base font-medium text-white hover:text-gray-900">
          {{ __('header.log_in') }}
        </a>
        <a href="/register" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">
          {{ __('header.sign_up') }}
        </a>
        <a href="{{ __('pages.language_url') }}" class="ml-8">
         <img src="/images/{{ __('pages.language') }}.png" alt="{{ __('pages.language') }}" width="48" />
        </a>
      </div>
    </div>
  </div>

  <div class="hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-50">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <div>
              <img class="h-8 w-auto" src="/images/logo.jpeg" alt="Dragutin">
            </div>
            <a href="{{ __('pages.language_url') }}" class="ml-8">
             <img src="/images/{{ __('pages.language') }}.png" alt="{{ __('pages.language') }}" width="48" />
            </a>
          </div>
          <div class="-mr-2">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="py-6 px-5 space-y-6">
        <div class="grid grid-cols-1 gap-y-4 gap-x-8">
          <a href="{{ __('pages.current_language_url') }}" class="text-base font-medium text-gray-700 hover:text-gramy-900">
            {{ __('header.home') }}
          </a>
          <a href="{{ __('pages.current_language_url') }}about" class="text-base font-medium text-gray-700 hover:text-gray-900">
            {{ __('header.about') }}
          </a>
          <a href="{{ __('pages.current_language_url') }}services" class="text-base font-medium text-gray-700 hover:text-gramy-900">
            {{ __('header.services') }}
          </a>
          <a href="{{ __('pages.current_language_url') }}testimonials" class="text-base font-medium text-gray-700 hover:text-gray-900">
            {{ __('pages.testimonials_title') }}
          </a>
          <a href="{{ __('pages.current_language_url') }}contact" class="text-base font-medium text-gray-700 hover:text-gray-900">
            {{ __('header.contact') }}
          </a>
        </div>
        <div class="flex items-center">
          <a href="/login" class="whitespace-nowrap text-base font-medium text-red-600 border border-red-600 px-4 py-2 rounded-md">
            {{ __('header.log_in') }}
          </a>
          <a href="/register" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">
            {{ __('header.sign_up') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
