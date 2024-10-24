<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Cloudron Apps</h1>

        @if (isset($apps) && count($apps) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($apps as $app)
                    <div class="border rounded-lg p-4 shadow">
                        <h2 class="text-lg font-semibold">{{ $app['manifest']['title'] ?? 'No Title' }}</h2>
                        <p>{{ $app['manifest']['description'] ?? 'No Description' }}</p>
                        <p><strong>Location:</strong> {{ $app['location'] ?? 'Unknown' }}</p>
                        @if(isset($app['url']))
                            <a href="{{ $app['url'] }}" target="_blank" class="text-blue-500 hover:underline">Open App</a>
                        @else
                            <p class="text-gray-500">No URL available</p>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <p>No apps installed on Cloudron.</p>
        @endif
    </div>
</x-app-layout>
