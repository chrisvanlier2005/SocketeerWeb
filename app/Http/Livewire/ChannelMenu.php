<?php

namespace App\Http\Livewire;

use App\Models\Channel;
use Livewire\Component;

class ChannelMenu extends Component
{
    public array $channels = [];

    protected $listeners = [
        "channel-created" => "addChannel"
    ];

    public function addChannel($channel)
    {
        $this->channels[] = $channel;

    }

    public function removeChannel(int $id){
        $this->channels = array_filter($this->channels, function($channel) use ($id){
            return $channel["id"] !== $id;
        });
        Channel::where("id", $id)->delete();
    }
    public function render()
    {
        return view('livewire.channel-menu');
    }
}
