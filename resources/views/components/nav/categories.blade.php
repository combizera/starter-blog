<nav>
  <ul class="flex gap-4 mb-4">
    <li>
      <x-link
        zinc
        label="All Categories"
        underline="{{ Route::is('categories.index') ? 'always' : 'hover' }}"
        href="{{ route('categories.index') }}"
      />
    </li>
    <li>
      <x-link
        zinc
        label="New"
        underline="{{ Route::is('categories.create') ? 'always' : 'hover' }}"
        href="{{ route('categories.create') }}"
      />
    </li>
  </ul>
</nav>
