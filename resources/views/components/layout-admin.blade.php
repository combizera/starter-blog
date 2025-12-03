@props([
  'title' => null,
])

@php
  $title = !empty($title) ? trim($title) : config('app.name');
@endphp

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    {{ $title }} -  {{ config('app.name') }}
  </title>

  <meta name="robots" content="noindex">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireScripts

  <wireui:scripts />
</head>
<body class="bg-zinc-800 text-white min-h-screen flex flex-col dark">

  {{-- MAIN --}}
  <main class="flex-1 flex flex-col md:flex-row w-full max-w-full">
    <x-aside />

    {{-- CONTENT --}}
    <div class="flex-1 p-4 md:p-6 max-w-[100%] overflow-x-hidden">
      {{ $slot }}
    </div>
  </main>
</body>
</html>
