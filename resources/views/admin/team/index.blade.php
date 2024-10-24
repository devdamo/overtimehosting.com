<!-- resources/views/admin/team/index.blade.php -->
<x-app-layout>
    <div class="container">
        <h1 class="text-3xl font-bold mb-4">Team Members</h1>

        <a href="{{ route('admin.team.create') }}" class="btn btn-primary">Add New Team Member</a>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>Display Name</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($teamMembers as $teamMember)
                <tr>
                    <td>{{ $teamMember->display_name }}</td>
                    <td>{{ $teamMember->company_role }}</td>
                    <td>
                        <a href="{{ route('admin.team.edit', $teamMember->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.team.destroy', $teamMember->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
