<x-layout>
  <h1>
    Categorias
  </h1>

  @session('success')
    <div class="bg-green-200 text-green-800 p-4 mb-4 rounded">
      {{ session('success') }}
    </div>
  @endsession

  <form action="{{ route('categories.store') }}" method="POST" class="grid grid-cols-2 gap-4">
    @csrf

    <div class="flex">
      <label for="name">
        Nome
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
      Adicionar Categoria
    </button>
  </form>
</x-layout>
