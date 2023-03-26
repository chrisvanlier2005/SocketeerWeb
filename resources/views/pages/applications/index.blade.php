<x-dashboard-layout>
    <section class="flex justify-between items-center">
        <h1 class="text-4xl my-6">My Apps</h1>
        <div>
            <a href="{{route('applications.create')}}">
                <x-buttons.primary-button>New Application</x-buttons.primary-button>
            </a>
        </div>
    </section>
    <section class="grid md:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-6 gap-2">
        @foreach($applications as $application)
            <a href="{{route('applications.show', $application)}}">
                <x-cards.default-card>
                    <img src="https://ui-avatars.com/api/?name={{$application->app_name}}" alt="{{$application->app_name}} application image" class="w-12 object-cover aspect-square rounded-md"/>
                    <h2 class="text-xl mt-2">{{$application->app_name}}</h2>
                </x-cards.default-card>
            </a>
        @endforeach
    </section>
</x-dashboard-layout>
