<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ServerRequest;
use App\Services\PterodactylService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PterodactylController extends Controller
{
    protected $pterodactylService;

    public function __construct(PterodactylService $pterodactylService)
    {
        $this->pterodactylService = $pterodactylService;
    }

    /**
     * Show the server creation form.
     */
    public function create()
    {
        $nodes = $this->pterodactylService->getNodes();
        $eggs = $this->pterodactylService->getEggs(1); // Assuming Nest ID is 1, adjust as needed

        // Log eggs for debugging
        \Log::info('Eggs data:', ['eggs' => $eggs]);

        return view('admin.pterodactyl.create', compact('nodes', 'eggs'));
    }


    public function getEggs($nestId)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Accept' => 'application/json',
        ])->get($this->apiUrl . "/api/application/nests/{$nestId}/eggs");

        if ($response->successful()) {
            // Assuming the response contains an array of eggs under a "data" key
            return $response->json()['data'];
        }

        throw new \Exception('Failed to fetch eggs: ' . $response->body());
    }




    /**
     * Store server request in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'node_id' => 'required',
            'egg_name' => 'required',
            'ram' => 'required|integer',
            'cpu' => 'required|integer',
            'storage' => 'required|integer',
            'reason' => 'required|string',
        ]);

        ServerRequest::create([
            'user_id' => Auth::id(),
            'node_id' => $request->node_id,
            'egg_name' => $request->egg_name,
            'ram' => $request->ram,
            'cpu' => $request->cpu,
            'storage' => $request->storage,
            'reason' => $request->reason,
        ]);

        return redirect()->back()->with('success', 'Server request added successfully!');
    }

    /**
     * Show the list of server requests.
     */
    public function index()
    {
        $serverRequests = ServerRequest::with('user')->get();
        return view('admin.pterodactyl.index', compact('serverRequests'));
    }
}
