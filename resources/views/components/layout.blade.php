@props([
  'title' => config('app.name'),
])
  <!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    {{ $title }} -  {{ config('app.name') }}
  </title>

  {{-- TODO: add seo tags --}}

  @vite('resources/css/app.css')

  <wireui:scripts />
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-zinc-800 text-white min-h-screen flex flex-col">

  {{-- MAIN --}}
  <main class="flex-1 flex flex-col md:flex-row  w-full">
    {{-- ASIDE --}}
    <x-aside />

    {{-- CONTENT --}}
    <div class="flex-1 p-4 md:p-6">
      {{ $slot }}
    </div>
  </main>
</body>
</html>
