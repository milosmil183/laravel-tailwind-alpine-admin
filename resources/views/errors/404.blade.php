<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo color="white" width="140" />
      </a>
    </x-slot>

    <div class="text-center mx-10">
      <img src="{{ url('/img/logo-404.png') }}" alt="Page Not Found" />
    </div>

    <h1 class="text-3xl text-center font-bold leading-tight mt-16 mb-2">
      Looks like you’ve got lost…
    </h1>

    <div class="px-5 mt-5">
      <a href="{{route('dashboard')}}">
        <x-button class="w-full justify-center bg-primary">
          {{ __('Back to Dashboard') }}
        </x-button>
      </a>
    </div>
  </x-auth-card>
</x-guest-layout>
