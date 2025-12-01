<header class="bg-zinc-900 border-b border-zinc-600">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <a href="{{ route('site.index') }}" class="flex gap-2 items-center hover:opacity-70 transition-opacity">
        <img src="{{ Vite::image('logo.png') }}" alt="" class="max-h-[40px]">
        <p>
          {{ config('app.name') }}
        </p>
      </a>

      <!-- Navigation -->
      <nav class="hidden md:flex items-center space-x-8">
        <a href="#" class="text-zinc-400 hover:text-gray-900 font-medium transition-colors">
          Features
        </a>
        <a href="#" class="text-zinc-400 hover:text-gray-900 font-medium transition-colors">
          Pricing
        </a>
        <a href="#" class="text-zinc-400 hover:text-gray-900 font-medium transition-colors">
          About
        </a>
        <a href="#" class="text-zinc-400 hover:text-gray-900 font-medium transition-colors">
          Sign In
        </a>
        <a href="#" class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition-colors font-medium">
          Get Started
        </a>
      </nav>

      <!-- Mobile menu button -->
      <button class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
        <svg class="w-6 h-6 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>
</header>
