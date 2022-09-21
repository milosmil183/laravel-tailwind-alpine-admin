<button {{ $attributes->class(['inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-lg text-white hover:bg-gray-700 active:bg-gray-900 focus:outline-none ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'])->merge(['type' => 'submit']) }}>
  {{ $slot }}
</button>
