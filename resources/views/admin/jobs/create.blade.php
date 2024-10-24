<x-app-layout>
    <div class="container">
        <h1>Create Job Listing</h1>

        <form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image_path">Header Image</label>
                <input type="file" name="image_path" id="image_path" class="form-control">
            </div>

            <div class="form-group">
                <label for="short_description">Short Description (For Index)</label>
                <textarea name="short_description" id="short_description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="full_description">Full Description</label>
                <textarea name="full_description" id="full_description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="job_type">Job Type</label>
                <input type="text" name="job_type" id="job_type" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pay">Pay</label>
                <input type="text" name="pay" id="pay" class="form-control">
            </div>

            <div class="form-group">
                <label for="additional_pay">Additional Pay</label>
                <input type="text" name="additional_pay" id="additional_pay" class="form-control">
            </div>

            <div class="form-group">
                <label for="benefits">Benefits</label>
                <textarea name="benefits" id="benefits" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="schedule">Schedule</label>
                <textarea name="schedule" id="schedule" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="work_location">Work Location</label>
                <textarea name="work_location" id="work_location" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Create Job</button>
        </form>
    </div>
</x-app-layout>
