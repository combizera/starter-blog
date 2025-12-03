@props([
  'title' => null,
  'link' => '#',
])
<a href="{{ $link }}" class="text-zinc-400 hover:text-zinc-500 font-medium transition-colors">
  {{ $title }}
</a>
