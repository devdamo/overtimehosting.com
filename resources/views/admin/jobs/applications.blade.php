<x-app-layout>
        <div class="mx-auto max-w-screen-xl pt-10 px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-zinc-800 relative shadow-md sm:rounded-lg overflow-hidden">

                <!-- Table Section -->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-zinc-500 dark:text-zinc-400">
                        <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Email</th>
                            <th scope="col" class="px-4 py-3">Job</th>
                            <th scope="col" class="px-4 py-3 text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applications as $application)
                            <tr class="border-b dark:border-zinc-700">
                                <td class="px-4 py-3 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                    {{ $application->first_name }} {{ $application->last_name }}
                                </td>
                                <td class="px-4 py-3">{{ $application->email }}</td>
                                <td class="px-4 py-3">{{ $application->jobListing->title ?? 'N/A' }}</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <a href="{{ route('admin.applications.show', $application->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
                                        View Details
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
