<x-layout>
  {{-- TODO: add a Alert component for success messages --}}
  @session('success')
    <x-alert title="{{ session('success') }}" />
  @endsession
  <h1 class="text-xl font-semibold mb-4 text-zinc-300 border-b border-zinc-700 pb-4">
    Categories
  </h1>

  <nav>
    <ul class="flex gap-4 mb-4">
      <li>
        <x-link label="All Categories" zinc underline="always" href="{{ route('categories.index') }}" />
      </li>
      <li>
        <x-link label="New" zinc underline="hover" href="{{ route('categories.index') }}" />
      </li>
    </ul>
  </nav>

  <div>
    Table
    <ul class="flex flex-col gap-4">
      @forelse ($categories as $category)
        <li>
          - {{ $category->name }} ({{ $category->slug }})

          <a class="bg-white inline-block rounded p-1" href="{{ route('categories.edit', $category->id) }}">
            <x-icons.edit />
          </a>

          <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="bg-red-500 inline-block rounded p-1 hover:cursor-pointer">
            @csrf
            @method('DELETE')

            <button type="submit">
              <x-icons.destroy />
            </button>
          </form>
        </li>
      @empty
        <li>
          No categories found.
        </li>
      @endforelse
    </ul>
  </div>

  <hr class="my-4 opacity-25">

  <div>
    <h2>
      Create New Category
    </h2>

    <form action="{{ route('categories.store') }}" method="POST" class="grid grid-cols-2 gap-4">
      @csrf

      <div class="flex">
        <label for="name">
          Name
        </label>
        <input class="border-white border-2" type="text" id="name" name="name" placeholder="Category Name" required>
        @error('name')
          <div class="text-red-600 mt-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div>
        <label for="slug">
          Slug
        </label>
        <input class="border-white border-2" type="text" id="slug" name="slug" required>
        @error('slug')
          <div class="text-red-600 mt-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      <button class="border-white border-2 hover:cursor-pointer p-2" type="submit">
        Create Category
      </button>
    </form>
  </div>
</x-layout>
