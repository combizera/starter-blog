<x-layout title="The Rise of Artificial Intelligence in Healthcare">
  <div class="bg-zinc-80 min-h-screen text-zinc-200 font-sans">

    {{-- Hero Section --}}
    <div class="relative w-full h-[500px] overflow-hidden">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1600&q=80"
             alt="AI in Healthcare"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-zinc-950/80 bg-gradient-to-t from-zinc-950 via-zinc-950/60 to-transparent"></div>
      </div>

      <div class="relative h-full max-w-7xl mx-auto px-6 flex flex-col justify-end pb-20">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white max-w-4xl tracking-tight">
          The Rise of Artificial Intelligence in Healthcare
        </h1>
      </div>
    </div>

    {{-- Main Content --}}
    <div class="max-w-7xl mx-auto px-6 py-12">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

        {{-- Left Column: Article Content --}}
        <div class="lg:col-span-8">

          {{-- RESUME --}}
          @if(isset($resume))
            <section class="mb-20">
              <h2 class="text-xl font-semibold text-white mb-4">
                Introduction
              </h2>
              <p class="text-zinc-400 leading-relaxed text-lg">
                {{ $post->resume }}
              </p>
            </section>
          @endif

          <div class="w-full h-px bg-zinc-800"></div>

          {{-- THE CONTENT --}}
          <section>
            <h2 class="text-2xl font-semibold text-white mb-6">Artificial Intelligence (AI)</h2>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
          </section>

          <section>
            <h2 class="text-2xl font-semibold text-white mb-6">Artificial Intelligence (AI)</h2>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
          </section>

          <section>
            <h2 class="text-2xl font-semibold text-white mb-6">Artificial Intelligence (AI)</h2>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
            <p class="text-zinc-400 leading-relaxed text-lg mb-6">
              Artificial Intelligence (AI) has permeated virtually every aspect of our lives, and healthcare is no exception. The integration of AI in healthcare is ushering in a new era of medical practice, where machines complement the capabilities of healthcare professionals, ultimately improving patient outcomes and the efficiency of the healthcare system. In this blog post, we will delve into the diverse applications of AI in healthcare, from diagnostic imaging to personalized treatment plans, and address the ethical considerations surrounding this revolutionary technology.
            </p>
          </section>
        </div>

        {{-- Right Column: Sidebar --}}
        <div class="lg:col-span-4 space-y-12 sticky top-5 h-fit">

        {{-- Metadata Grid --}}
        <div class="grid grid-cols-2 gap-y-8 gap-x-4">
          <div>
            <div class="text-sm text-zinc-500 mb-1">Publication Date</div>
            <div class="text-zinc-200 font-medium">October 15, 2023</div>
          </div>
          <div>
            <div class="text-sm text-zinc-500 mb-1">Category</div>
            <div class="text-zinc-200 font-medium">Healthcare</div>
          </div>
          <div>
            <div class="text-sm text-zinc-500 mb-1">Reading Time</div>
            <div class="text-zinc-200 font-medium">10 Min</div>
          </div>
          <div>
            <div class="text-sm text-zinc-500 mb-1">Author Name</div>
            <div class="text-zinc-200 font-medium">Dr. Emily Walker</div>
          </div>
        </div>

        {{-- Table of Contents --}}
        <div class="bg-zinc-900/50 rounded-2xl p-6 border border-zinc-600/50">
          <h3 class="text-zinc-400 text-sm font-medium uppercase tracking-wider mb-4">Table of Contents</h3>
          <ul class="space-y-4">
            <li>
              <a href="#" class="flex items-center text-zinc-300 hover:text-white transition-colors group">
                <span class="w-1.5 h-1.5 rounded-full bg-zinc-600 group-hover:bg-white mr-3 transition-colors"></span>
                Introduction
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center text-zinc-300 hover:text-white transition-colors group">
                <span class="w-1.5 h-1.5 rounded-full bg-zinc-600 group-hover:bg-white mr-3 transition-colors"></span>
                AI in Diagnostic Imaging
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center text-zinc-300 hover:text-white transition-colors group">
                <span class="w-1.5 h-1.5 rounded-full bg-zinc-600 group-hover:bg-white mr-3 transition-colors"></span>
                Predictive Analytics and Disease Prevention
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center text-zinc-300 hover:text-white transition-colors group">
                <span class="w-1.5 h-1.5 rounded-full bg-zinc-600 group-hover:bg-white mr-3 transition-colors"></span>
                Personalized Treatment Plans
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center text-zinc-300 hover:text-white transition-colors group">
                <span class="w-1.5 h-1.5 rounded-full bg-zinc-600 group-hover:bg-white mr-3 transition-colors"></span>
                Drug Discovery and Research
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</x-layout>
