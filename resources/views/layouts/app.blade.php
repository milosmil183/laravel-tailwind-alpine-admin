<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 overflow-x-hidden">
  <div class="flex" x-data="{ sidebar: $persist(true) }">
    <div class="shrink-0">
      @include('layouts.sidebar')
    </div>
    <div class="grow min-w-0 min-h-screen flex flex-col">
      <header>
        @include('layouts.navigation')
      </header>
      <main class="p-6 grow">
        {{ $slot }}
      </main>
    </div>
  </div>
</div>
</body>
</html>
