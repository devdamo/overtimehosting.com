<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CloudronService;

class CloudronController extends Controller
{
    protected $cloudronService;

    public function __construct(CloudronService $cloudronService)
    {
        $this->cloudronService = $cloudronService;
    }

    /**
     * Show the Cloudron Apps page.
     */
    public function showApps()
    {
        try {
            // Fetch installed apps using the service
            $apps = $this->cloudronService->getInstalledApps();

            // Log the apps data to verify the data is being passed
            \Log::info('Apps data passed to the view:', ['apps' => $apps]);

            return view('admin.cloudron.apps', compact('apps'));
        } catch (\Exception $e) {
            \Log::error('Error fetching Cloudron apps: ' . $e->getMessage());
            return view('admin.cloudron.apps')->with('error', 'Failed to fetch Cloudron apps.');
        }
    }

    /**
     * Handle SSO link creation using Cloudron API.
     */
    public function createSsoLink()
    {
        try {
            $username = auth()->user()->username;
            $ssoLink = $this->cloudronService->createSsoLink($username);

            if ($ssoLink) {
                return redirect($ssoLink);
            }

            throw new \Exception('SSO link creation failed.');
        } catch (\Exception $e) {
            \Log::error('Error creating SSO link: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create SSO link.');
        }
    }
}
