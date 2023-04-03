<?php

namespace App\Http\Controllers;

use App\Services\DocumentationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DocumentationController extends Controller
{
    public function __construct(
        protected DocumentationService $service,
        protected MarkdownRenderer     $markdownRenderer
    )
    {
    }

    public function index()
    {
        $categorizedIntegrations = $this->service->getCategorizedIntegrations();
        $markdown = Storage::get("integrations/Index.md");
        $html = $this->markdownRenderer->toHtml($markdown);
        return view("pages.documentation.index", compact("categorizedIntegrations", "html"));
    }

    public function showIntegration(Request $request, string $integrationName)
    {
        try {
            $list = $this->service->getChapterList($integrationName);
            $integration = $this->service->findIntegration($integrationName);
        } catch (HttpException $e) {
            abort($e->getStatusCode(), $e->getMessage());
        }
        $html = "";
        $selectedChapter = $request->get("chapter");
        if (!is_null($selectedChapter)) {
            $markdown = $this->service->getChapterMarkdown($integrationName, $selectedChapter);
            $html = $this->markdownRenderer->toHtml($markdown);
        }

        return view("pages.documentation.integration", compact("integration", "list", "html"));
    }
}
