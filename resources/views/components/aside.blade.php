<aside class="bg-zinc-900 md:w-64 md:min-h-full">
  <div class="bg-zinc-900 p-4">
    <a href="{{ route('site.index') }}" class="flex gap-2 items-center mb-4 mt-2 transition hover:opacity-60">
       <x-logo />
       <p class="font-bold text-lg text-zinc-300">
         Blog Starter Kit
       </p>
    </a>

    <ul class="border-t border-zinc-700 pt-4 space-y-1">
      <h2 class="text-sm font-semibold mb-2 text-zinc-300">
        Navigation
      </h2>
      <li>
        <x-button class="w-full flex justify-start !text-zinc-400 {{ Route::is('categories.*') ? 'bg-zinc-800' : '' }}" zinc flat icon="tag" lg outline label="Categories" href="{{ route('categories.index') }}"/>
      </li>
      <li>
        <x-button class="w-full flex justify-start !text-zinc-400 {{ Route::is('posts.*') ? 'bg-zinc-800' : '' }}" zinc flat icon="document-text" lg outline label="Posts" href="{{ route('posts.index') }}"/>
      </li>
    </ul>
  </div>
</aside>
