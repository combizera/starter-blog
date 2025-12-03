<header class="bg-zinc-900 border-b border-zinc-600">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      {{-- LOGO --}}
      <x-header.logo />

      {{-- NAVIGATION --}}
      <nav class="hidden md:flex items-center space-x-8">
        <x-header.item
          title="Features"
          link="#features"
        />

        <x-header.item
          title="Pricing"
          link="#pricing"
        />

        <x-header.item
          title="Pricing"
          link="#pricing"
        />

        <x-btn.pri
          title="Get Started"
          link="#get-started"
        />
      </nav>

      {{-- MOBILE --}}
      <button class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
        <svg class="w-6 h-6 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>
</header>
