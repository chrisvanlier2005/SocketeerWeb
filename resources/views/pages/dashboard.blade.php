<x-dashboard-layout>
    <section class="my-4">
        <h2 class="text-xl">Hello {{auth()->user()->name}}! 👋</h2>
        <p class="text-gray-400">Lets build the next big thing!</p>
    </section>
    <x-seperator/>
    <section>
        <header class="mb-12">
            <h1 class="text-3xl font-semibold">Overview</h1>
        </header>
        <x-cards.default-card>
            <h2 class="mb-2 text-2xl font-bold text-white tracking-light">{{$applications_count}} Applications</h2>
            <p class="text-gray-400">You currenly have {{$applications_count}} active apps.</p>
        </x-cards.default-card>
        @if($latestApp)
            <livewire:application-info :application="$latestApp"></livewire:application-info>
        @endif

    </section>
</x-dashboard-layout>
