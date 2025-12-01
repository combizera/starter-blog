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

    <x-section title="Category - {{ $category->name }}" icon="document-text">
      <div class="flex">
        <x-input
          label="Name"
          placeholder="Category Name"
          name="name"
          value="{{ $category->name }}"
          required
        />

        @error('name')
          <div class="text-red-600 mt-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div>
        <x-input
          label="Slug"
          placeholder="category-slug"
          name="slug"
          value="{{ $category->slug }}"
          required
        />

        @error('slug')
          <div class="text-red-600 mt-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      <x-button class="col-span-2 w-full font-bold !text-zinc-400 !border-zinc-400" outline zinc lg flat type="submit">
        Update Category
      </x-button>
    </x-section>
  </form>
</x-layout-admin>
