<x-app-layout>
    <div class="container">
        <h1 class="text-3xl font-bold mb-6">Configure Discord Webhook</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.webhooks.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="webhook_url">Discord Webhook URL</label>
                <input type="url" name="webhook_url" id="webhook_url" class="form-control"
                       value="{{ $webhook->webhook_url ?? '' }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Save</button>
        </form>
    </div>
</x-app-layout>
