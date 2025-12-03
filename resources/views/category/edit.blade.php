<x-layout-admin title="Edit Category">
  {{-- TITLE --}}
  <x-title title="Edit Category"/>

  {{-- NAVIGATION --}}
  <x-nav.categories />

  {{-- FORM --}}
  <form
    action="{{ route('categories.update', $category->id) }}"
    method="POST"
  >
    @csrf
    @method('PUT')

    <livewire:form-category :category="$category" :posts="$posts" :is-editing="true" />
  </form>
</x-layout-admin>
