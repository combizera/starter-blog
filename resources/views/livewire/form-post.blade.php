@props([
  'button' => null,
])
<x-section title="Post Details" icon="document-text">
  <div>
    <x-input
      label="Title"
      placeholder="Post Title"
      name="title"
      wire:model="title"
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
      placeholder="post-slug"
      name="slug"
      wire:model="slug"
      value="{{ $post->slug ?? old('slug') }}"
      required
    />
    @error('slug')
      <div class="text-red-600 mt-1">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="col-span-2">
    <div>
      <x-textarea
        label="Content"
        placeholder="Your post content here..."
        name="content"
        wire:model="content"
        rows="10"
        required
      />
      @error('content')
        <div class="text-red-600 mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>

  <x-section title="Identification" icon="identification" class="col-span-2">
    <div>
      <x-select
        name="category_id"
        label="Select Category"
        placeholder="Select category"
        wire:model="categoryId"
        :options="$categories"
        option-label="label"
        option-value="value"
      />
      @error('category_id')
        <div class="text-red-600 mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div>
      <x-select
        name="user_id"
        label="Select Author"
        placeholder="Select author"
        wire:model="userId"
        :options="$users"
        option-label="label"
        option-value="value"
      />
      @error('user_id')
        <div class="text-red-600 mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>
  </x-section>

  <div class="col-span-2 mt-4">
    <x-button class="w-full font-bold !text-zinc-400 !border-zinc-400" outline zinc lg flat right-icon="document-text" type="submit">
      {{ $button }}
    </x-button>
  </div>
</x-section>

