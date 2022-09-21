<x-app-layout>
  <div class="flex flex-col h-full">
    <h2 class="font-bold text-3xl text-gray-800 leading-tight">
      {{ __('Subscriptions') }}
    </h2>
    <div class="grow flex flex-col mt-5">
      <div class="bg-white rounded-md overflow-hidden border border-gray-300/50 grow">
        <table class="table-fixed w-full border-collapse text-sm font-semibold">
          <thead class="bg-[#FCFDFD]">
          <tr class="uppercase text-left border-b border-b-gray-300">
            <th class="px-4 py-3 w-28">
              Id
            </th>
            <th class="px-4 py-3">
              Name
            </th>
            <th class="px-4 py-3 w-80">
              Address
            </th>
            <th class="px-4 py-3">
              Date
            </th>
            <th class="px-4 py-3">
              Type
            </th>
            <th class="px-4 py-3 text-center">
              Status
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach ($subscriptions as $subscription)
            <tr class="border-b border-b-gray-300">
              <td class="px-4 py-4">
                {{ $subscription->id }}
              </td>
              <td class="px-4 py-4">
                {{ $subscription->name }}
              </td>
              <td class="px-4 py-4">
                {{ $subscription->address }}
              </td>
              <td class="px-4 py-4">
                {{ $subscription->date }}
              </td>
              <td class="px-4 py-4">
                {{ $subscription->type }}
              </td>
              <td class="px-4 py-4 text-center">
                @switch($subscription->status)
                  @case('completed')
                  <div class="bg-[#00B69B]/25 text-[#00B69B] px-4 py-2 rounded-lg inline-block w-32">
                    Completed
                  </div>
                  @break
                  @case('processing')
                  <div class="bg-[#6226EF]/25 text-[#6226EF] px-4 py-2 rounded-lg inline-block w-32">
                    Processing
                  </div>
                  @break
                  @case('rejected')
                  <div class="bg-[#EF3826]/25 text-[#EF3826] px-4 py-2 rounded-lg inline-block w-32">
                    Rejected
                  </div>
                  @break
                @endswitch
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <div class="mt-5">
        {{ $subscriptions->links() }}
      </div>
    </div>
  </div>
</x-app-layout>
