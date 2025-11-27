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
</head>

<body class="bg-gray-800 text-white">
  {{-- HEADER --}}
  <x-header />

  {{ $slot }}

  {{-- FOOTER --}}
  <x-footer />
</body>
</html>
