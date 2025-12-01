<x-layout-admin title="Posts">
  <div class="absolute top-10 right-10 min-w-[300px] z-10 space-y-4">
    @session('success')
      <x-alert title="{{ session('success') }}" />
    @endsession
  </div>

  {{-- TITLE --}}
  <x-title title="All Posts" />

  {{-- NAVIGATION --}}
  <x-nav.posts />

  {{-- TABLE --}}
  <livewire:post-table/>
</x-layout-admin>
