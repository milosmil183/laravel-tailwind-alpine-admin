<a
  {{ $attributes->merge(['class' => 'focus:outline-none cursor-pointer']) }}
  x-data="{ isActive: {{ $active ? 'true' : 'false' }} }"
>
  <div class="text-sm font-semibold">
    <div class="py-2 flex group">
      <div
        @class([
          'w-1',
          'focus:bg-primary rounded-r',
          'group-hover:text-white group-hover:bg-primary',
          'transition duration-150 ease-in-out',
          'bg-primary' => $active,
        ])
      ></div>
      <div
        :class="[
          'focus:bg-primary rounded',
          sidebar ? 'group-hover:text-white group-hover:bg-primary' : 'group-hover:text-primary',
          sidebar ? (isActive ? 'text-white bg-primary' : 'text-current') : (isActive ? 'text-primary' : 'text-neutral-400'),
          'transition duration-150 ease-in-out',
          'grow ml-4 mr-4',
        ]"
      >
        <div class="px-4 py-2">
          {{ $slot }}
        </div>
      </div>
    </div>
  </div>
</a>
