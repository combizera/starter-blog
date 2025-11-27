<x-layout>
  <h1>
    Edit - {{ $category->name }}
  </h1>

  <div>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="grid grid-cols-2 gap-4">
      @csrf
      @method('PUT')

      <div class="flex">
        <label for="name">
          Name
        </label>
        <input value="{{ $category->name }}" class="border-white border-2" type="text" id="name" name="name" placeholder="Category Name" required>
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
        <input value="{{ $category->slug }}" class="border-white border-2" type="text" id="slug" name="slug" required>
        @error('slug')
          <div class="text-red-600 mt-1">
            {{ $message }}
          </div>
        @enderror
      </div>

      <button class="border-white border-2 hover:cursor-pointer p-2" type="submit">
        Update Category
      </button>
    </form>
  </div>
</x-layout>
