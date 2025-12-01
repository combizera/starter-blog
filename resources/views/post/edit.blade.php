<x-layout-admin title="Edit Post">
  {{-- TITLE --}}
  <x-title title="Edit Post" />

  {{-- NAVIGATION --}}
  <x-nav.posts />

  <div>
    <form
      action="{{ route('categories.update', $post->id) }}"
      method="POST"
    >
      @csrf
      @method('PUT')

      <livewire:form-post :$post :$categories :$users />
    </form>
  </div>
</x-layout-admin>
