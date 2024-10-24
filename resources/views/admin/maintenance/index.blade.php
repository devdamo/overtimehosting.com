<x-app-layout>
        <div class="pt-10 mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <!-- Top Section: Title and Add Button -->
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white">Manage Maintenance Entries</h1>
                    <div class="w-full md:w-auto flex justify-end">
                        <a href="{{ route('admin.maintenance.create') }}" class="flex items-center justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 00-1 1v3H6a1 1 0 100 2h3v3a1 1 0 002 0v-3h3a1 1 0 000-2h-3V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            Add New Maintenance
                        </a>
                    </div>
                </div>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- No Entries Message -->
                @if ($maintenances->isEmpty())
                    <p class="text-center text-gray-900 dark:text-white">No maintenance entries found.</p>
                @else
                    <!-- Table with Maintenance Entries -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Service Name</th>
                                <th scope="col" class="px-4 py-3">Reason</th>
                                <th scope="col" class="px-4 py-3">Priority</th>
                                <th scope="col" class="px-4 py-3">Start Date</th>
                                <th scope="col" class="px-4 py-3">End Date</th>
                                <th scope="col" class="px-4 py-3 text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($maintenances as $maintenance)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $maintenance->service_name }}</td>
                                    <td class="px-4 py-3">{{ $maintenance->reason }}</td>
                                    <td class="px-4 py-3">
                                        @if ($maintenance->priority == 'low')
                                            <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Low</span>
                                        @elseif ($maintenance->priority == 'medium')
                                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Medium</span>
                                        @else
                                            <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">High</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">{{ \Carbon\Carbon::parse($maintenance->start_date)->format('d M Y, H:i') }}</td>
                                    <td class="px-4 py-3">{{ \Carbon\Carbon::parse($maintenance->end_date)->format('d M Y, H:i') }}</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.maintenance.edit', $maintenance->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-2">
                                            Edit
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('admin.maintenance.destroy', $maintenance->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
</x-app-layout>
