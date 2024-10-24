<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceMaintenance;
use App\Models\Webhook;
use Illuminate\Support\Facades\Http;

class ServiceMaintenanceController extends Controller
{
    // List all maintenance entries
    public function index()
    {
        $maintenances = ServiceMaintenance::all();
        return view('admin.maintenance.index', compact('maintenances'));
    }

    public function publicIndex()
    {
        // Fetch all maintenance entries
        $maintenances = ServiceMaintenance::orderBy('start_date', 'desc')->get();
        return view('maintenance.index', compact('maintenances'));
    }

    // Create a new maintenance entry
    public function create()
    {
        $presetServices = [
            'Customer Website Manager',
            'Main Website Manager',
            'Delta Node',
            'Apex Node',
            'UK Node',
            'Omega Node',
            'Shadow Node',
            'Node Hardware Replacement',
            'Regular maintenance',
            'Network database',
            'CloudFlare DNS Maintenance',
            'Main Email Service',
            'Security patch maintenance',
            'Network infrastructure',
            'Load balancer maintenance',
            'Backup system maintenance',
        ];

        return view('admin.maintenance.create', compact('presetServices'));
    }

    // Store new maintenance entry and notify Discord
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'reason' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Create the maintenance entry
        $maintenance = ServiceMaintenance::create($validated);

        // Send Discord notification
        $this->sendDiscordNotification($maintenance, 'created');  // Add this line

        return redirect()->route('admin.maintenance.index')->with('success', 'Maintenance entry created successfully.');
    }

    // Send Discord Webhook notification
    private function sendDiscordNotification(ServiceMaintenance $maintenance, $action = 'created')
    {
        $webhook = Webhook::first();  // Retrieve the webhook from the database

        if ($webhook) {
            // Prepare the message
            $message = [
                'content' => '', // Mention @everyone
                'embeds' => [
                    [
                        'title' => "Maintenance $action: {$maintenance->service_name}",
                        'description' => "🔧 **Service**: {$maintenance->service_name}\n📋 **Reason**: {$maintenance->reason}\n🚨 **Priority**: {$maintenance->priority}\n⏰ **Start**: {$maintenance->start_date}\n⏳ **End**: {$maintenance->end_date}",
                        'color' => $this->getColorBasedOnPriority($maintenance->priority), // Set color based on priority
                        'footer' => [
                            'text' => 'Maintenance Notification',
                        ],
                        'timestamp' => now()->toIso8601String(), // Include timestamp
                    ]
                ]
            ];

            // Send the message to Discord using the stored webhook URL
            Http::post($webhook->webhook_url, $message);
        }
    }

    // Map priority to color for Discord message
    private function getColorBasedOnPriority($priority)
    {
        return match ($priority) {
            'low' => 3066993,   // Green
            'medium' => 15105570, // Yellow
            'high' => 15158332,   // Red
            default => 3447003,  // Blue
        };
    }

    public function edit($id)
    {
        $maintenance = ServiceMaintenance::findOrFail($id);
        $presetServices = [
            'Web server Plesk', 'Company web server', 'OTH On-premise Server', 'Cloud server Apex',
            'New service to be replaced', 'Regular maintenance', 'Database server', 'DNS server',
            'Email server', 'Security patch', 'Network infrastructure', 'Load balancer maintenance',
            'Backup system', 'Firewall upgrade', 'VPN server', 'Storage maintenance'
        ];

        return view('admin.maintenance.edit', compact('maintenance', 'presetServices'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'reason' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $maintenance = ServiceMaintenance::findOrFail($id);
        $maintenance->update($validated);

        // Send Discord notification for update
        $this->sendDiscordNotification($maintenance, 'updated');  // Add this line

        return redirect()->route('admin.maintenance.index')->with('success', 'Maintenance updated successfully.');
    }

    public function destroy($id)
    {
        $maintenance = ServiceMaintenance::findOrFail($id);
        $maintenance->delete();

        return redirect()->route('admin.maintenance.index')->with('success', 'Maintenance entry deleted.');
    }
}
