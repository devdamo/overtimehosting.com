<form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
    </div>

    <div class="form-group">
        <label for="image">Category Image</label>
        <input type="file" name="image" id="image" class="form-control">
        @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="img-fluid mt-2" width="150">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Update Category</button>
</form>
