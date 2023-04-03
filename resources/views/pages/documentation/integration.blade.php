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
            <div class="flex flex-col gap-4 ">
                <ul>
                    <x-side-navigation-item :href="route('documentation.index')">
                        <x-slot:text>
                            <span class="flex gap-3 text-xs items-center">
                            <svg class="w-3" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg> Back to documentation
                            </span>
                        </x-slot:text>
                    </x-side-navigation-item>
                </ul>

                <h3 class="font-bold text-xl">{{$integration["name"]}}</h3>
                {{-- CATEGORIES --}}
                {{-- CATEGORY ITEMS --}}
                <ul class="space-y-2">
                    @foreach($list as $key => $chapterOrFolder)
                        @if(is_string($chapterOrFolder))
                            <x-side-navigation-item href="{{route('documentation.show-integration', [
                            'integration' => $integration['name'],
                                'chapter' => Str::replace('.md', '', $key)
                            ])}}">
                                <x-slot:text>
                                    {{ Str::replace(".md", "", $key) }}
                                </x-slot:text>
                            </x-side-navigation-item>
                        @endif
                    @endforeach
                </ul>

                {{-- END CATEGORY--}}
            </div>
        </div>
        {{-- END SIDEBAR CONTENT --}}
    </aside>
    {{-- END SIDEBAR CONTAINER --}}

    {{-- MAIN CONTENT --}}
    <div class="sm:ml-64 p-4 bg-gray-900 min-h-screen w-full ">
        <section class=" prose prose-invert p-3 md:max-w-[calc(100%-16rem)]" >
            {!! $html ?? "" !!}
        </section>
    </div>
</x-documentation-layout>
