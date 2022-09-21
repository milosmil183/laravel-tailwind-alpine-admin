<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo color="white" width="140" />
      </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <h1 class="text-3xl text-center font-bold leading-tight mt-0 mb-2">
      Create an Account
    </h1>

    <div class="text-center font-semibold mb-10">
      Create an account to continue
    </div>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div>
        <x-label for="email" :value="__('Email address:')" />

        <x-input id="email" class="block mt-2 w-full" type="email" name="email" :value="old('email')" required />
      </div>

      <div class="mt-4">
        <x-label for="name" :value="__('Username:')" />

        <x-input id="name" class="block mt-2 w-full" type="text" name="name" :value="old('name')" required autofocus />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-label for="password" :value="__('Password:')" />

        <x-input id="password" class="block mt-2 w-full"
                 type="password"
                 name="password"
                 required autocomplete="new-password" />
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm password:')" />

        <x-input id="password_confirmation" class="block mt-2 w-full"
                 type="password"
                 name="password_confirmation" required />
      </div>

      <div class="block mt-4">
        <label for="accept_terms" class="inline-flex items-center">
          <input id="accept_terms" type="checkbox"
                 class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                 name="remember">
          <span class="ml-2 text-sm text-gray-600">{{ __('I accept terms and conditions') }}</span>
        </label>
      </div>

      <div class="mt-8 mx-8">
        <x-button class="w-full justify-center bg-primary">
          {{ __('Sign Up') }}
        </x-button>
      </div>

      <div class="mt-5 text-center">
        <span>Already have an account?</span>
        <a class="text-primary hover:text-gray-900 font-semibold" href="{{ route('login') }}">
          {{ __('Login') }}
        </a>
      </div>
    </form>
  </x-auth-card>
</x-guest-layout>
