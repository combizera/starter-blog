@props([
  'title' => null,
  'link' => '#',
  'resume' => null,
  'date' => null,
  'target' => false
])
<li class="bg-zinc-900 rounded-lg p-6 hover:bg-zinc-950 transition-colors cursor-pointer">
  <a class="flex flex-col gap-2 justify-between h-full" href="{{ $link }}" @if($target) target="_blank" rel="noopener" @endif>
    <h3 class="text-white font-semibold text-lg">
      {{ $title }}
    </h3>
    <p class="text-gray-400 text-sm mb-2">
      {{ $resume }}
    </p>
    <time class="text-emerald-500 text-xs font-medium">
      {{ $date }}
    </time>
  </a>
</li>
