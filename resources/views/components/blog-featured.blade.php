<section class="py-16 px-4">
  <div class="max-w-7xl mx-auto">
    {{-- ARTICLE --}}
    <article class="flex flex-col md:flex-row gap-8 items-start">
      {{-- IMAGE --}}
      <div class="w-full md:w-[400px] flex-shrink-0">
        <div class="relative overflow-hidden rounded-lg aspect-[4/3]">
          <img
            src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?w=800&q=80"
            alt="Wind turbines at sunset"
            class="w-full h-full object-cover"
          >
        </div>
      </div>

      {{-- CONTAINER --}}
      <div class="flex-1 flex flex-col justify-between items-start">
        {{-- TITLE --}}
        <div>
          <h2 class="text-3xl md:text-4xl font-bold mb-4">
            {{ $post->title }}
          </h2>

          <p class="text-gray-400 text-lg mb-8">
            {!! Str::limit($post->resume, 100) ?? Str::limit($post->content, 100) !!}
          </p>

          {{-- DATA --}}
          <div class="flex flex-wrap gap-x-8 gap-y-4 mb-8">
            <div>
              <p class="text-gray-500 text-sm mb-1">Category</p>
              <p class="text-white font-medium">{{ $post->category->name }}</p>
            </div>

            <div>
              <p class="text-gray-500 text-sm mb-1">Date</p>
              <p class="text-white font-medium">{{ $post->created_at->format('d/m/Y') }}</p>
            </div>

            <div>
              <p class="text-gray-500 text-sm mb-1">Author</p>
              <p class="text-white font-medium">{{ $post->user->name }}</p>
            </div>
          </div>
        </div>

        <x-btn.pri
          title="Get Started"
          link="{{ $post->getUrl() }}"
        />
      </div>
    </article>
  </div>
</section>
