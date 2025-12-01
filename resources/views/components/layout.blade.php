@props([
    'title' => null,
    'resume' => null,
    'image' => null,
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

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireScripts

  <wireui:scripts />

  {{-- SEO [Title/Description/Favicon/Canonical] --}}
  <x-seo :$title :$resume />

  {{-- OG Meta Tags --}}
   <x-seo.og-tags :$title :$resume :$image />

  {{-- Twitter Meta Tags --}}
   <x-seo.twitter-tags :$title :$resume />
</head>
<body class="bg-zinc-800 text-white min-h-screen flex flex-col dark">

  {{-- MAIN --}}
  <main class="">
    {{-- HEADER --}}
    <x-header />

    {{-- CONTENT --}}
    <div class="flex-1 p-4 md:p-6 max-w-[100%] overflow-x-hidden">
      {{ $slot }}
    </div>

    {{-- FOOTER --}}
    <x-footer />
  </main>
</body>
</html>
