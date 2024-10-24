<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Advertisements</h1>
        <a href="{{ route('admin.advertisements.create') }}" class="btn btn-primary mb-4">Add New Advertisement</a>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2">Type</th>
                <th class="py-2">Title</th>
                <th class="py-2">Location</th>
                <th class="py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ads as $ad)
                <tr>
                    <td class="py-2">{{ $ad->type }}</td>
                    <td class="py-2">{{ $ad->title }}</td>
                    <td class="py-2">{{ $ad->location }}</td>
                    <td class="py-2">
                        <a href="{{ route('admin.advertisements.edit', $ad->id) }}" class="text-blue-500">Edit</a> |
                        <form action="{{ route('admin.advertisements.destroy', $ad->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
