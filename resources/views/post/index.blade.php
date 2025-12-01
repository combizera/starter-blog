<x-layout>
  <div class="absolute top-10 right-10 min-w-[300px] z-10 space-y-4">
    @session('success')
      <x-alert title="{{ session('success') }}" />
    @endsession
  </div>

  {{-- TITLE --}}
  <x-title>
    Create New Post
  </x-title>

  {{-- NAVIGATION --}}
  <x-nav.posts />

  {{-- TABLE --}}
  <div class="dark ">
    <livewire:post-table/>
  </div>
</x-layout>
