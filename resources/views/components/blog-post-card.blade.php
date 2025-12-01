@props([
  'title' => null,
  'link' => '#',
  'resume' => null,
  'date' => null,
])
<li class="bg-zinc-900 rounded-lg p-6 hover:bg-zinc-950 transition-colors cursor-pointer">
  <a href="{{ $link }}">
    <h3 class="text-white font-semibold text-lg mb-2">
      {{ $title }}
    </h3>
    <p class="text-gray-400 text-sm mb-4">
      {{ $resume }}
    </p>
    <time class="text-emerald-400 text-xs font-medium">
      {{ $date }}
    </time>
  </a>
</li>
