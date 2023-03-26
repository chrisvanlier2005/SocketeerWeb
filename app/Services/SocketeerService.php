<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SocketeerService
{

    private string $host;
    private string $serverKey;
    private string $clientKey;
    public function __construct()
    {
        $this->host = config('services.socketeer.host');
        $this->serverKey = config('services.socketeer.server_key');
        $this->clientKey = config('services.socketeer.client_key');
    }

    public function setServerKey(string $serverKey): void
    {
        $this->serverKey = $serverKey;
    }

    public function apiUrl(string $path): string
    {
        return $this->host . 'api/' .  $path;
    }

    public function getActiveConnections(): array
    {
        try {
            $response = Http::get($this->apiUrl('connections'), [
                'key' => $this->serverKey,
            ]);
            if ($response->successful()) {
                return $response->json();
            }
        } catch (\Exception $e){
            Log::error($e->getMessage());
            return [];
        }
        return [];
    }
}
