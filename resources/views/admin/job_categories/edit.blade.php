<x-app-layout>
    <div class="container">
        <h1>Edit Job Category</h1>

        <form action="{{ route('admin.job_categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update Category</button>
        </form>
    </div>
</x-app-layout>
