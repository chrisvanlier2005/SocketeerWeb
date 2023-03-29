<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DocumentationService;
use Exception;

class IntegrationController extends Controller
{
    //
    public function __construct(
        private readonly DocumentationService $service
    )
    {
    }

    public function index()
    {
        $integrations = $this->service->getIntegrationList();
        return response()->json([
            "success" => true,
            "data" => $integrations
        ]);
    }

    public function show($name)
    {
        try {
            $integration = $this->service->getIntegration();
        } catch (Exception $exception) {
            return response()->json([
                "success"  => false,
                "messages" => [
                    $exception->getMessage()
                ]
            ]);
        }
        return response()->json();
    }
}
