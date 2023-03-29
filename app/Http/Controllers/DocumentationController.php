<?php

namespace App\Http\Controllers;

use App\Services\DocumentationService;

class DocumentationController extends Controller
{
    public function __construct(
        protected DocumentationService $service
    )
    {
    }
    public function index()
    {
        $integrations = $this->service->getIntegrationList();
        return view("pages.documentation.index", [
            "integrations" => $integrations
        ]);
    }
}
