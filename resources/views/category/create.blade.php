<x-layout-admin title="Create New Category">

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

    <livewire:form-category :is-editing="false" />
  </form>
</x-layout-admin>
