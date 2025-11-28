<nav>
  <ul class="flex gap-4 mb-4">
    <li>
      <x-link
        zinc
        label="All Posts"
        underline="{{ Route::is('posts.index') ? 'always' : 'hover' }}"
        href="{{ route('posts.index') }}"
        class="{{ Route::is('posts.index') ? '!text-zinc-400' : '!text-zinc-500'}}"
      />
    </li>
    <li>
      <x-link
        zinc
        label="New"
        underline="{{ Route::is('posts.create') ? 'always' : 'hover' }}"
        href="{{ route('posts.create') }}"
        class="{{ Route::is('posts.create') ? '!text-zinc-400' : '!text-zinc-500'}}"
      />
    </li>
  </ul>
</nav>
