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
                        <button id="news-create-button" data-modal-target="news-create" data-modal-toggle="news-create" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add New Article
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-zinc-500 dark:text-zinc-400">
                        <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Title</th>
                            <th scope="col" class="px-4 py-3">Description</th>
                            <th scope="col" class="px-4 py-3 flex items-center justify-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($news as $article)
                        <tr class="border-b dark:border-zinc-700">
                            <th scope="row" class="px-4 py-3 font-medium text-zinc-900 whitespace-nowrap dark:text-white">{{ $article->title }}</th>
                            <td class="px-4 py-3">{{ $article->description }}</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                <button id="{{ $article->id }}-dropdown-button" data-dropdown-toggle="{{ $article->id }}-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-zinc-500 hover:text-zinc-800 rounded-lg focus:outline-none dark:text-zinc-400 dark:hover:text-zinc-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="{{ $article->id }}-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-zinc-100 shadow dark:bg-zinc-700 dark:divide-zinc-600">
                                    <ul class="py-1 text-sm text-zinc-700 dark:text-zinc-200" aria-labelledby="apple-imac-27-dropdown-button">
                                        <li>
                                            <a href="{{ route('dashboard.news.edit', $article->id) }}" class="block py-2 px-4 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <form action="{{ route('dashboard.news.destroy', $article->id) }}" method="POST" style="display:inline;">
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
        <div id="news-create" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-zinc-800 sm:p-5">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-zinc-600">
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">
                            Add new user
                        </h3>
                        <button type="button" class="text-zinc-400 bg-transparent hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="createUserdefaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{ route('dashboard.news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="title" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Title</label>
                                <input type="text" name="title" id="title" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required="">
                            </div>
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Description</label>
                                <input type="text" name="description" id="description" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required="">
                            </div>
                            <div>
                                <label for="tag" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">TAG</label>
                                <input type="text" name="tag" id="tag" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="body" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Body Text</label>
                                <div class="w-full bg-zinc-50 rounded-lg border border-zinc-200 dark:bg-zinc-700 dark:border-zinc-600">
                                    <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-zinc-800">
                                        <textarea id="body" name="body" rows="8" class="block px-0 w-full text-sm text-zinc-800 bg-white border-0 dark:bg-zinc-800 focus:ring-0 dark:text-white dark:placeholder-zinc-400" placeholder="Write a message here" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white" for="file_input">Upload News Logo</label>
                                <div class="items-center w-full sm:flex">
                                    <img class="mb-4 w-20 h-20 rounded-full sm:mr-4 sm:mb-0" id="news_logo_preview" src="#" >
                                    <div class="w-full">
                                        <input type="file" accept="image/*" onchange="previewNewsLogo(event)" class="w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 cursor-pointer dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400" aria-describedby="file_input_help" name="news_logo" id="news_logo" type="file">
                                        <p class="mt-1 text-xs font-normal text-zinc-500 dark:text-zinc-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white" for="file_input">Upload Background Image</label>
                                <div class="items-center w-full sm:flex">
                                    <img class="mb-4 w-20 h-20 rounded-full sm:mr-4 sm:mb-0" id="bg_image_preview" src="#" >
                                    <div class="w-full">
                                        <input type="file" accept="image/*" onchange="previewBgImage(event)" class="w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 cursor-pointer dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400" aria-describedby="file_input_help" name="bg_image" id="bg_image" type="file">
                                        <p class="mt-1 text-xs font-normal text-zinc-500 dark:text-zinc-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="submit" class="w-full text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="-ml-1 w-5 h-5 sm:mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Create Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- JavaScript for Image Preview -->
        <script>
            // Preview background image
            function previewBgImage(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('bg_image_preview');
                    output.src = reader.result;
                    output.style.display = 'block';
                };
                reader.readAsDataURL(event.target.files[0]);
            }

            // Preview news logo image
            function previewNewsLogo(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('news_logo_preview');
                    output.src = reader.result;
                    output.style.display = 'block';
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>




</x-app-layout>
