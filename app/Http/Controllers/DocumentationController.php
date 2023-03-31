<?php

namespace App\Http\Controllers;

use App\Services\DocumentationService;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DocumentationController extends Controller
{
    public function __construct(
        protected DocumentationService $service
    )
    {
    }

    public function index()
    {
        $categorizedIntegrations = $this->service->getCategorizedIntegrations();
        return view("pages.documentation.index", compact("categorizedIntegrations"));
    }

    public function showIntegration(string $integration)
    {
        try {
            $integration = $this->service->findIntegration($integration);
        } catch (HttpException $e) {
            abort($e->getStatusCode(), $e->getMessage());
        }

        return view("pages.documentation.integration");
    }

    public function showChapter(string $integration, string $chapter)
    {

    }
}
