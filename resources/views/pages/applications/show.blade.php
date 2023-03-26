<x-dashboard-layout>
    <section class="my-4">
        <h1 class="text-4xl">{{$application->app_name}}</h1>
    </section>
    <section class="grid md:grid-cols-2">
        <article class="px-4">
            <x-cards.default-card class="w-full">
                <div class="mb-3">
                    <x-forms.label>Server Key</x-forms.label>
                    <x-forms.input-field :value="$application->server_key" disabled/>
                </div>
                <div>
                    <x-forms.label>Client Key</x-forms.label>
                    <x-forms.input-field :value="$application->client_key" disabled/>
                </div>
            </x-cards.default-card>
        </article>
        <article class="flex flex-col gap-3">
            <livewire:application-info :application="$application"/>
            <livewire:active-connection-list :application="$application"/>
        </article>
    </section>
    {{--Active connections to this application--}}
</x-dashboard-layout>
