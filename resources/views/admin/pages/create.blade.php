<x-app-layout>
    <h1>{{ __('Create Page') }}</h1>
    <form action="{{ route('admin.pages.store') }}" method="POST">
        @csrf
        <div>
            <label>{{ __('Slug') }}</label>
            <input type="text" name="slug" value="{{ old('slug') }}">
        </div>
        <div>
            <label>{{ __('Title') }}</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>{{ __('Content') }}</label>
            <textarea id="customCode" name="content">{{ old('content') }}</textarea>
        </div>
        <div>
            <label>{{ __('Order') }}</label>
            <input type="number" name="order" value="{{ old('order', 0) }}">
        </div>
        <button type="submit">{{ __('Save') }}</button>
    </form>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var editor = CodeMirror.fromTextArea(document.getElementById("customCode"), {
                    mode: "htmlmixed",
                    theme: "dracula",  // Optional: Use the theme you imported
                    lineNumbers: true,
                    autoCloseTags: true
                });
            });
        </script>
    </x-slot>

</x-app-layout>
