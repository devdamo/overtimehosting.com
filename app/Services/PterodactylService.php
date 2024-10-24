<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class PterodactylService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = config('services.pterodactyl.api_url');
        $this->apiKey = config('services.pterodactyl.api_key');
    }

    /**
     * Get all available nodes.
     */
    public function getNodes()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Accept' => 'application/json',
        ])->get($this->apiUrl . '/api/application/nodes');

        if ($response->successful()) {
            return $response->json()['data'];
        }

        return [];
    }

    /**
     * Get all available eggs.
     */
    public function getEggs($nestId)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Accept' => 'application/json',
        ])->get($this->apiUrl . "/api/application/nests/{$nestId}/eggs");

        if ($response->successful()) {
            return $response->json()['data'];
        }

        return [];
    }

    /**
     * Get all servers.
     */
    public function getServers()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Accept' => 'application/json',
        ])->get($this->apiUrl . '/api/application/servers');

        if ($response->successful()) {
            return $response->json()['data'];
        }

        return [];
    }

    /**
     * Create a new server.
     */
    public function createServer($data)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->apiUrl . '/api/application/servers', $data);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Failed to create server: ' . $response->body());
    }
}
