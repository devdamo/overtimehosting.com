<x-app-layout>
    <section class="bg-white dark:bg-zinc-900 px-4 py-8">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Employee Onboarding Status</h2>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(!empty($playbookRuns))
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Employee</th>
                        <th class="px-4 py-2">Playbook Name</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Completion Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($playbookRuns['items'] as $run)
                        <tr>
                            <td class="border px-4 py-2">{{ $run['name'] ?? 'N/A' }}</td>
                            <td class="border px-4 py-2">{{ $run['playbook_title'] ?? 'N/A' }}</td>
                            <td class="border px-4 py-2">{{ $run['status'] ?? 'N/A' }}</td>
                            <td class="border px-4 py-2">
                                {{ isset($run['end_at']) && $run['end_at'] > 0 ? \Carbon\Carbon::createFromTimestampMs($run['end_at'])->toFormattedDateString() : 'In Progress' }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>No playbook runs found.</p>
            @endif
        </div>
    </section>
</x-app-layout>
