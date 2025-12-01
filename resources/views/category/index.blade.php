<x-layout-admin title="Categories">
  <div class="absolute top-10 right-10 min-w-[300px] z-10 space-y-2">
    @session('success')
      <x-alert title="{{ session('success') }}" />
    @endsession
  </div>

  {{-- TITLE --}}
  <x-title title="All Categories" />

  {{-- NAVIGATION --}}
  <x-nav.categories />

  {{-- TABLE --}}
  <livewire:category-table />
</x-layout-admin>
