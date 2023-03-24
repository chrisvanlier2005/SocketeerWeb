<x-dashboard-layout>
    <section class="flex justify-between items-center">
        <h1 class="text-4xl my-6">My Apps</h1>
        <div>
            <x-buttons.primary-button>New Application</x-buttons.primary-button>
        </div>
    </section>
    @foreach($applications as $application)
        <x-cards.default-card>
            <img src="https://ui-avatars.com/api/?name={{$application->app_name}}" alt="{{$application->app_name}} application image" class="w-12 object-cover aspect-square rounded-md"/>
            <h2 class="text-xl mt-2">{{$application->app_name}}</h2>
        </x-cards.default-card>
    @endforeach
</x-dashboard-layout>
