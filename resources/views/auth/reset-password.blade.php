<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo color="white" width="140"></x-application-logo>
      </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>

    <h1 class="text-3xl text-center font-bold leading-tight mt-0 mb-2">
      Reset Your Password
    </h1>

    <div class="text-center font-semibold mb-10">
    </div>

    <form method="POST" action="{{ route('password.update') }}">
    @csrf

    <!-- Password Reset Token -->
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <!-- Email Address -->
      <div>
        <x-label for="email" :value="__('Email address:')"></x-label>
        <x-input
          id="email"
          class="block mt-1 w-full"
          type="email"
          name="email"
          :value="old('email', $request->email)"
          required
          autofocus
        ></x-input>
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-label for="password" :value="__('Password:')"></x-label>
        <x-input
          id="password"
          class="block mt-1 w-full"
          type="password"
          name="password"
          required
        ></x-input>
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password:')"></x-label>
        <x-input
          id="password_confirmation"
          class="block mt-1 w-full"
          type="password"
          name="password_confirmation"
          required
        ></x-input>
      </div>

      <div class="mt-8 mx-8">
        <x-button class="w-full justify-center bg-primary">
          {{ __('Reset Password') }}
        </x-button>
      </div>
    </form>
  </x-auth-card>
</x-guest-layout>
