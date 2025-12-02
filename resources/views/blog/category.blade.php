<x-layout title="Blog Category">
  {{-- FEATURED POST --}}
  <x-blog-breadcrumb />

  <x-blog-category-title :category="$category" />

  {{-- BLOG LIST --}}
  <x-blog-list title="Latest Post - {{ $category->name }}" />
</x-layout>
