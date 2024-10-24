<!-- resources/views/admin/advertisements/create.blade.php -->
<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Create New Advertisement</h1>

        <form action="{{ route('admin.advertisements.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type</label>
                <select name="type" id="type" class="form-input mt-1 block w-full">
                    <option value="default">Default Discount Banner</option>
                    <option value="illustration">Discount Banner with Illustration</option>
                    <option value="floating">Floating Discount Banner</option>
                    <option value="popup">Discount Corner Popup</option>
                    <option value="pricing">Pricing Plan Modal</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="form-input mt-1 block w-full" value="{{ old('title') }}">
            </div>

            <div class="mb-4">
                <label for="subtitle" class="block text-gray-700">Subtitle</label>
                <input type="text" name="subtitle" id="subtitle" class="form-input mt-1 block w-full" value="{{ old('subtitle') }}">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content</label>
                <textarea name="content" id="content" rows="4" class="form-input mt-1 block w-full">{{ old('content') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL</label>
                <input type="text" name="image_url" id="image_url" class="form-input mt-1 block w-full" value="{{ old('image_url') }}">
            </div>

            <div class="mb-4">
                <label for="cta_text" class="block text-gray-700">Call-to-Action Text</label>
                <input type="text" name="cta_text" id="cta_text" class="form-input mt-1 block w-full" value="{{ old('cta_text') }}">
            </div>

            <div class="mb-4">
                <label for="cta_url" class="block text-gray-700">Call-to-Action URL</label>
                <input type="text" name="cta_url" id="cta_url" class="form-input mt-1 block w-full" value="{{ old('cta_url') }}">
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700">Location</label>
                <input type="text" name="location" id="location" class="form-input mt-1 block w-full" value="{{ old('location') }}">
            </div>

            <div class="mb-4">
                <label for="show_globally" class="inline-flex items-center">
                    <input type="checkbox" name="show_globally" id="show_globally" class="form-checkbox" value="1">
                    <span class="ml-2">Show Globally</span>
                </label>
            </div>

            <div class="mt-6">
                <button type="submit" class="btn btn-primary">Create Advertisement</button>
                <a href="{{ route('admin.advertisements.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
