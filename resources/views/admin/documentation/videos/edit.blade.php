<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Edit Video Article</h1>

        <form action="{{ route('admin.video-articles.update', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded p-2" value="{{ $video->title }}" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category:</label>
                <input type="text" name="category" id="category" class="w-full border border-gray-300 rounded p-2" value="{{ $video->category }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" rows="3" class="w-full border border-gray-300 rounded p-2" required>{{ $video->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="read_time" class="block text-gray-700">Read Time (in minutes):</label>
                <input type="number" name="read_time" id="read_time" class="w-full border border-gray-300 rounded p-2" value="{{ $video->read_time }}" required>
            </div>

            <div class="mb-4">
                <label for="markdown" class="block text-gray-700">Markdown Body:</label>
                <textarea name="markdown" id="markdown" rows="10" class="w-full border border-gray-300 rounded p-2" required>{{ $video->markdown }}</textarea>
            </div>

            <div class="mb-4">
                <label for="video" class="block text-gray-700">Video Upload:</label>
                <input type="file" name="video" id="video" class="w-full border border-gray-300 rounded p-2">
            </div>

            <div class="mb-4">
                <label for="bg_image" class="block text-gray-700">Background Image (Optional):</label>
                <input type="file" name="bg_image" id="bg_image" class="w-full border border-gray-300 rounded p-2">
            </div>

            <button type="submit" class="btn btn-primary">Update Video Article</button>
        </form>
    </div>
</x-app-layout>
