<?php

namespace App\Http\Livewire\Integrations;

use App\Services\DocumentationService;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class IntegrationOverview extends Component
{
    public array $integrations;
    private DocumentationService $documentationService;

    public function render()
    {
        return view('livewire.integrations.integration-overview');
    }
    public function boot(DocumentationService $documentationService){
        $this->documentationService = $documentationService;
    }
    public function getData(){
        $this->integrations = $this->documentationService->getIntegrationList();
    }
}
