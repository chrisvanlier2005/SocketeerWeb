<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;

class ApplicationInfo extends Component
{
    public Application $application;
    public $activeConnections = [];
    public function fetchData(){

    }
    public function render()
    {
        return view('livewire.application-info');
    }
}
