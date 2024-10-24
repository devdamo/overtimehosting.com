<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Create Game Article</h1>

        <form action="{{ route('admin.game-articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category:</label>
                <input type="text" name="category" id="category" class="w-full border border-gray-300 rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" rows="3" class="w-full border border-gray-300 rounded p-2" required></textarea>
            </div>
            <div class="mb-4">
                <label for="how_long_to_read" class="block text-gray-700">Read Time (in minutes):</label>
                <input type="number" name="how_long_to_read" id="how_long_to_read" class="w-full border border-gray-300 rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="markdown" class="block text-gray-700">Markdown Body:</label>
                <textarea name="markdown" id="markdown" rows="10" class="w-full border border-gray-300 rounded p-2" required></textarea>
            </div>
            <div class="mb-4">
                <label for="bg_image" class="block text-gray-700">Background Image (Optional):</label>
                <input type="file" name="bg_image" id="bg_image" class="w-full border border-gray-300 rounded p-2">
            </div>
            <button type="submit" class="btn btn-primary">Create Article</button>
        </form>
    </div>
</x-app-layout>
