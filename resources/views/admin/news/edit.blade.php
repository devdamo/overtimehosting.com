<x-app-layout>
    <h1>Edit News Article</h1>

    <form action="{{ route('dashboard.news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $news->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" required>{{ $news->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-app-layout>
