<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\HttpException;


class DocumentationService
{
    /**
     * De integraties ophalen gecategoriseerd op type.
     */
    public function getCategorizedIntegrations(): array
    {
        $integrations = $this->getIntegrationList();
        $categories = [];
        foreach ($integrations as $integration) {
            $categories[] = $integration["meta"]["type"];
        }

        $sortedIntegrations = [];

        foreach ($categories as $category) {
            $sortedIntegrations[$category] = [];
            foreach ($integrations as $integration) {
                // toevoegen als het dezelfde 'category' is.
                if ($integration["meta"]["type"] === $category) $sortedIntegrations[$category][] = $integration;
            }
        }
        return $sortedIntegrations;
    }

    /**
     * Retrieve all the integrations in the storage.
     */
    public function getIntegrationList(): array
    {
        $directoryList = Storage::allDirectories("integrations");

        foreach ($directoryList as $key => $dir){
            // check if there is more than 1 /
            if (substr_count($dir, "/") > 1) {
                unset($directoryList[$key]);
            }
        }

        return array_map(function ($dir) {
            $integration = [
                "name" => str_replace("integrations/", "", $dir),
                "meta" => Storage::json("{$dir}/meta.json")
            ];
            if (!isset($integration["meta"]["type"])) {
                $integration["meta"]["type"] = "client-side";
            }
            return $integration;
        }, $directoryList);
    }

    /**
     * Searches for the given integration.
     *
     */
    public function findIntegration(string $integration): array
    {
        $path = "integrations/{$integration}";
        if (!Storage::directoryExists($path)){
            throw new HttpException(404, "Integration does not exist.");
        }
        return [
            "name" => $integration,
            "meta" => Storage::json("{$path}/meta.json")
        ];
    }

    public function getChapterList(string $integration): Collection
    {
        $path = "integrations/{$integration}";
        if (!Storage::directoryExists($path)) {
            throw new HttpException(404, "Integration does not exist.");
        }
        // all the chapters
        $files = Storage::allFiles($path);
        $files = array_map(function ($file) use ($integration) {
            return str_replace("integrations/{$integration}/", "", $file);
        }, $files);
        $nestedArray = [];
        foreach ($files as $file) {
            $path = explode('/', $file);
            $current = &$nestedArray;
            foreach ($path as $directory) {
                if (!array_key_exists($directory, $current)) {
                    $current[$directory] = [];
                    if (str_ends_with($directory, ".md")) $current[$directory] = "";
                }
                $current = &$current[$directory];
            }
        }

        return collect($nestedArray);
    }

    public function getChapterMarkdown(string $integrationName, mixed $selectedChapter)
    {
        $path = "integrations/{$integrationName}/{$selectedChapter}.md";
        if (!Storage::exists($path)) {
            throw new HttpException(404, "Chapter does not exist.");
        }
        return Storage::get($path);
    }
}
