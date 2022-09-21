<x-app-layout>
  <h2 class="font-bold text-3xl text-gray-800 leading-tight">
    {{ __('My Account') }}
  </h2>
  <div class="mt-5">
    <div class="bg-white rounded-md overflow-hidden border border-gray-300/50 p-12">
      <div class="text-center">
        <label class="w-20 h-20 bg-gray-200 rounded-full inline-flex items-center justify-center cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20.8" viewBox="0 0 26 20.8">
            <path
              id="Mask"
              d="M24.781,20.8H1.219A1.211,1.211,0,0,1,0,19.6V4.891a1.211,1.211,0,0,1,1.219-1.2H6.424L8.375.479A1.217,1.217,0,0,1,9.344,0h7.312a1.223,1.223,0,0,1,.872.364L19.6,3.692h5.183A1.211,1.211,0,0,1,26,4.891V19.6A1.211,1.211,0,0,1,24.781,20.8ZM13,6.153a6.339,6.339,0,1,0,6.439,6.339A6.4,6.4,0,0,0,13,6.153ZM13,16.16a3.669,3.669,0,1,1,3.726-3.668A3.7,3.7,0,0,1,13,16.16Z"
              fill="#414141"
            />
          </svg>
          <x-input id="profile-image" type="file" class="hidden" accept="image/*"></x-input>
        </label>
        <label for="profile-image" class="block text-primary cursor-pointer mt-4">
          Upload Photo
        </label>
      </div>
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
        <div class="grid grid-cols-2 gap-6 mt-10 mb-5">
          <div class="text-right">
            <x-button class="w-64 inline-flex items-center justify-center bg-primary">
              {{ __('Update') }}
            </x-button>
          </div>
          <div class="text-left">
            <x-button class="w-64 inline-flex items-center justify-center bg-gray-500">
              {{ __('Change Password') }}
            </x-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
