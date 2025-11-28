<nav>
  <ul class="flex gap-4 mb-4">
    <li>
      <x-link
        zinc
        label="All Categories"
        underline="{{ Route::is('categories.index') ? 'always' : 'hover' }}"
        href="{{ route('categories.index') }}"
        class="{{ Route::is('categories.index') ? '!text-zinc-400' : '!text-zinc-500'}}"
      />
    </li>
    <li>
      <x-link
        zinc
        label="New"
        underline="{{ Route::is('categories.create') ? 'always' : 'hover' }}"
        href="{{ route('categories.create') }}"
        class="{{ Route::is('categories.create') ? '!text-zinc-400' : '!text-zinc-500'}}"
      />
    </li>
  </ul>
</nav>
