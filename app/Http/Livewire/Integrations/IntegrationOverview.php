<?php

namespace App\Http\Livewire\Integrations;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class IntegrationOverview extends Component
{
    public array $integrations;
    public function getData(){
        $response = Http::get(route('api.integration.index'))->json();
        if (isset($response) && $response["success"]){
            $this->integrations = $response["data"];
        }
    }
    public function render()
    {
        return view('livewire.integrations.integration-overview');
    }
}
