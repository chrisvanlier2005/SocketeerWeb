<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;


class DocumentationService
{
    public function getIntegrationList()
    {
        $directoryList = Storage::allDirectories("integrations");

        $directoryList = array_map(function ($dir) {
            $integration = [
                "name" => str_replace("integrations/", "", $dir),
                "meta" => Storage::json("{$dir}/meta.json")
            ];
            return $integration;
        }, $directoryList);

        return $directoryList;
    }
}
