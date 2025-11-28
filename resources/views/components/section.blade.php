@props([
  'title' => 'Section Title',
  'icon' => 'home',
  'class' => '',
])

<section class="border-2 border-zinc-700 rounded-lg p-4 grid grid-cols-2 gap-4 {{  $class }}">
  <div class="col-span-2 flex items-center gap-2">
    <x-icon name="{{ $icon }}" class="w-7 h-7 text-zinc-400" solid />

    <h2 class="font-semibold text-zinc-400 text-xl">
      {{ $title }}
    </h2>
  </div>

  {{ $slot }}
</section>
