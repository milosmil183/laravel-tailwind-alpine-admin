<x-app-layout>
  <h2 class="font-bold text-3xl text-gray-800 leading-tight">
    {{ __('Upgrades') }}
  </h2>
  <div class="mt-5">
    <div class="grid grid-cols-3 gap-6 text-center">
      @foreach ($upgrades as $item)
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg bg-radial-white bg-center px-5 py-10">
          <header class="text-xl font-bold">
            {{ $item->title }}
          </header>
          <div class="opacity-80">
            {{ $item->type }}
          </div>
          <div class="text-4xl text-primary font-bold mt-5">
            {{ $item->price }}
          </div>
          <div class="h-px bg-black/[.1] my-10"></div>
          <ul class="text-lg list-none font-semibold">
            @foreach ($item->features as $feature)
              @if ($feature->enabled)
                <li class="my-3">
                  {{ $feature->title }}
                </li>
              @else
                <li class="my-3 opacity-20">
                  {{ $feature->title }}
                </li>
              @endif
            @endforeach
          </ul>
          <div class="h-px bg-black/[.1] my-10"></div>
          <div class="text-center">
            <a href="{{route('upgrades.index')}}">
              <div class="inline-block rounded-full border border-primary px-5 py-3 font-bold text-primary">
                Get Started
              </div>
            </a>
          </div>
          <div class="text-center mt-5">
            <a href="{{route('upgrades.index')}}" class="underline font-bold">
              Start Your 30 Day Free Trial
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</x-app-layout>
