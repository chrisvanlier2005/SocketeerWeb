<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;


class DocumentationService
{
    /**
     * Retrieve all the integrations in the storage.
     */
    public function getIntegrationList() : array
    {
        $directoryList = Storage::allDirectories("integrations");

        return array_map(function ($dir) {
            $integration = [
                "name" => str_replace("integrations/", "", $dir),
                "meta" => Storage::json("{$dir}/meta.json")
            ];
            if (!isset($integration["meta"]["type"])){
                $integration["meta"]["type"] = "client-side";
            }
            return $integration;
        }, $directoryList);
    }


    /**
     * De integraties ophalen gecategoriseerd op type.
     */
    public function getCategorizedIntegrations() : array
    {
        $integrations = $this->getIntegrationList();
        $categories = [];
        foreach ($integrations as $integration){
            $categories[] = $integration["meta"]["type"];
        }

        $sortedIntegrations = [];

        foreach($categories as $category){
            $sortedIntegrations[$category] = [];
            foreach ($integrations as $integration){
                // toevoegen als het dezelfde 'category' is.
                if ($integration["meta"]["type"] === $category) $sortedIntegrations[$category][] = $integration;
            }
        }
        return $sortedIntegrations;
    }

    /**
     * Searches for the given integration.
     *
     */
    public function findIntegration(string $integration) : Collection
    {
        return collect([]);
    }
}
