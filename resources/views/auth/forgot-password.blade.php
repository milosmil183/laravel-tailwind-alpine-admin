<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo color="white" width="140"></x-application-logo>
      </a>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"></x-auth-session-status>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>

    <h1 class="text-3xl text-center font-bold leading-tight mt-0 mb-2">
      Forgot Password
    </h1>

    <div class="text-center font-semibold mb-10">
    </div>

    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      <div>
        <x-label for="email" :value="__('Email address:')" />

        <x-input
          id="email"
          class="block mt-1 w-full"
          type="email"
          name="email"
          :value="old('email')"
          required
          autofocus
        />
      </div>

      <div class="mt-8 mx-8">
        <x-button class="w-full justify-center bg-primary">
          {{ __('Submit') }}
        </x-button>
      </div>
    </form>
  </x-auth-card>
</x-guest-layout>
