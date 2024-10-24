<!-- resources/views/admin/team/create.blade.php -->
<x-app-layout>
    <div class="container">
        <h1 class="text-3xl font-bold mb-4">Add New Team Member</h1>

        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="display_name">Display Name</label>
                <input type="text" name="display_name" id="display_name" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="company_role">Company Role</label>
                <input type="text" name="company_role" id="company_role" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
            </div>

            <div class="mb-4">
                <label for="about_me">About Me</label>
                <textarea name="about_me" id="about_me" class="form-control" rows="5" required></textarea>
            </div>

            <div class="mb-4">
                <label for="links">Links (optional)</label>
                <input type="text" name="links[]" placeholder="Link Name" class="form-control mb-2">
                <input type="text" name="links[]" placeholder="URL" class="form-control">
                <!-- Add more fields as needed -->
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</x-app-layout>
