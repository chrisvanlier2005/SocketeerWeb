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
                <span
                    class="text-transparent font-semibold bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 transition-all duration-200"
                    x-data="{
                        texts: ['easy', 'fun', 'simple', 'fast', 'powerful'],
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
                    easy
                </span>
            </h2>
        </header>
        <footer class="flex flex-row gap-4">
            <a href="{{route('dashboard')}}">
                <x-buttons.primary-button>Get started</x-buttons.primary-button>
            </a>
            <x-buttons.light.primary-button href="{{ route('dashboard') }}">
                Read the Docs
            </x-buttons.light.primary-button>
        </footer>
    </section>
    {{-- END HEADER SECTION --}}
    {{-- START FEATURES SECTION--}}
    <section id="features" class="bg-black px-12 py-24">
        <div class="max-w-7xl mx-auto">
            <header>
                <h2 class="text-5xl font-extrabold">Features & goodies</h2>
            </header>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 my-6  gap-3">
                <article class="
                h-64 rounded-xl p-3
                border border-gray-700
                bg-gradient-to-br from-pink-900/30 via-cyan-300/10 to-green-900
                transition-all duration-500
                bg-200% hover:bg-100% hover:shadow-green-900
                shadow-green-900/50 shadow-2xl text-gray-200
                ">
                    <div>
                        <svg class="w-24 text-white" viewBox="0 0 24 24" version="1.1" crosspilot="">
                            <g id="" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                <g id="ic_fluent_connector_24_regular" fill="currentColor" fill-rule="nonzero">
                                    <path
                                        d="M8.25,4 C8.62969577,4 8.94349096,4.28215388 8.99315338,4.64822944 L9,4.75 L9,7.52316788 L10.8742913,10.3383227 C10.9357705,10.4306635 10.975742,10.5350921 10.9918854,10.6439359 L11,10.7539673 L11,15.25 C11,15.6296958 10.7178461,15.943491 10.3517706,15.9931534 L10.25,16 L8.99630577,16 L8.99724473,19.2535536 C8.99724473,19.6677671 8.6614583,20.0035536 8.24724473,20.0035536 C7.86754897,20.0035536 7.55375377,19.7213997 7.50409135,19.3553241 L7.49724473,19.2535536 L7.49630577,16 L5.50130577,15.999 L5.5019993,19.2565979 C5.5019993,19.6708115 5.16621287,20.0065979 4.7519993,20.0065979 C4.37230354,20.0065979 4.05850834,19.7244441 4.00884592,19.3583685 L4.0019993,19.2565979 L4.00130577,15.999 L2.75230577,16 C2.37261,16 2.05881481,15.7178461 2.00915238,15.3517706 L2.00230577,15.25 L2.00230577,10.7539673 C2.00230577,10.6430326 2.02690751,10.5339555 2.07379043,10.4344086 L2.12801447,10.3383227 L4.00230577,7.52316788 L4.00230577,4.75 C4.00230577,4.33578644 4.33809221,4 4.75230577,4 C5.13200153,4 5.44579673,4.28215388 5.49545915,4.64822944 L5.50230577,4.75 L5.50230577,7.75 C5.50230577,7.86093471 5.47770403,7.97001183 5.4308211,8.06955865 L5.37659706,8.16564454 L3.50230577,10.9807994 L3.50230577,14.5 L9.5,14.5 L9.5,10.9807994 L7.62570871,8.16564454 C7.5642295,8.07330377 7.52425795,7.96887514 7.50811463,7.86003134 L7.5,7.75 L7.5,4.75 C7.5,4.33578644 7.83578644,4 8.25,4 Z M15.2545784,4.00139149 L19.75,4.00139149 C20.1296958,4.00139149 20.443491,4.28354537 20.4931534,4.64962093 L20.5,4.75139149 L20.4993058,8 L21.25,8 C21.6296958,8 21.943491,8.28215388 21.9931534,8.64822944 L22,8.75 L22,13.2460327 C22,13.3569674 21.9753983,13.4660445 21.9285153,13.5655914 L21.8742913,13.6616773 L20,16.4768321 L20,19.25 C20,19.6642136 19.6642136,20 19.25,20 C18.8703042,20 18.556509,19.7178461 18.5068466,19.3517706 L18.5,19.25 L18.5,16.25 C18.5,16.1390653 18.5246017,16.0299882 18.5714847,15.9304413 L18.6257087,15.8343555 L20.5,13.0192006 L20.5,9.5 L14.5023058,9.5 L14.5023058,13.0192006 L16.3765971,15.8343555 C16.4380763,15.9266962 16.4780478,16.0311249 16.4941911,16.1399687 L16.5023058,16.25 L16.5023058,19.25 C16.5023058,19.6642136 16.1665193,20 15.7523058,20 C15.37261,20 15.0588148,19.7178461 15.0091524,19.3517706 L15.0023058,19.25 L15.0023058,16.4768321 L13.1280145,13.6616773 C13.0665353,13.5693365 13.0265637,13.4649079 13.0104204,13.3560641 L13.0023058,13.2460327 L13.0023058,8.75 C13.0023058,8.37030423 13.2844596,8.05650904 13.6505352,8.00684662 L13.7523058,8 L14.5043058,8 L14.5045784,4.75139149 C14.5045784,4.37169572 14.7867323,4.05790053 15.1528079,4.00823811 L15.2545784,4.00139149 L19.75,4.00139149 L15.2545784,4.00139149 Z M19,5.50139149 L16.0045784,5.50139149 L16.0043058,8 L18.9993058,8 L19,5.50139149 Z"
                                        id="🎨-Color">

                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2 class="font-semibold text-3xl mt-3">Channels</h2>
                    <p class="text-gray-400">
                        Receive information from the websocket through channels.
                        An easy way to handle different events.
                    </p>
                </article>
                <article class="
                md:col-span-2
                h-64 rounded-xl p-3
                border border-gray-700
                bg-gradient-to-tr from-blue-900/30 via-cyan-300/10 to-pink-900
                transition-all duration-500
                bg-200% hover:bg-100% hover:shadow-pink-900
                shadow-pink-900/50 shadow-2xl text-gray-200
                ">
                    <div>
                        <svg class="w-24 text-white"
                             viewBox="0 0 24 24" fill="currentColor" crosspilot="">
                            <path
                                d="M20.485 2.515a.75.75 0 00-1.06 1.06A10.465 10.465 0 0122.5 11c0 2.9-1.174 5.523-3.075 7.424a.75.75 0 001.06 1.061A11.965 11.965 0 0024 11c0-3.314-1.344-6.315-3.515-8.485zm-15.91 1.06a.75.75 0 00-1.06-1.06A11.965 11.965 0 000 11c0 3.313 1.344 6.314 3.515 8.485a.75.75 0 001.06-1.06A10.465 10.465 0 011.5 11c0-2.9 1.174-5.524 3.075-7.425zM8.11 7.11a.75.75 0 00-1.06-1.06A6.98 6.98 0 005 11a6.98 6.98 0 002.05 4.95.75.75 0 001.06-1.061 5.48 5.48 0 01-1.61-3.89 5.48 5.48 0 011.61-3.888zm8.84-1.06a.75.75 0 10-1.06 1.06A5.48 5.48 0 0117.5 11a5.48 5.48 0 01-1.61 3.889.75.75 0 101.06 1.06A6.98 6.98 0 0019 11a6.98 6.98 0 00-2.05-4.949zM14 11a2 2 0 01-1.25 1.855v8.395a.75.75 0 01-1.5 0v-8.395A2 2 0 1114 11z"/>
                        </svg>
                    </div>
                    <h2 class="font-semibold text-3xl mt-3">Broadcasting</h2>
                    <p class="text-gray-400">
                        Send events to the websocket and broadcast them to all connected clients.
                        Specify the event channel and handle it in your frontend of your choice.
                    </p>
                </article>
            </div>
            <footer>

            </footer>
        </div>
    </section>
</x-app-layout>
