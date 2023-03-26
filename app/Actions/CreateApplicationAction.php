<?php

namespace App\Actions;

use App\Models\Application;
use Str;

class CreateApplicationAction
{
    public function handle(array $validated)
    {
        $serverKey = Str::random(70);
        $clientKey = Str::random(70);

        Application::create([
            "app_name" => $validated["app_name"],
            "server_key" => $serverKey,
            "client_key" => $clientKey,
            "server_id" => $validated["server"],
            "user_id" => auth()->id(),
        ]);
    }
}
