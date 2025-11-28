<x-layout>
  {{-- TODO: add a Alert component for success messages --}}
  @session('success')
    <x-alert title="{{ session('success') }}" />
  @endsession
  <h1 class="text-xl font-semibold mb-4 text-zinc-300 border-b border-zinc-700 pb-4">
    Categories
  </h1>

  <x-nav.categories />

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
</x-layout>
