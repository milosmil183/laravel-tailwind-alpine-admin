<nav class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="px-4 py-2 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex items-center">
        <button x-show="sidebar" @click="sidebar = !sidebar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <rect id="Rectangle" width="24" height="24" fill="none" />
            <path id="Shape" d="M8,12H0V10H8v2Zm8-5H0V5H16V7Zm0-5H8V0h8V2Z" transform="translate(4 6)" fill="#202224"
                  stroke="#fff" stroke-miterlimit="10" stroke-width="0.5" />
          </svg>
        </button>
      </div>

      <!-- Settings Dropdown -->
      <div class="flex items-center ml-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button
              class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"
            >
              <div class="relative w-12 h-12 rounded-full overflow-hidden bg-gray-100 flex items-center justify-center">
                <img
                  src="{{ asset('/img/tmp/avatar-sample.png') }}"
                  alt="{{ auth()->user()->name }}"
                  class="block"
                />
              </div>

              <div class="ml-3">
                <div class="font-bold">
                  {{ auth()->user()->name }}
                </div>
                <div class="text-xs font-semibold">
                  {{ 'Admin' }}
                </div>
              </div>

              <div class="ml-5 rounded-full border">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <div class="divide-y divide-solid">
              <x-dropdown-link :href="route('profile')">
                {{ __('Manage Account') }}
              </x-dropdown-link>
              <x-dropdown-link :href="route('profile')">
                {{ __('Change Password') }}
              </x-dropdown-link>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
            </div>
          </x-slot>
        </x-dropdown>
      </div>
    </div>
  </div>
</nav>
