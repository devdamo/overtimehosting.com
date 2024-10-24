<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Create New News Article</h1>

    <form action="{{ route('dashboard.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6" id="news-form">
        @csrf

        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                   class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-zinc-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"/>
            @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Description:</label>
            <textarea name="description" id="description" required
                      class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-zinc-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">{{ old('description') }}</textarea>
            @error('description')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="body" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Long Description</label>
            <x-wysiwyg-editor
                name="body"
                label="Body"
                :value="old('body', $article->body ?? '')"
            />
            @error('body')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <div>
            <label for="bg_image" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Background Image:</label>
            <input type="file" name="bg_image" id="bg_image"
                   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
            @error('bg_image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="news_logo" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">News Type Logo:</label>
            <input type="file" name="news_logo" id="news_logo"
                   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
            @error('news_logo')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="tag" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Tag:</label>
            <input type="text" name="tag" id="tag" value="{{ old('tag') }}"
                   class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-zinc-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            @error('tag')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
                class="w-full px-5 py-2.5 text-white bg-blue-700 rounded-lg focus:ring-4 focus:outline-none hover:bg-blue-800 focus:ring-blue-300 font-medium dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Create News
        </button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('news-form');
            const bodyInput = document.getElementById('body');
            const editorContainer = document.querySelector('[name="body-editor"]');

            if (editorContainer) {
                // Update the hidden textarea whenever the editor content changes
                editor.on('update', () => {
                    bodyInput.value = editor.getHTML(); // or editor.getText() for plain text
                });
            }

            // Update the hidden textarea with the editor content before form submission
            form.addEventListener('submit', function () {
                bodyInput.value = editor.getHTML(); // Sync editor content
            });
        });
    </script>


</x-app-layout>
