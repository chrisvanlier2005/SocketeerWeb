<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Services\SocketeerService;
use Livewire\Component;

class ActiveConnectionList extends Component
{
    public Application $application;
    public array $activeConnections = [];
    private SocketeerService $socketeerService;
    public function boot(SocketeerService $socketeerService)
    {
        $this->socketeerService = $socketeerService;
    }

    public function fetchData(){
        $this->socketeerService->setServerKey($this->application->server_key);
        $this->activeConnections = $this->socketeerService->getActiveConnections();
    }

    public function render()
    {
        return view('livewire.active-connection-list');
    }
}
