<x-app-layout>
    {{-- START HEADER SECTION --}}
    <section class="flex items-center justify-center h-[calc(100vh-5rem)] flex-col
    hero-stars
    hero-gradient
    " id="home"
    >
       {{-- <div class="hero-explosion w-full h-full absolute top-0 left-0 z-[-1]"></div>--}}
        <header class="mb-5 flex flex-col items-center">
           {{-- <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
                <span class="text-xs bg-gradient-to-br from-green-500 to-blue-600 saturate-200 rounded-full text-white px-4 py-1.5 mr-3">Release!</span> <span class="text-sm font-medium">Socketeer 1.0 has been released</span>
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </a>--}}
            <h1 class="text-7xl font-semibold">Socketeer</h1>
            <h2 class="text-5xl font-medium">
                WebSockets made
                <span class="text-transparent font-semibold bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 transition-all duration-200"
                      x-data="{
                        texts: ['easy', 'fun', 'simple', 'fast', 'scalable'],
                        index: 0,

                        start() {
                          setInterval(() => {
                            this.index = (this.index + 1) % this.texts.length
                            // fade out
                            this.$el.classList.add('opacity-0')
                            setTimeout(() => {
                              // fade in
                              this.$el.classList.remove('opacity-0')
                              this.$el.innerText = this.texts[this.index]
                            }, 500)
                          }, 2000)
                        }
                      }"
                        x-init="start()"

                >
                    Easy
                </span>
            </h2>
        </header>
        <footer class="flex flex-row gap-4">
            <x-buttons.primary-button>Get started</x-buttons.primary-button>
            <x-buttons.light.primary-button href="{{ route('dashboard') }}">
                Read the Docs
            </x-buttons.light.primary-button>
        </footer>
    </section>
    {{-- END HEADER SECTION --}}
    {{-- START FEATURES SECTION--}}
    <section id="features" class="bg-black px-12 py-24">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-5xl">Features & goodies</h2>
        </div>
    </section>
</x-app-layout>
