<x-app-layout>
  <div class="flex flex-col h-full">
    <h2 class="font-bold text-3xl text-gray-800 leading-tight">
      {{ __('Payments') }}
    </h2>
    <div class="grow flex flex-col mt-5">
      <div class="bg-white rounded-md overflow-hidden border border-gray-300/50 grow p-5">
        <table class="table-fixed w-full text-sm font-semibold mt-3">
          <thead class="bg-[#F1F4F9]">
          <tr>
            <th class="px-4 py-3">
              Order No
            </th>
            <th class="px-4 py-3 w-96">
              Subscription
            </th>
            <th class="px-4 py-3">
              Quantity
            </th>
            <th class="px-4 py-3">
              Base Cost
            </th>
            <th class="px-4 py-3">
              Total Cost
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach ($payments as $item)
            <tr class="border-b border-b-gray-300 text-center">
              <td class="px-4 py-4">
                {{ $item->order_no }}
              </td>
              <td class="px-4 py-4">
                {{ $item->subscription }}
              </td>
              <td class="px-4 py-4">
                {{ $item->quantity }}
              </td>
              <td class="px-4 py-4">
                {{ $item->base_cost }}
              </td>
              <td class="px-4 py-4">
                {{ $item->total_cost }}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <div class="text-right">
          <div class="text-lg font-semibold px-4 py-4 mr-10">
            Total &nbsp;&nbsp;&nbsp; = &nbsp;&nbsp; {{ '$4860' }}
          </div>
        </div>
        <div class="grid grid-cols-3 gap-6 mt-3">
          <div class="text-sm font-semibold">
            <div>
              Credit Card
            </div>
            <div class="mt-3">
              Pay securely using your credit card.
            </div>
            <div class="mt-10">
              <label class="flex items-center">
                <input
                  type="radio"
                  class="rounded-full border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  name="card"
                >
                <span class="ml-2 inline-flex items-center">
                  <img src="{{ url('/img/card-visa.png') }}" alt="" />
                  <span class="ml-2">
                    4652 (expires 10/26)
                  </span>
                </span>
              </label>
              <label class="flex items-center mt-3">
                <input
                  type="radio"
                  class="rounded-full border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  name="card"
                >
                <span class="ml-2 inline-flex items-center">
                  <img src="{{ url('/img/card-visa.png') }}" alt="" />
                  <span class="ml-2">
                    6242 (expires 10/26)
                  </span>
                </span>
              </label>
              <label class="flex items-center mt-3">
                <input
                  type="radio"
                  class="rounded-full border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  name="card"
                >
                <span class="ml-2 inline-flex items-center">
                  <img src="{{ url('/img/card-visa.png') }}" alt="" />
                  <span class="ml-2">
                    3652 (expires 10/26)
                  </span>
                </span>
              </label>
              <label class="flex items-center mt-3">
                <input
                  type="radio"
                  class="rounded-full border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  name="card"
                >
                <span class="ml-2 inline-flex items-center">
                  Use a new card
                </span>
              </label>
            </div>
          </div>
          <div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div>
                <x-label for="card_number" :value="__('Card Number*')" />
                <x-input
                  id="card_number"
                  class="block mt-2 w-full"
                  type="text"
                  name="card_number"
                  :value="old('card_number')"
                  placeholder="**** **** **** ****"
                  required
                  autofocus
                ></x-input>
              </div>
              <div class="mt-5">
                <x-label for="expire_at" :value="__('Expiration (MM/YY) *')" />
                <x-input
                  id="expire_at"
                  class="block mt-2 w-full"
                  type="text"
                  name="expire_at"
                  :value="old('expire_at')"
                  placeholder="MM/YY"
                  required
                ></x-input>
              </div>
              <div class="mt-5">
                <x-label for="security_code" :value="__('Card Security Code *')" />
                <x-input
                  id="security_code"
                  class="block mt-2 w-full"
                  type="text"
                  name="security_code"
                  :value="old('security_code')"
                  placeholder="CSC"
                  required
                ></x-input>
              </div>
              <div class="mt-8 mx-8">
                <x-button class="w-full justify-center bg-primary">
                  {{ __('Add Card') }}
                </x-button>
              </div>
            </form>
          </div>
          <div class="flex items-center justify-center">
            <a href="/" class="bg-gray-100 border border-gray-300 p-3 rounded hover:bg-gray-200 transition">
              <svg id="ic-local-printshop-24px" xmlns="http://www.w3.org/2000/svg" width="18" height="16.2"
                   viewBox="0 0 18 16.2">
                <path id="Shape"
                      d="M14.4,16.2H3.6V12.6H0V7.2A2.7,2.7,0,0,1,2.7,4.5H15.3A2.7,2.7,0,0,1,18,7.2v5.4H14.4v3.6Zm-9-6.3v4.5h7.2V9.9Zm9.9-3.6a.9.9,0,1,0,.9.9A.9.9,0,0,0,15.3,6.3Zm-.9-2.7H3.6V0H14.4V3.6Z"
                      fill="#202224" />
              </svg>
            </a>
            <a href="/"
               class="bg-primary hover:bg-primary/75 text-white rounded transition px-10 py-2 inline-flex items-center ml-3">
              <span class="mr-2">
                Send
              </span>
              <svg xmlns="http://www.w3.org/2000/svg" width="14.003" height="14.003" viewBox="0 0 14.003 14.003">
                <path id="Shape"
                      d="M7.336,14a.66.66,0,0,1-.649-.505L5.45,8.553.5,7.316A.666.666,0,0,1,.382,6.067l12.667-6a.658.658,0,0,1,.852.25.651.651,0,0,1,.036.638l-6,12.667A.651.651,0,0,1,7.336,14Zm4.6-11.932-9.3,4.4,3.525.881a.664.664,0,0,1,.485.485l.882,3.526Z"
                      transform="translate(0 0)" fill="#fff" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
