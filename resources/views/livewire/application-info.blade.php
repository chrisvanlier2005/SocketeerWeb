<div wire:init="fetchData">
    <x-cards.default-card>
        <h1 class="text-2xl font-semibold">{{$application->app_name}}</h1>
        @isset($activeConnections)
            Active Connections: {{ count($activeConnections) }}
        @else
            <span class="text-gray-600 bg-gray-600">fetching from remote...</span>
        @endisset

    </x-cards.default-card>
</div>
