<x-layout title="Blog">
  {{-- FEATURED POST --}}
  <x-blog-featured :post="$featuredPost" />

  <hr class="border-zinc-600" />

  {{-- BLOG LIST --}}
  <x-blog-list title="Latest Articles" :posts="$latestPosts" />
</x-layout>
