<x-layout title="Blog">
  <section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
      <!-- Article Card -->
      <article class="flex flex-col md:flex-row gap-8 items-start">
        <!-- Image Container -->
        <div class="w-full md:w-[400px] flex-shrink-0">
          <div class="relative overflow-hidden rounded-lg aspect-[4/3]">
            <img
              src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?w=800&q=80"
              alt="Wind turbines at sunset"
              class="w-full h-full object-cover"
            >
          </div>
        </div>

        <!-- Content Container -->
        <div class="flex-1 flex flex-col justify-between">
          <!-- Title and Description -->
          <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
              Global Climate Summit Addresses Urgent Climate Action
            </h2>

            <p class="text-gray-400 text-lg mb-8">
              World leaders gathered at the Global Climate Summit to discuss urgent climate action, emissions reductions, and renewable energy targets.
            </p>

            <!-- Metadata -->
            <div class="flex flex-wrap gap-x-8 gap-y-4 mb-8">
              <div>
                <p class="text-gray-500 text-sm mb-1">Category</p>
                <p class="text-white font-medium">Environment</p>
              </div>

              <div>
                <p class="text-gray-500 text-sm mb-1">Publication Date</p>
                <p class="text-white font-medium">October 10, 2023</p>
              </div>

              <div>
                <p class="text-gray-500 text-sm mb-1">Author</p>
                <p class="text-white font-medium">Jane Smith</p>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <div class="">
            <a href="#" class="text-white hover:text-gray-300 transition-colors font-medium">
              Read More
            </a>
          </div>
        </div>
      </article>
    </div>
  </section>
</x-layout>
