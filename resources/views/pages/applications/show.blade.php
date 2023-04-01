<x-dashboard-layout class="bg-gray-900 p-3">
    <section class="my-4 flex justify-between">
        <h1 class="text-4xl">{{$application->app_name}}</h1>
        <div>
            <form method="post" action="{{route('applications.destroy', $application)}}">
                @csrf
                @method('DELETE')
                <x-buttons.danger-button>
                    Delete
                </x-buttons.danger-button>
            </form>
        </div>
    </section>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <section class="grid md:grid-cols-2">
        <article class="px-4 flex flex-col gap-3">
            <x-cards.default-card class="w-full">
                <h2 class="text-2xl font-medium">Application information</h2>
                <div class="mb-3">
                    <x-forms.label>Server Key</x-forms.label>
                    <x-forms.input-field :value="$application->server_key" disabled/>
                </div>
                <div class="mb-3">
                    <x-forms.label>Client Key</x-forms.label>
                    <x-forms.input-field :value="$application->client_key" disabled/>
                </div>
                <div class="mb-3">
                    <x-forms.label>Host</x-forms.label>
                    <x-forms.input-field :value="$application->server->host" disabled/>
                </div>
            </x-cards.default-card>
            <x-cards.default-card>
                <livewire:channel-menu :channels="$application->channels->toArray()"/>

                <x-buttons.light.primary-button
                    class="mt-3"
                    x-data=""
                    x-on:click="$dispatch('open-modal', 'create-modal')"
                >Add Channel</x-buttons.light.primary-button>
                <livewire:create-channel-modal :application-id="$application->id">
                </livewire:create-channel-modal>

            </x-cards.default-card>
        </article>
        <article class="flex flex-col gap-3">
            <livewire:application-info :application="$application"/>
            {{--Active connections to this application--}}

            <livewire:active-connection-list :application="$application"/>
        </article>
    </section>
</x-dashboard-layout>
