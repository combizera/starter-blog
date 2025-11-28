<x-layout>

  <h1 class="text-xl font-semibold mb-4 text-zinc-300 border-b border-zinc-700 pb-4">
    Create New Category
  </h1>

  <x-nav.categories />

  <form action="{{ route('categories.store') }}" method="POST" class="grid grid-cols-2 gap-4">
    @csrf

    <div class="flex">
      <x-input
        label="Name"
        placeholder="Category Name"
        name="name"
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
        required
      />
      @error('slug')
        <div class="text-red-600 mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col-span-2">
      <x-button class="w-full font-bold !text-zinc-400 !border-zinc-400" outline zinc lg flat right-icon="plus" type="submit">
        Create Category
      </x-button>
    </div>
  </form>
</x-layout>
