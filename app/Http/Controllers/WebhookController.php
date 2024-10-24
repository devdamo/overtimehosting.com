<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webhook;

class WebhookController extends Controller
{
    // Show form to configure webhook URL
    public function edit()
    {
        $webhook = Webhook::first();
        return view('admin.webhooks.edit', compact('webhook'));
    }

    // Store or update the webhook URL
    public function update(Request $request)
    {
        $validated = $request->validate([
            'webhook_url' => 'required|url'
        ]);

        $webhook = Webhook::first();
        if ($webhook) {
            $webhook->update($validated);
        } else {
            Webhook::create($validated);
        }

        return redirect()->route('admin.webhooks.edit')->with('success', 'Webhook URL updated successfully.');
    }
}
