<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Services\SocketeerService;
use Livewire\Component;

class ApplicationInfo extends Component
{
    public Application $application;
    public array|null $activeConnections = null;
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
        return view('livewire.application-info');
    }
}
