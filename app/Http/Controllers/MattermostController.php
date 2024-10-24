<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class MattermostController extends Controller
{
    private $mattermostApiUrl = 'https://overtimehosting-mattermost.xrdxno.easypanel.host/plugins/playbooks/api/v0';
    private $authToken = 'aa3k1whgkincu8qoycj6kye1sw';

    // Fetch playbook runs (onboarding status)
    public function listPlaybookRuns()
    {
        try {
            // Use the Mattermost Playbooks API to fetch playbook runs
            $response = Http::withToken($this->authToken)
                ->get($this->mattermostApiUrl . '/runs');

            if ($response->successful()) {
                $playbookRuns = $response->json();
                return view('admin.mattermost.playbooks.index', compact('playbookRuns'));
            } else {
                return back()->with('error', 'Failed to fetch playbook runs: ' . $response->body());
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Error occurred: ' . $e->getMessage());
        }
    }


    protected $client;
    protected $apiUrl;
    protected $accessToken;

    public function getChannels()
    {
        try {
            $client = new Client();
            $response = $client->get('https://overtimehosting-mattermost.xrdxno.easypanel.host/api/v4/channels', [
                'headers' => [
                    'Authorization' => 'Bearer aa3k1whgkincu8qoycj6kye1sw', // Replace with your token
                ],
            ]);

            $channels = json_decode($response->getBody()->getContents(), true);
            return response()->json(['success' => true, 'channels' => $channels]);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = env('MATTERMOST_API_URL');
        $this->accessToken = env('MATTERMOST_ACCESS_TOKEN');
    }

    public function index()
    {
        // Return the admin view for interacting with Mattermost
        return view('admin.mattermost.index');
    }

    public function sendMessage(Request $request)
    {
        $channelId = $request->input('channel_id');
        $message = $request->input('message');

        try {
            $client = new Client();
            $response = $client->post('https://overtimehosting-mattermost.xrdxno.easypanel.host/api/v4/posts', [
                'headers' => [
                    'Authorization' => 'Bearer aa3k1whgkincu8qoycj6kye1sw',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'channel_id' => $channelId,
                    'message' => $message,
                ],
            ]);

            if ($response->getStatusCode() === 201) {
                return response()->json(['success' => true, 'message' => 'Message sent successfully']);
            } else {
                return response()->json(['success' => false, 'error' => 'Failed to send message']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }


}
