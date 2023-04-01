<x-dashboard-layout>
    <x-slot:navigation>
        <nav class="sm:ml-64
        p-6
        relative
        flex gap-12
        inner-border-bottom-1
        items-center bg-gray-900
        ">
            {{-- HEADER INTRO SECTION --}}
            <section class="relative z-1 flex gap-12 items-center">
                <img src="{{asset(auth()->user()->avatar)}}" class="w-16 rounded-full"
                     alt="{{auth()->user()->name}}'s avatar" loading="lazy"/>
                <div class="flex flex-col gap-0">
                    <h3 class="w-fit text-xl text-gray-500 font-semibold leading-4">Welcome back,</h3>
                    <h2 class="w-fit text-4xl font-extrabold">{{auth()->user()->name}}</h2>
                </div>
            </section>
            {{-- END HEADER INTRO SECTION --}}

            {{-- BACKGROUND RADIAL GRADIENT --}}
            <div class="absolute top-0 left-0 w-full h-full radial-gradient-1"></div>
            {{-- END BACKGROUND RADIAL GRADIENT --}}
        </nav>
    </x-slot:navigation>
    <section
        class="
        h-screen
        hero-stars
        hero-gradient
        w-full
        "
    >

        <section class="md:h-[30rem] grid md:grid-cols-5 md:grid-rows-2 w-full gap-5 p-4">
            <x-cards.card class="md:col-span-3 row-span-2 group shadow-xl">
                <div>
                    <x-cards.vertical-border class="
                h-1/2 left-0 top-36
                opacity-0
                group-hover:opacity-100 group-hover:top-0
                transition-all duration-300"/>
                    <x-cards.vertical-border class="
                h-1/2 right-0 bottom-36
                opacity-0
                group-hover:opacity-100 group-hover:bottom-0
                transition-all duration-300"></x-cards.vertical-border>
                </div>
                <header class="flex justify-between w-full">
                    <h2 class="text-2xl font-semibold">Application Activity</h2>
                    <p><span class="font-extrabold">{{$applications_count}}</span> <span class="text-gray-400">Apps total</span></p>
                </header>
                <x-seperator class="my-2"/>
                <article class="w-full h-[87%] rounded-2xl p-4 bg-gray-900">
                    @isset($application_activity)
                    @else
                        <p class="text-gray-400">No recorded application activity</p>
                    @endisset
                </article>
            </x-cards.card>
            <x-cards.card class="md:col-span-2 group">
                <div>
                    <x-cards.vertical-border class="
                h-1/2 left-0 top-36
                opacity-0
                group-hover:opacity-100 group-hover:top-0
                transition-all duration-300"/>
                    <x-cards.vertical-border class="
                h-1/2 right-0 bottom-36
                opacity-0
                group-hover:opacity-100 group-hover:bottom-0
                transition-all duration-300"></x-cards.vertical-border>
                </div>
                Hallo wereld
            </x-cards.card>
            <x-cards.card class="md:col-span-2 group">
                <div>
                    <x-cards.vertical-border class="
                h-1/2 left-0 top-36
                opacity-0
                group-hover:opacity-100 group-hover:top-0
                transition-all duration-300"/>
                    <x-cards.vertical-border class="
                h-1/2 right-0 bottom-36
                opacity-0
                group-hover:opacity-100 group-hover:bottom-0
                transition-all duration-300"></x-cards.vertical-border>
                </div>
                Hallo wereld
            </x-cards.card>
        </section>
        <section></section>
    </section>
</x-dashboard-layout>
