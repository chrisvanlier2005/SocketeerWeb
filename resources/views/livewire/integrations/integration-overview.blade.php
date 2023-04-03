<div wire:init="getData" class="flex flex-col gap-2">
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    @isset($integrations)
        <h2 class="text-4xl font-medium">Server Side Integrations</h2>
        <p class="text-gray-400">
            Want to integrate Socketeer's features into your server? We have a few integrations that you can use to get started.
        </p>
        <section class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 my-6 gap-3">
            @foreach($integrations as $integration)
                @if($integration["meta"]["type"] != 'server-side')
                    @continue
                @endif
                <a href="{{route('documentation.show-integration', $integration["name"])}}">
                    <div
                        class="w-full p-6 aspect-square rounded-xl border border-gray-800 hover:bg-gray-800 transition-all duration-200 cursor-pointer">
                        <img src="{{asset($integration["meta"]["image"])}}" class="w-fit max-w-full h-1/2 object-cover" alt="logo language"/>
                        <div class="mt-6">
                            <h2 class="text-4xl font-extrabold capitalize">{{$integration["name"]}}</h2>
                            <p class="text-gray-400">{{$integration["meta"]["description"]}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </section>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <h2 class="text-5xl">Client Side Integrations</h2>
        <p class="text-gray-400">
            Client side websockets are hard, but with our client side integrations you can get started in no time.
        </p>
        <section class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 my-6 gap-3">
            @foreach($integrations as $integration)
                @if($integration["meta"]["type"] != 'client-side')
                    @continue
                @endif
            <a href="{{route("documentation.show-integration", $integration["name"])}}">
                <div
                    class="w-full p-6 aspect-square rounded-xl border border-gray-800 hover:bg-gray-800 transition-all duration-200 cursor-pointer">
                    <img src="{{asset($integration["meta"]["image"])}}" class="w-fit max-w-full h-1/2 object-cover"/>
                    <div class="mt-6">
                        <h2 class="text-4xl font-extrabold capitalize">{{$integration["name"]}}</h2>
                        <p class="text-gray-400">{{$integration["meta"]["description"]}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </section>

    @else
        <section class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-12 h-96 gap-3">
            @for($i = 0; $i < 3; $i++)
                <div class="w-full h-full rounded-xl border border-gray-800"></div>
            @endfor
        </section>

    @endisset
</div>
