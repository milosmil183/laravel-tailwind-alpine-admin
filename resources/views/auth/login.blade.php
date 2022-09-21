<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo color="white" width="140" />
      </a>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <h1 class="text-3xl text-center font-bold leading-tight mt-0 mb-2">
      Login to Account
    </h1>

    <div class="text-center font-semibold mb-10">
      Please enter your email and password to continue
    </div>

    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
      <div>
        <x-label for="email" :value="__('Email address:')" />

        <x-input
          id="email"
          class="block mt-2 w-full"
          type="email"
          name="email"
          :value="old('email')"
          required
          autofocus
        />
      </div>

      <!-- Password -->
      <div class="mt-8">

        <div class="flex items-center justify-between">
          <div>
            <x-label for="password" :value="__('Password:')" />
          </div>
          <div>
            @if (Route::has('password.request'))
              <a class="text-sm text-gray-600 hover:text-gray-900"
                 href="{{ route('password.request') }}">
                {{ __('Forgot Password?') }}
              </a>
            @endif
          </div>
        </div>

        <x-input
          id="password"
          class="block mt-2 w-full"
          type="password"
          name="password"
          required autocomplete="current-password"
        />
      </div>

      <!-- Remember Me -->
      <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
          <input id="remember_me" type="checkbox"
                 class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                 name="remember">
          <span class="ml-2 text-sm text-gray-600">{{ __('Remember Password') }}</span>
        </label>
      </div>

      <div class="mt-8 mx-8">
        <x-button class="w-full justify-center bg-primary">
          {{ __('Sign In') }}
        </x-button>
      </div>
    </form>
  </x-auth-card>
</x-guest-layout>
