<x-app-layout>

    <section class="bg-zinc-50 dark:bg-zinc-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-zinc-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button id="companyModalbutton" data-modal-target="companyModal" data-modal-toggle="companyModal" type="button" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add New Company
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-zinc-500 dark:text-zinc-400">
                        <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Logo</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Description</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($companies as $company)
                        <tr class="border-b dark:border-zinc-700">
                            <th scope="row" class="flex items-center px-4 py-2 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                <img src="{{ $company->logo ? asset('storage/' . $company->logo) : asset('images/default-logo.jpg') }}" alt="{{ $company->name }}" class="w-auto h-8 mr-3">
                            </th>
                            <td class="px-4 py-3">{{ $company->name }}</td>
                            <td class="px-4 py-3">{!! $company->description !!}</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="apple-imac-27-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-zinc-500 hover:text-zinc-800 rounded-lg focus:outline-none dark:text-zinc-400 dark:hover:text-zinc-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="apple-imac-27-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-zinc-100 shadow dark:bg-zinc-700 dark:divide-zinc-600">
                                    <ul class="py-1 text-sm text-zinc-700 dark:text-zinc-200" aria-labelledby="apple-imac-27-dropdown-button">
                                        <li>


                                            <button id="companyModalbutton" data-modal-target="companyeditModal" data-modal-toggle="companyeditModal" type="button" class="block py-2 px-4 text-sm text-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:text-zinc-200 dark:hover:text-white">Edit</button>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <form action="{{ route('companies.destroy', $company) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="block py-2 px-4 text-sm text-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:text-zinc-200 dark:hover:text-white">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div id="companyeditModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-zinc-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-zinc-600">
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">
                        {{ isset($company) ? 'Edit Company' : 'Add New Company' }}
                    </h3>
                    <button type="button" class="text-zinc-400 bg-transparent hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="companyModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <form action="{{ isset($company) ? route('companies.update', $company->id) : route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($company))
                        @method('PUT')
                    @endif
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Company Name</label>
                            <input type="text" name="name" id="name" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $company->name ?? '' }}" required>
                        </div>

                        <div>
                            <label for="logo" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Logo</label>
                            <input type="file" name="logo" id="logo" class="block w-full text-sm text-zinc-900 bg-zinc-50 border border-zinc-300 rounded-lg cursor-pointer dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400">
                            @if(isset($company) && $company->logo)
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" width="100" class="mt-2">
                            @endif
                        </div>

                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Description</label>
                            <x-editor
                                name="description"
                                label="description"
                                :value="old('description', $company->description ?? '')"
                            />
                        </div>

                        <div class="sm:col-span-2">
                            <label for="services" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Services (comma-separated)</label>
                            <input type="text" name="services" id="services" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ isset($company) ? implode(',', $company->services) : '' }}">
                        </div>

                        <div class="sm:col-span-2">
                            <label for="main_activities" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Main Activities and Responsibilities (comma-separated)</label>
                            <input type="text" name="main_activities" id="main_activities" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ isset($company) ? implode(',', $company->main_activities) : '' }}">
                        </div>
                    </div>

                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        {{ isset($company) ? 'Update Company' : 'Add New Company' }}
                    </button>
                </form>
            </div>
        </div>
    </div>


    <div id="companyModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-zinc-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-zinc-600">
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">
                        {{ isset($company) ? 'Edit Company' : 'Add New Company' }}
                    </h3>
                    <button type="button" class="text-zinc-400 bg-transparent hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="companyModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <form action="{{ isset($company) ? route('companies.update', $company->id) : route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($company))
                        @method('PUT')
                    @endif
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Company Name</label>
                            <input type="text" name="name" id="name" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $company->name ?? '' }}" required>
                        </div>

                        <div>
                            <label for="logo" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Logo</label>
                            <input type="file" name="logo" id="logo" class="block w-full text-sm text-zinc-900 bg-zinc-50 border border-zinc-300 rounded-lg cursor-pointer dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400">
                            @if(isset($company) && $company->logo)
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" width="100" class="mt-2">
                            @endif
                        </div>

                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Description</label>
                            <x-editor
                                name="description"
                                label="description"
                                :value="old('description', $company->description ?? '')"
                            />
                        </div>

                        <div class="sm:col-span-2">
                            <label for="services" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Services (comma-separated)</label>
                            <input type="text" name="services" id="services" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ isset($company) ? implode(',', $company->services) : '' }}">
                        </div>

                        <div class="sm:col-span-2">
                            <label for="main_activities" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Main Activities and Responsibilities (comma-separated)</label>
                            <input type="text" name="main_activities" id="main_activities" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ isset($company) ? implode(',', $company->main_activities) : '' }}">
                        </div>
                    </div>

                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        {{ isset($company) ? 'Update Company' : 'Add New Company' }}
                    </button>
                </form>
            </div>
        </div>
    </div>








</x-app-layout>
