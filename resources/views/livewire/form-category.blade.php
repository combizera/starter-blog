<x-section title="Category Details" icon="document-text">
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
    <x-button class="w-full font-bold !text-zinc-400 !border-zinc-400" outline zinc lg flat right-icon="tag" type="submit">
      {{ $button }}
    </x-button>
  </div>
</x-section>
