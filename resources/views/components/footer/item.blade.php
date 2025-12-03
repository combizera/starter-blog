@props([
  'title' => null,
  'link' => '#',
])
<li>
  <a href="{{ $link }}" class="text-zinc-400 hover:text-zinc-500 transition-colors">
    {{ $title }}
  </a>
</li>
