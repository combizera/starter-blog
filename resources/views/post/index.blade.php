<x-layout>
  {{-- TODO: add a Alert component for success messages --}}
  @session('success')
    <x-alert title="{{ session('success') }}" />
  @endsession
  <h1 class="text-xl font-semibold mb-4 text-zinc-300 border-b border-zinc-700 pb-4">
    Posts
  </h1>

  <x-nav.posts />

  <div class="dark ">
    <livewire:post-table/>
  </div>
</x-layout>
