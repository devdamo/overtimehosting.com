<x-app-layout>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <section class="bg-zinc-50 dark:bg-zinc-900 p-3 sm:p-5">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-zinc-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a href="{{ route('dashboard.products.create') }}" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Create New Products
                            </a>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-zinc-500 dark:text-zinc-400">
                            <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">ID</th>
                                <th scope="col" class="px-4 py-3">Name</th>
                                <th scope="col" class="px-4 py-3">Price</th>
                                <th scope="col" class="px-4 py-3 flex items-center justify-end">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr class="border-b dark:border-zinc-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-zinc-900 whitespace-nowrap dark:text-white">{{ $product->id }}</th>
                                    <td class="px-4 py-3">{{ $product->name }}</td>
                                    <td class="px-4 py-3">£{{ $product->price }}</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button id="{{ $product->id }}-dropdown-button" data-dropdown-toggle="{{ $product->id }}-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-zinc-500 hover:text-zinc-800 rounded-lg focus:outline-none dark:text-zinc-400 dark:hover:text-zinc-100" type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div id="{{ $product->id }}-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-zinc-100 shadow dark:bg-zinc-700 dark:divide-zinc-600">
                                            <ul class="py-1 text-sm text-zinc-700 dark:text-zinc-200" aria-labelledby="apple-imac-27-dropdown-button">
                                                <li>
                                                    <a href="{{ route('dashboard.products.edit', $product) }}" class="block py-2 px-4 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <form action="{{ route('dashboard.products.destroy', $product) }}" method="POST" style="display:inline;">
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




            <!-- Main modal -->
            <div id="createProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-zinc-800 sm:p-5">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center mb-4 sm:mb-5 dark:border-zinc-600">
                            <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">
                                Create Product
                            </h3>
                            <button type="button" class="text-zinc-400 bg-transparent hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="createEventModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="#">
                            <div class="grid gap-4 mb-4 lg:grid-cols-2 sm:mb-6">
                                <div class="space-y-4">
                                    <div>
                                        <label for="title" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Product Name</label>
                                        <input type="text" name="title" id="title" class="bg-zinc-50 border border-zinc-300 text-sm text-zinc-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add title here" required="">
                                    </div>
                                    <div>
                                        <label for="price" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Price</label>
                                        <input type="number" name="price" id="price" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$2999" required="">
                                    </div>
                                    <div>
                                        <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Product Description</label>
                                        <textarea id="description" rows="2" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                    </div>
                                    <div>
                                        <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Features</label>
                                        <textarea id="description" rows="2" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                    </div>
                                    <div>
                                        <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Important Info</label>
                                        <textarea id="description" rows="2" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                    </div>
                                    <div>
                                        <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Long Description</label>
                                        <textarea id="description" rows="2" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                    </div>
                                    <div>
                                        <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Quick Description</label>
                                        <textarea id="description" rows="2" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label for="title" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Star Rating</label>
                                        <input type="text" name="title" id="title" class="bg-zinc-50 border border-zinc-300 text-sm text-zinc-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add title here" required="">
                                    </div>
                                    <div>
                                        <label for="price" class="pt-2 block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Sale Amount</label>
                                        <input type="number" name="price" id="price" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$2999" required="">
                                    </div>
                                    <div>
                                        <label for="description" class="block pt-2 mb-2 text-sm font-medium text-zinc-900 dark:text-white">Product Logo</label>
                                        <input class="w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 cursor-pointer dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400" aria-describedby="file_input_help" id="file_input" type="file">
                                        <p class="mt-1 text-xs font-normal text-zinc-500 dark:text-zinc-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                    </div>
                                    <div>
                                        <label for="description" class="block pt-2 mb-2 text-sm font-medium text-zinc-900 dark:text-white">Product Background</label>
                                        <input class="w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 cursor-pointer dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400" aria-describedby="file_input_help" id="file_input" type="file">
                                        <p class="mt-1 text-xs font-normal text-zinc-500 dark:text-zinc-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                    </div>
                                    <div>
                                        <label for="price" class="pt-2 block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Product Url</label>
                                        <input type="number" name="price" id="price" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$2999" required="">
                                    </div>
                                    <div>
                                        <label for="user-permissions" class="pt-2 inline-flex items-center mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                                            CPU Type
                                        </label>
                                        <select id="user-permissions" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="AMD">AMD</option>
                                            <option value="Intel">Intel</option>
                                            <option value="ARM">ARM</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="user-permissions" class="pt-2 inline-flex items-center mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                                            Seller
                                        </label>
                                        <select id="user-permissions" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="OverTimeHosting">OverTimeHosting</option>
                                            <option value="ShadowHosting">Shadow Hosting</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button type="submit" class="text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg aria-hidden="true" class="-ml-1 w-5 h-5 sm:mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                    Add event
                                    <span class="sr-only">Add event</span>
                                </button>
                                <button data-modal-toggle="createEventModal" type="button" class="inline-flex justify-center text-zinc-500 items-center bg-white hover:bg-zinc-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-zinc-200 text-sm font-medium px-5 py-2.5 hover:text-zinc-900 focus:z-10 dark:bg-zinc-700 dark:text-zinc-300 dark:border-zinc-500 dark:hover:text-white dark:hover:bg-zinc-600 dark:focus:ring-zinc-600">
                                    Discard
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</x-app-layout>
