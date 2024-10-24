<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Manage Legal Pages</h1>

        <div class="mb-4">
            <a href="{{ route('admin.legal.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Create New Legal Page</a>
        </div>

        <table class="w-full table-auto border-collapse">
            <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Type</th>
                <th class="px-4 py-2">Effective Date</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pages as $page)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $page->title }}</td>
                    <td class="px-4 py-2 capitalize">{{ $page->type }}</td>
                    <td class="px-4 py-2">{{ $page->effective_date ? $page->effective_date->format('F j, Y') : 'N/A' }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('admin.legal.edit', $page->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('admin.legal.destroy', $page->id) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure you want to delete this legal page?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
