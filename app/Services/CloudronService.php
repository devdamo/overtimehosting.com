<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class CloudronService
{
    protected $apiUrl;
    protected $authToken;
    protected $client;

    public function __construct()
    {
        $this->apiUrl = 'https://my.overtimehosting.com/api/v1'; // Your Cloudron instance URL
        $this->authToken = 'bdc0b5f6dc2e79adab3a4e2f4b15bf9c18391e50d725bbc168e4c2c8e3ac7ea6'; // Your API token
        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->authToken,
                'Accept' => 'application/json',
            ],
        ]);
    }

    /**
     * Fetch all installed apps on Cloudron using Guzzle.
     */
    public function getInstalledApps()
    {
        try {
            $response = $this->client->request('GET', '/apps');
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            // Log the response status and body for debugging
            \Log::info('Cloudron API Response Status:', ['status' => $statusCode]);
            \Log::info('Cloudron API Response Body:', ['body' => $body]);

            if ($statusCode === 200) {
                $apps = json_decode($body, true);

                // Log the parsed JSON response
                \Log::info('Parsed Apps Data:', ['apps' => $apps]);

                return $apps;
            } else {
                throw new \Exception('Failed to fetch apps: ' . $body);
            }
        } catch (RequestException $e) {
            \Log::error('CloudronService Request Error: ' . $e->getMessage());
            return [];
        } catch (\Exception $e) {
            \Log::error('CloudronService Error: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Create an SSO link using the Cloudron API and Guzzle.
     */
    public function createSsoLink($username)
    {
        try {
            $response = $this->client->post('/users/' . $username . '/sso');
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            if ($statusCode === 200) {
                $data = json_decode($body, true);
                return $data['loginUrl'] ?? null;
            } else {
                throw new \Exception('Failed to create SSO link: ' . $body);
            }
        } catch (RequestException $e) {
            \Log::error('CloudronService Request Error: ' . $e->getMessage());
            return null;
        } catch (\Exception $e) {
            \Log::error('CloudronService Error: ' . $e->getMessage());
            return null;
        }
    }
}
