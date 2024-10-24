<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Edit Legal Page</h1>

        <form action="{{ route('admin.legal.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ $page->title }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" id="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    <option value="Terms and Conditions" @if($page->type === 'terms') selected @endif>Terms & Conditions</option>
                    <option value="Privacy Policy" @if($page->type === 'privacy') selected @endif>Privacy Policy</option>
                    <option value="Cookies Notice" @if($page->type === 'cookie') selected @endif>Cookie Notice</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white" for="content">Content (Markdown)</label>
                <x-editor
                    name="content"
                    label="content"
                    value="{!! $page->content !!}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
            </div>

            <div class="mb-4">
                <label for="effective_date" class="block text-sm font-medium text-gray-700">Effective Date</label>
                <input type="date" name="effective_date" id="effective_date" value="{{ $page->effective_date ? $page->effective_date->format('Y-m-d') : '' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update Legal Page</button>
            </div>
        </form>
    </div>
</x-app-layout>
