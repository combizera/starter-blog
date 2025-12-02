@props([
  'title' => null,
  'link' => '#',
  'target' => false,
  'class' => ''
])
<a
  href="{{ $link }}"
  @if($target) target="_blank" rel="noopener" @endif
  class="bg-zinc-700 text-white px-6 py-2 rounded-lg hover:bg-zinc-600 transition-colors font-medium {{ $class }}"
>
  {{ $title }}
</a>
