<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Game Articles</h1>

        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.game-articles.create') }}" class="btn btn-primary">Create New Article</a>
        </div>

        <table class="table-auto w-full">
            <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Read Time</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td class="border px-4 py-2">{{ $article->title }}</td>
                    <td class="border px-4 py-2">{{ $article->category }}</td>
                    <td class="border px-4 py-2">{{ $article->description }}</td>
                    <td class="border px-4 py-2">{{ $article->read_time }} min</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.game-articles.edit', $article->id) }}" class="text-blue-500">Edit</a> |
                        <form action="{{ route('admin.game-articles.destroy', $article->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
