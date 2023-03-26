<x-dashboard-layout>
    <section>
        <h1 class="font-extrabold text-3xl md:text-5xl font-semibold">
            Let's build something
            <span
                class="font-extraboldd bg-clip-text text-transparent bg-gradient-to-br from-blue-500 to-green-500 saturate-150">
                    amazing
                </span>
        </h1>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    </section>
    <section>
        <form action="{{route("applications.store")}}" method="post" class="flex flex-col gap-3">
            @csrf
            <div>
                <x-forms.label for="app_name">Application name</x-forms.label>
                <x-forms.input-field name="app_name" placeholder="How about something fancy?" required/>
                <x-input-error :messages="$errors->get('app_name')" class="mt-3"/>
            </div>

            <div>
                <x-forms.label for="server">
                    Select server
                </x-forms.label>
                <select id="server" name="server" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($servers as $server)
                        <option value="{{$server->id}}">{{$server->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>

                <x-buttons.secondary-button>Build it.</x-buttons.secondary-button>
            </div>
        </form>
    </section>
</x-dashboard-layout>
