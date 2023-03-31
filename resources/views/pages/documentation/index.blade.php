<x-documentation-layout>
    <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button"
            class="inline-flex h-fit items-center p-2 mt-2 ml-3
        text-sm text-gray-500 rounded-lg md:hidden
        hover:bg-gray-100 focus:outline-none focus:ring-2
         focus:ring-gray-200 dark:text-gray-400
         dark:hover:bg-gray-900 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    {{-- SIDEBAR CONTAINER --}}
    <aside id="sidebar"
           class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
           aria-label="Sidebar">
        {{--SIDEBAR CONTENT --}}
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col gap-4 bg-gray-800/50 p-3 rounded-xl border-emerald-500/50 border">
                <h3 class="font-bold text-xl">Official integrations</h3>
                {{-- CATEGORIES --}}
                @foreach($categorizedIntegrations as $category => $integrations)
                    {{-- CATEGORY ITEMS --}}
                    <ul class="space-y-2">
                        <h4 class="capitalize inter font-medium text-lg">{{Str::replace('-', ' ',$category)}}</h4>
                        @foreach($integrations as $integration)
                            <x-side-navigation-item href="{{route('documentation.show-integration')}}">
                                <x-slot:logo>
                                    <img src="{{$integration["meta"]["image"]}}" alt="{{$integration["name"]}} logo"
                                         class="w-7 rounded-sm p-1">
                                </x-slot:logo>
                                <x-slot:text>
                                    <span>{{$integration["name"]}}</span>
                                </x-slot:text>
                            </x-side-navigation-item>
                        @endforeach
                    </ul>
                    {{-- END CATEGORY ITEMS --}}
                    @if($loop->remaining != 0)
                        <x-seperator class="my-3"/>
                    @endif
                @endforeach
                {{-- END CATEGORY--}}
            </div>
        </div>
        {{-- END SIDEBAR CONTENT --}}
    </aside>
    {{-- END SIDEBAR CONTAINER --}}

    {{-- MAIN CONTENT --}}
    <div class="sm:ml-64 p-4">
        <section class="flex">
            <h1>Test</h1>
        </section>
    </div>
</x-documentation-layout>
