<x-modal name="create-modal" :show="false">
    <form action="{{route('channels.store', $applicationId)}}"
          method="POST"
          class="p-3"
          wire:submit.prevent="createChannel"
    >
        <div class="mb-3">
            <h1 class="text-4xl font-medium">Add channel</h1>
        </div>
        <div class="mb-3">
            <x-forms.label for="name">Channel name</x-forms.label>
            <x-forms.input-field name="name" wire:model="channel.name" class="mb-2" placeholder=""/>
            <x-input-error :messages="$errors->get('channel.name')"></x-input-error>
        </div>
        <div class="mb-3">
            <x-buttons.primary-button>Add channel</x-buttons.primary-button>
        </div>
    </form>

</x-modal>
