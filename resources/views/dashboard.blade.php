<x-app-layout>
  <h2 class="font-bold text-3xl text-gray-800 leading-tight">
    {{ __('Dashboard') }}
  </h2>
  <div>
    <div class="swiper mt-5">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="bg-[url('/img/tmp/banner-sample.png')] bg-cover bg-center px-20 py-12 rounded-md">
            <div class="text-white font-semibold">
              January 01-22
            </div>
            <div class="text-white text-3xl font-bold mt-10">
              Get more from your
              <br>
              IPTV this summer
            </div>
            <div class="text-white opacity-80">
              Upgrade to the MEGA plan today!
            </div>
            <x-button class="text-sm bg-[#FF8743] mt-5 focus:outline-none">
              {{ __('Get Started') }}
            </x-button>
          </div>
        </div>
      </div>
      <div class="absolute left-2 top-1/2 z-10">
        <div class="custom-swiper-button-prev">
          <div class="rounded-full w-10 h-10 bg-gray-100/75 flex items-center justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </div>
        </div>
      </div>
      <div class="absolute right-2 top-1/2 z-10">
        <div class="custom-swiper-button-next">
          <div class="rounded-full w-10 h-10 bg-gray-100/75 flex items-center justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <div class="grid grid-cols-3 gap-6">
        <div
          class="bg-[url('/img/tmp/bottom-banner1.png')] bg-black bg-cover bg-center rounded-md h-64 overflow-hidden">
          <div class="bg-black/50 w-full h-full p-5 relative">
            <div class="flex items-center justify-between">
              <div class="text-white font-bold text-sm">
                Start From $12
              </div>
              <div class="rounded-full w-10 h-10 bg-gray-100/75 flex items-center justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </div>
            </div>
            <div class="absolute top-0 right-0 bottom-0 left-0">
              <div class="w-full h-full flex items-center justify-center">
                <div class="text-white text-2xl font-bold">
                  News
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="bg-[url('/img/tmp/bottom-banner2.png')] bg-black bg-cover bg-center rounded-md h-64 overflow-hidden">
          <div class="bg-black/50 w-full h-full p-5 relative">
            <div class="flex items-center justify-between">
              <div class="text-white font-bold text-sm">
                Start From $12
              </div>
              <div class="rounded-full w-10 h-10 bg-gray-100/75 flex items-center justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </div>
            </div>
            <div class="absolute top-0 right-0 bottom-0 left-0">
              <div class="w-full h-full flex items-center justify-center">
                <div class="text-white text-2xl font-bold">
                  Sports Bundle
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="bg-[url('/img/tmp/bottom-banner1.png')] bg-black bg-cover bg-center rounded-md h-64 overflow-hidden">
          <div class="bg-black/50 w-full h-full">
            <div class="w-full h-full flex flex-col justify-end">
              <div class="bg-white p-5 text-center">
                <div class="font-bold">
                  TV is Better With Friends
                </div>
                <div class="opacity-60 text-sm">
                  Email your friends and get 1 week free!
                </div>
                <x-button class="text-sm bg-none text-current mt-5 focus:outline-none border-neutral-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                          clip-rule="evenodd" />
                  </svg>
                  <span class="ml-2">
                    {{ __('Message') }}
                  </span>
                </x-button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
