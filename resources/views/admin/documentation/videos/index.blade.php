<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Video Articles</h1>

        <div class="text-right mb-4">
            <a href="{{ route('admin.video-articles.create') }}" class="btn btn-primary">Add New Video Article</a>
        </div>

        @if ($videos->isEmpty())
            <p>No video articles available.</p>
        @else
            <table class="table-auto w-full">
                <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Read Time</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($videos as $video)
                    <tr>
                        <td class="border px-4 py-2">{{ $video->title }}</td>
                        <td class="border px-4 py-2">{{ $video->category }}</td>
                        <td class="border px-4 py-2">{{ $video->read_time }} minutes</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.video-articles.edit', $video->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('admin.video-articles.destroy', $video->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this video article?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
