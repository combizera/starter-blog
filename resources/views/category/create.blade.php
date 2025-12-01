<x-layout>

  {{-- TITLE --}}
  <x-title title="Create New Category" />

  {{-- NAVIGATION --}}
  <x-nav.categories />

  {{-- FORM --}}
  <form
    action="{{ route('categories.store') }}"
    method="POST"
  >
    @csrf

    <livewire:form-category />
  </form>
</x-layout>
