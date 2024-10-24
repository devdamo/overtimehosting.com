<x-app-layout>
        <div class="container">
            <h1>Create Job Category</h1>

            <form action="{{ route('admin.job_categories.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Create Category</button>
            </form>
        </div>
</x-app-layout>
