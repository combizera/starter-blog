<x-section title="Category Details" icon="document-text">
  <div class="flex">
    <x-input
      label="Name"
      placeholder="Category Name"
      name="name"
      wire:model="name"
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
      wire:model="slug"
      required
    />
    @error('slug')
      <div class="text-red-600 mt-1">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="col-span-2">
    <x-textarea
      label="Description"
      placeholder="Your category description"
      name="description"
      wire:model="description"
      nullable
    />
    @error('description')
      <div class="text-red-600 mt-1">
        {{ $message }}
      </div>
    @enderror
  </div>

  @if($isEditing)
    <div class="col-span-2">
      <x-select
        name="post_featured"
        label="Select Featured Post"
        placeholder="Select featured post"
        wire:model="postFeatured"
        :options="$posts"
        option-label="title"
        option-value="id"
      />
      @error('postFeatured')
      <div class="text-red-600 mt-1">
        {{ $message }}
      </div>
      @enderror
    </div>
  @endif

  <div class="col-span-2">
    <x-button class="w-full font-bold !text-zinc-400 !border-zinc-400" outline zinc lg flat right-icon="tag" type="submit">
      {{ $button }}
    </x-button>
  </div>
</x-section>
