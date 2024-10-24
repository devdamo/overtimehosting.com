<x-app-layout>
    <div class="container">
        <h1>Server Requests</h1>

        @if($serverRequests->isEmpty())
            <p>No server requests found.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Node</th>
                    <th>Egg Name</th>
                    <th>RAM</th>
                    <th>CPU</th>
                    <th>Storage</th>
                    <th>Reason</th>
                    <th>User</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($serverRequests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->node_id }}</td>
                        <td>{{ $request->egg_name }}</td>
                        <td>{{ $request->ram }} MB</td>
                        <td>{{ $request->cpu }} %</td>
                        <td>{{ $request->storage }} MB</td>
                        <td>{{ $request->reason }}</td>
                        <td>{{ $request->user->name }}</td>
                        <td>{{ $request->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
