<x-app-layout>
  <h2 class="font-bold text-3xl text-gray-800 leading-tight">
    {{ __('Settings') }}
  </h2>
  <div class="mt-5">
    <div class="bg-white rounded-md overflow-hidden border border-gray-300/50 p-12">
      <div class="max-w-4xl mx-auto mt-5">
        <div class="grid grid-cols-2 gap-6">
          <div>
            <x-label for="first-name" :value="__('First Name:')"></x-label>
            <x-input
              id="first-name"
              class="block mt-2 w-full"
              type="text"
              name="first_name"
              :value="old('first_name')"
              required
              autofocus
            ></x-input>
          </div>
          <div>
            <x-label for="last-name" :value="__('Last Name:')"></x-label>
            <x-input
              id="last-name"
              class="block mt-2 w-full"
              type="text"
              name="last_name"
              :value="old('last_name')"
              required
            ></x-input>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-6 mt-5">
          <div>
            <x-label for="email" :value="__('Your email:')"></x-label>
            <x-input
              id="email"
              class="block mt-2 w-full"
              type="email"
              name="email"
              :value="old('email')"
              required
            ></x-input>
          </div>
          <div>
            <x-label for="phone-number" :value="__('Phone Number:')"></x-label>
            <x-input
              id="last-name"
              class="block mt-2 w-full"
              type="text"
              name="phone_number"
              :value="old('phone_number')"
              required
            ></x-input>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-6 mt-5">
          <div>
            <x-label for="birthdate" :value="__('Date of Birth:')"></x-label>
            <x-input
              id="birthdate"
              class="block mt-2 w-full"
              type="text"
              name="birthdate"
              :value="old('birthdate')"
              required
            ></x-input>
          </div>
          <div>
            <x-label for="gender" :value="__('Gender:')"></x-label>
            <select
              id="gender"
              name="gender"
              class="block mt-2 w-full rounded-md shadow-sm border-gray-300"
            >
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mt-10 mb-5">
          <div class="text-center">
            <x-button class="w-64 inline-flex items-center justify-center bg-primary">
              {{ __('Update') }}
            </x-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
