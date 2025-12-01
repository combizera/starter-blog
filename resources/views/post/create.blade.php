<x-layout>

  <x-title>
    Create New Post
  </x-title>

  <x-nav.posts />

  <form
    action="{{ route('posts.store') }}"
    method="POST"
    class="dark"
  >
    @csrf

    <x-section title="Post Details" icon="document-text">
      <div class="flex">
        <x-input
          label="Title"
          placeholder="Post Title"
          name="title"
          value="{{ $title ?? old('title') }}"
          required
        />
        @error('title')
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
          value="{{ $slug ?? old('slug') }}"
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
          label="Content"
          placeholder="Your post content here..."
          name="content"
          value="{{ $content ?? old('content') }}"
          rows="10"
          required
        />
        @error('content')
          <div class="text-red-600 mt-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      <x-section title="Identification" icon="identification" class="dark col-span-2">
        <div>
          <x-select
            name="category_id"
            label="Select Category"
            placeholder="Select category"
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
    </x-section>

    <div class="col-span-2 mt-4">
      <x-button class="w-full font-bold !text-zinc-400 !border-zinc-400" outline zinc lg flat right-icon="plus" type="submit">
        Create Post
      </x-button>
    </div>
  </form>
</x-layout>
