<x-layout>

  {{-- TITLE --}}
  <x-title title="Create New Post" />

  {{-- NAVIGATION --}}
  <x-nav.posts />

  {{-- FORM --}}
  <form
    action="{{ route('posts.store') }}"
    method="POST"
  >
    @csrf

    <livewire:form-post :$categories :$users />
  </form>
</x-layout>
