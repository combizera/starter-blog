<x-layout-admin title="Edit Post">
  {{-- TITLE --}}
  <x-title title="Edit Post" />

  {{-- NAVIGATION --}}
  <x-nav.posts />

  {{-- FORM --}}
  <form
    action="{{ route('categories.update', $post->id) }}"
    method="POST"
  >
    @csrf
    @method('PUT')

    <livewire:form-post :$post :$categories :$users />
  </form>
</x-layout-admin>
