<?php

namespace App\Http\Livewire;

use App\Models\Channel;
use Livewire\Component;

class CreateChannelModal extends Component
{
    public array $channel = [
        "name" => "",
    ];
    public int $applicationId;

    protected $rules = [
        "channel.name" => "required"
    ];

    protected $messages = [
        "channel.name.required" => "this field is required"
    ];

    public function updated($key)
    {
        $this->validateOnly($key);
    }

    public function createChannel()
    {
        $this->validate();
        $channel = Channel::create([
            "name"           => $this->channel["name"],
            "application_id" => $this->applicationId
        ]);
        $this->emit("channel-created", $channel->toArray());
        $this->dispatchBrowserEvent("close-modal", "create-modal");
    }

    public function render()
    {
        return view('livewire.create-channel-modal');
    }
}
