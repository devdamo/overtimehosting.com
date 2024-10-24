<x-app-layout>
    <h1>{{ isset($page) ? __('Edit Page') : __('Create Page') }}</h1>
    <form action="{{ isset($page) ? route('admin.pages.update', $page->id) : route('admin.pages.store') }}" method="POST">
        @csrf
        @if(isset($page)) @method('PUT') @endif
        <div>
            <label>{{ __('Slug') }}</label>
            <input type="text" name="slug" value="{{ old('slug', $page->slug ?? '') }}">
        </div>
        <div>
            <label>{{ __('Title') }}</label>
            <input type="text" name="title" value="{{ old('title', $page->title ?? '') }}">
        </div>
        <div>
            <label>{{ __('Content') }}</label>
            <textarea name="content">{{ old('content', $page->content ?? '') }}</textarea>
        </div>
        <button type="submit">{{ __('Save') }}</button>
    </form>
</x-app-layout>
