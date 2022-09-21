<aside class="bg-white border-b border-gray-100 min-h-screen pt-5">
  <div x-show="sidebar" class="px-10 py-2">
    <x-application-logo class="mt-5" color="primary" width="120"></x-application-logo>
  </div>
  <div x-show="!sidebar" class="flex items-center justify-center px-2 py-4">
    <button @click="sidebar = !sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <rect id="Rectangle" width="24" height="24" fill="none" />
        <path id="Shape" d="M8,12H0V10H8v2Zm8-5H0V5H16V7Zm0-5H8V0h8V2Z" transform="translate(4 6)" fill="#202224"
              stroke="#fff" stroke-miterlimit="10" stroke-width="0.5" />
      </svg>
    </button>
  </div>
  <div class="divide-y divide-solid mt-10">
    <div>
      <x-sidebar-link href="{{ route('dashboard') }}" active="{{ Route::is('dashboard') }}" class="my-3">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" class="fill-current" height="24" viewBox="0 0 24 24">
            <g id="Dashboard" transform="translate(-31 -14)">
              <g id="Element_icon_dashboard" data-name="Element / icon / dashboard" transform="translate(31 14)">
                <g id="Element_icon_dashboard-2" data-name="Element / icon / dashboard">
                  <rect id="Rectangle" width="24" height="24" opacity="0" />
                  <path id="Path" d="M6,0H2A2,2,0,0,0,0,2V6A2,2,0,0,0,2,8H6A2,2,0,0,0,8,6V2A2,2,0,0,0,6,0Z"
                        transform="translate(3 3)" />
                  <path id="Path-2" data-name="Path"
                        d="M6,0H2A2,2,0,0,0,0,2V6A2,2,0,0,0,2,8H6A2,2,0,0,0,8,6V2A2,2,0,0,0,6,0Z"
                        transform="translate(13 3)" />
                  <path id="Path-3" data-name="Path"
                        d="M6,0H2A2,2,0,0,0,0,2V6A2,2,0,0,0,2,8H6A2,2,0,0,0,8,6V2A2,2,0,0,0,6,0Z"
                        transform="translate(3 13)" />
                  <path id="Path-4" data-name="Path"
                        d="M6,0H2A2,2,0,0,0,0,2V6A2,2,0,0,0,2,8H6A2,2,0,0,0,8,6V2A2,2,0,0,0,6,0Z"
                        transform="translate(13 13)" />
                </g>
              </g>
            </g>
          </svg>
          <div x-show="sidebar" class="ml-5">
            {{ __('Dashboard') }}
          </div>
        </div>
      </x-sidebar-link>
      <x-sidebar-link
        href="{{ route('subscriptions.index') }}"
        active="{{ Route::is('subscriptions.index') }}"
        class="my-3"
      >
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24">
            <g id="TO-_Do" data-name="TO- Do" transform="translate(-31 -14)" opacity="0.996">
              <g id="Element_icon_to_do" data-name="Element / icon / to do" transform="translate(31 14)">
                <g id="Element_icon_to_do-2" data-name="Element / icon / to do">
                  <rect id="Rectangle" width="24" height="24" opacity="0" />
                  <path id="Path"
                        d="M15,0V3a2,2,0,0,1-2,2H5A2,2,0,0,1,3,3V0A3,3,0,0,0,0,3V15a3,3,0,0,0,3,3H15a3,3,0,0,0,3-3V3A3,3,0,0,0,15,0Z"
                        transform="translate(3 4)" />
                  <rect id="Rectangle-2" data-name="Rectangle" width="10" height="6" rx="1"
                        transform="translate(7 2)" />
                </g>
              </g>
            </g>
          </svg>
          <div x-show="sidebar" class="ml-5">
            {{ __('Subscriptions') }}
          </div>
        </div>
      </x-sidebar-link>
    </div>
    <div>
      <x-sidebar-link href="{{ route('profile') }}" active="{{ Route::is('profile') }}" class="my-3">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24">
            <g id="profile" transform="translate(-31 -14)" opacity="0.996">
              <g id="Element_icon_team" data-name="Element / icon / team" transform="translate(31 14)">
                <g id="Element_icon_team-2" data-name="Element / icon / team">
                  <rect id="Rectangle" width="24" height="24" opacity="0" />
                  <path id="Path" d="M4,8A4,4,0,1,0,0,4,4,4,0,0,0,4,8Z" transform="translate(8 3)" />
                  <path id="Path-2" data-name="Path" d="M13,8a1,1,0,0,0,1-1A7,7,0,0,0,0,7,1,1,0,0,0,1,8Z"
                        transform="translate(5 13)" />
                </g>
              </g>
            </g>
          </svg>
          <div x-show="sidebar" class="ml-5">
            {{ __('My Account') }}
          </div>
        </div>
      </x-sidebar-link>
      <x-sidebar-link href="{{ route('payments.index') }}" active="{{ Route::is('payments.index') }}" class="my-3">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24">
            <g id="Invoice" transform="translate(-31 -14)" opacity="0.996">
              <g id="Element_icon_invoice" data-name="Element / icon / invoice" transform="translate(31 14)">
                <g id="Element_icon_invoice-2" data-name="Element / icon / invoice">
                  <rect id="Rectangle" width="24" height="24" opacity="0" />
                  <path id="Shape"
                        d="M17,14H3a3,3,0,0,1-3-3V3A3,3,0,0,1,3,0H17a3,3,0,0,1,3,3v8A3,3,0,0,1,17,14ZM13,8a1,1,0,0,0,0,2h2a1,1,0,1,0,0-2ZM5,8a1,1,0,1,0,0,2H9A1,1,0,0,0,9,8ZM3,2A1,1,0,0,0,2,3V4H18V3a1,1,0,0,0-1-1Z"
                        transform="translate(2 5)" />
                </g>
              </g>
            </g>
          </svg>
          <div x-show="sidebar" class="ml-5">
            {{ __('Payment') }}
          </div>
        </div>
      </x-sidebar-link>
      <x-sidebar-link href="{{ route('upgrades.index') }}" active="{{ Route::is('upgrades.index') }}" class="my-3">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24">
            <g id="Favorites" transform="translate(-31 -14)" opacity="0.996">
              <g id="Element_icon_Favourites" data-name="Element / icon / Favourites" transform="translate(31 14)">
                <g id="Element_icon_Favourites-2" data-name="Element / icon / Favourites">
                  <rect id="Rectangle" width="24" height="24" opacity="0" />
                  <path id="Path"
                        d="M10,17a1,1,0,0,1-.71-.29L1.521,8.93a5.233,5.233,0,0,1,7.4-7.4L10,2.61l1.08-1.08a5.233,5.233,0,1,1,7.4,7.4l-7.77,7.78A1,1,0,0,1,10,17Z"
                        transform="translate(1.999 4)" />
                </g>
              </g>
            </g>
          </svg>
          <div x-show="sidebar" class="ml-5">
            {{ __('Upgrade') }}
          </div>
        </div>
      </x-sidebar-link>
    </div>
    <div>
      <x-sidebar-link href="{{ route('settings') }}" active="{{ Route::is('settings') }}" class="my-3">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="fill-current" viewBox="0 0 24 24">
            <g id="settings" transform="translate(-31 -14)" opacity="0.996">
              <g id="Element_icon_settings" data-name="Element / icon / settings" transform="translate(31 14)">
                <g id="Element_icon_settings-2" data-name="Element / icon / settings">
                  <rect id="Rectangle" width="24" height="24" transform="translate(24 24) rotate(180)" opacity="0" />
                  <circle id="Oval" cx="1.5" cy="1.5" r="1.5" transform="translate(10.5 10.5)" />
                  <path id="Shape"
                        d="M10.94,20H9.05a1.674,1.674,0,0,1-1.68-1.62V17.29A.341.341,0,0,0,7.15,17a.379.379,0,0,0-.41,0l-.77.74a1.67,1.67,0,0,1-2.37,0L2.26,16.38a1.668,1.668,0,0,1-.5-1.19A1.705,1.705,0,0,1,2.26,14l.81-.741a.341.341,0,0,0,0-.37c-.068-.168-.174-.26-.3-.26H1.68A1.694,1.694,0,0,1,0,10.94V9.05A1.682,1.682,0,0,1,1.68,7.37H2.71A.341.341,0,0,0,3,7.15a.38.38,0,0,0,0-.41L2.26,6a1.671,1.671,0,0,1,0-2.4L3.63,2.26a1.662,1.662,0,0,1,1.18-.5A1.709,1.709,0,0,1,6,2.26l.74.81a.34.34,0,0,0,.37,0c.168-.067.26-.174.26-.3V1.68A1.694,1.694,0,0,1,9.06,0H11a1.671,1.671,0,0,1,1.63,1.68V2.71a.343.343,0,0,0,.22.29.379.379,0,0,0,.41,0l.77-.74a1.67,1.67,0,0,1,2.37,0l1.34,1.37a1.662,1.662,0,0,1,.5,1.191A1.639,1.639,0,0,1,17.74,6l-.81.74a.341.341,0,0,0,0,.37c.067.168.174.26.3.26H18.32A1.694,1.694,0,0,1,20,9.06V11a1.676,1.676,0,0,1-1.62,1.67H17.29a.412.412,0,0,0-.29.589l.73.73a1.671,1.671,0,0,1,0,2.371L16.39,17.7a1.659,1.659,0,0,1-1.18.5,1.711,1.711,0,0,1-1.19-.5l-.76-.77a.34.34,0,0,0-.37,0c-.168.068-.26.174-.26.3V18.32A1.693,1.693,0,0,1,10.94,20ZM10,6.5a3.5,3.5,0,1,0,1.338.266A3.478,3.478,0,0,0,10,6.5Z"
                        transform="translate(2 2)" />
                </g>
              </g>
            </g>
          </svg>
          <div x-show="sidebar" class="ml-5">
            {{ __('Settings') }}
          </div>
        </div>
      </x-sidebar-link>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-sidebar-link class="my-3" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="24" height="24" viewBox="0 0 24 24">
              <g id="Logout" transform="translate(-31 -14)" opacity="1">
                <g id="power" transform="translate(31 14)">
                  <rect id="Rectangle" width="24" height="24" opacity="0" />
                  <path id="Path" d="M1,12a1,1,0,0,0,1-1V1A1,1,0,0,0,0,1V11A1,1,0,0,0,1,12Z"
                        transform="translate(11 1)" />
                  <path id="Path-2" data-name="Path"
                        d="M14.591.112a1,1,0,0,0-.92,1.78,8,8,0,1,1-7.34,0,1,1,0,1,0-.92-1.78,10,10,0,1,0,9.18,0Z"
                        transform="translate(1.999 2.998)" />
                </g>
              </g>
            </svg>
            <div x-show="sidebar" class="ml-5">
              {{ __('Logout') }}
            </div>
          </div>
        </x-sidebar-link>
      </form>
    </div>
  </div>
</aside>
