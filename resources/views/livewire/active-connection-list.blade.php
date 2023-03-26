<div wire:init="fetchData">
    <x-cards.default-card class="">
        <h1 class="text-2xl font-semibold">Active connection list</h1>
        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside h-64 overflow-y-auto">
            @foreach($activeConnections as $connection)
                <li class="text-gray-400">
                    {{$connection["Id"]}}
                </li>
            @endforeach

        </ul>

    </x-cards.default-card>
</div>
