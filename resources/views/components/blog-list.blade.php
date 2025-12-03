@props([
  'title' => null,
  'posts' => []
])
<section class="pb-10">
  <h2 class="font-bold text-2xl mb-8 pt-10">
    {{ $title }}
  </h2>
  <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($posts as $post)
      <x-blog-post-card
        :title="$post->title"
        :resume="$post->resume"
        :date="$post->created_at->format('F d, Y')"
        :link="route('blog.post', $post->slug)"
      />
    @endforeach
  </ul>
</section>
