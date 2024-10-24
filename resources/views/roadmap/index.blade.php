<x-app-layout>
    <section class="bg-zinc-50 dark:bg-zinc-900 py-3 sm:py-5">
        <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-zinc-800 sm:rounded-lg">
                <div class="px-4 divide-y dark:divide-zinc-700">
                    <div class="flex flex-col items-stretch justify-between py-4 space-y-3 md:flex-row md:items-center md:space-y-0">
                        <button id="updateProductButton" data-modal-target="create-entry" data-modal-toggle="create-entry" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add New Entry
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-zinc-500 dark:text-zinc-400">
                        <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Title</th>
                            <th scope="col" class="px-4 py-3">Body Text</th>
                            <th scope="col" class="px-4 py-3">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roadmaps as $roadmap)
                        <tr class="border-b dark:border-zinc-600 hover:bg-zinc-100 dark:hover:bg-zinc-700">
                            <th scope="row" class="px-4 py-2 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                    {{ $roadmap->title }}
                                </div>
                            </th>
                            <th scope="row" class="px-4 py-2 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                    {{ \Illuminate\Support\Str::limit($roadmap->body, 120) }}
                                </div>
                            </th>
                            <td class="px-4 py-2 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                <button id="dropdown-button-{{ $roadmap->id }}" type="button" data-dropdown-toggle="dropdown-{{ $roadmap->id }}" class="inline-flex items-center p-1 text-sm font-medium text-center text-zinc-500 rounded-lg hover:text-zinc-800 hover:bg-zinc-200 dark:hover:bg-zinc-700 focus:outline-none dark:text-zinc-400 dark:hover:text-zinc-100">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    </svg>
                                </button>
                                <div id="dropdown-{{ $roadmap->id }}" class="z-10 hidden bg-white divide-y divide-zinc-100 rounded shadow w-44 dark:bg-zinc-700 dark:divide-zinc-600">
                                    <ul class="py-1 text-sm text-zinc-700 dark:text-zinc-200" aria-labelledby="dropdown-button-{{ $roadmap->id }}">
                                        <li>
                                            <div class="flex justify-center m-5">
                                                <button id="updateProductButton" data-modal-target="update-{{ $roadmap->id }}" data-modal-toggle="update-{{ $roadmap->id }}" class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white" type="button">
                                                    Edit
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <form action="{{ route('roadmap.destroy', $roadmap->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Main modal -->
                        <div id="update-{{ $roadmap->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-zinc-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-zinc-600">
                                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">
                                            Update Entry
                                        </h3>
                                        <button type="button" class="text-zinc-400 bg-transparent hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form action="{{ route('roadmap.update', $roadmap) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="grid gap-4 mb-4 sm:grid-cols-1">
                                            <div>
                                                <label for="name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Title</label>
                                                <input type="text" name="title" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $roadmap->title }}" placeholder="Ex. Apple iMac 27&ldquo;">
                                            </div>
                                            <div class="sm:col-span-1">
                                                <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Body</label>
                                                <textarea name="body" rows="5" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write a description...">{{ $roadmap->body }}</textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Update Changes
                                            </button>
                                            <form action="{{ route('roadmap.destroy', $roadmap->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Delete</button>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
                </nav>
            </div>
        </div>
    </section>


    <!-- Main modal -->
    <div id="create-entry" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-zinc-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-zinc-600">
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">
                        Update Entry
                    </h3>
                    <button type="button" class="text-zinc-400 bg-transparent hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('roadmap.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-1">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Title</label>
                            <input type="text" name="title" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title">
                        </div>
                        <div class="sm:col-span-1">
                            <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Body</label>
                            <textarea name="body" rows="5" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your message" required=""></textarea>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Create Entry
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
