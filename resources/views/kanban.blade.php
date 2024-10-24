<x-app-layout>
    <main>
        <div class="flex flex-col mt-2">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <div class="flex items-start justify-start px-4 mb-6 space-x-4">

                            @foreach ($columns as $column)
                            <div class="min-w-kanban">
                                <div class="py-4 text-base font-semibold text-zinc-900 dark:text-zinc-300">{{ $column->name }}</div>
                                <div id="kanban-list-1" class="mb-4 space-y-4 min-w-kanban">

                                    @foreach ($column->tasks as $task)
                                    <div class="flex flex-col max-w-md p-5 transform bg-white rounded-lg shadow cursor-move dark:bg-zinc-800">
                                        <div class="flex items-center justify-between pb-4">
                                            <div class="text-base font-semibold text-zinc-900 dark:text-white">{{ $task->title }}</div>

                                            <button type="button" data-modal-target="edit-{{ $column->id }}" data-modal-toggle="edit-{{ $column->id }}" class="p-2 text-sm text-zinc-500 rounded-lg dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-700 focus:outline-none focus:ring-4 focus:ring-zinc-200 dark:focus:ring-zinc-700">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                            </button>
                                        </div>


                                        <div class="flex items-center justify-center pb-4">
                                            @if ($task->image)
                                                <img src="{{ asset('storage/' . $task->image) }}" alt="{{ $task->title }}" class="bg-contain rounded-lg">
                                            @endif
                                        </div>


                                        <div class="flex flex-col">
                                            <div class="pb-4 text-sm font-normal text-zinc-700 dark:text-zinc-400">{{ $task->description }}</div>

                                            <div class="flex justify-between">
                                                <div class="flex items-center justify-start">
                                                    <a href="#" data-tooltip-target="user_23_1" class="-mr-3">
                                                        <img class="border-2 border-white rounded-full h-7 w-7 dark:border-zinc-800" src="http://localhost:1313/images/users/bonnie-green.png" alt="Bonnie Green">
                                                    </a>
                                                    <div id="user_23_1" role="tooltip" class="absolute z-50 inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-zinc-900 rounded-lg shadow-sm tooltip dark:bg-zinc-700 opacity-0 invisible" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-16.25px, -56.25px);" data-popper-placement="top">Bonnie Green<div class="tooltip-arrow" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(46.25px, 0px);"></div>
                                                    </div>
                                                </div>

                                                <div class="flex items-center justify-center px-3 text-sm font-medium text-purple-800 bg-purple-100 rounded-lg dark:bg-purple-200">
                                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                    {{ $column->name }}
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                        <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="edit-{{ $column->id }}">
                                            <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-zinc-800">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-4 border-b rounded-t md:px-6 dark:border-zinc-700">
                                                        <div class="text-xl font-semibold text-zinc-900 dark:text-white">Edit task</div>
                                                        <button type="button" data-modal-toggle="kanban-card-modal" class="text-zinc-500 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-700 focus:outline-none focus:ring-4 focus:ring-zinc-200 dark:focus:ring-zinc-700 rounded-lg text-sm p-2.5">
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-6">
                                                        <div class="mb-6 text-2xl font-semibold leading-none text-zinc-900 dark:text-white">{{ $task->title }}</div>
                                                        <div class="inline-flex items-center mb-2 text-lg font-semibold text-center text-zinc-900 dark:text-white">
                                                            <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                                                            Description
                                                        </div>
                                                        <div class="mb-4 space-y-2 text-base text-zinc-500 dark:text-zinc-400">
                                                            <p>{{ $task->description }}</p>
                                                        </div>
                                                        <form action="{{ route('comments.store') }}" method="POST" class="mt-2">
                                                            @csrf
                                                            <input type="hidden" name="task_id" value="{{ $task->id }}">
                                                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                            <div class="w-full mb-4 bg-zinc-100 border border-zinc-100 rounded-lg dark:bg-zinc-700 dark:border-zinc-600">
                                                                <div class="p-4">
                                                                    <label for="compose-mail" class="sr-only">Your comment</label>
                                                                    <textarea name="content" id="content" rows="4" class="block w-full px-0 text-base text-zinc-900 bg-zinc-100 border-0 focus:ring-0 dark:text-white dark:bg-zinc-700 dark:placeholder-zinc-400" placeholder="Write a comment..."></textarea>
                                                                </div>
                                                                <div class="flex items-center justify-between p-4 border-t dark:border-zinc-600">
                                                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-semibold rounded-lg text-xs px-3 py-1.5 text-center inline-flex items-center">
                                                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                                                        Post comment
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        @foreach ($task->comments as $comment)
                                                        <div class="flex flex-col space-y-2">
                                                            <div class="flex items-center space-x-3">
                                                                <div class="flex-1 min-w-0">
                                                                    <p class="text-sm font-semibold text-zinc-900 truncate dark:text-white">{{ $comment->user->name }}</p>
                                                                </div>
                                                            </div>
                                                            <ul class="pl-6 text-xs text-zinc-500 list-disc list-outside dark:text-zinc-400">
                                                                <div class="mb-4 space-y-2 text-base text-zinc-500 dark:text-zinc-400">
                                                                    <p>{{ $comment->content }}</p>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="grid grid-flow-col grid-rows-2 gap-2 p-4 border-t border-zinc-200 rounded-b sm:grid-rows-1 md:p-6 dark:border-zinc-600">
                                                        <form action="{{ route('tasks.done', $task->id) }}" method="POST" class="inline-flex items-center justify-center text-zinc-900 bg-white hover:bg-zinc-100 border border-zinc-200 hover:border-zinc-300 font-semibold rounded-lg text-sm py-2.5 text-center dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:bg-zinc-600">
                                                            @csrf
                                                            <button type="submit">
                                                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                                                Done
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('tasks.archive', $task->id) }}" method="POST" class="inline-flex items-center justify-center text-zinc-900 bg-white hover:bg-zinc-100 border border-zinc-200 hover:border-zinc-300 font-semibold rounded-lg text-sm py-2.5 text-center dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:bg-zinc-600">
                                                            @csrf
                                                            <button type="submit" >
                                                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                                                Archive
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-flex items-center justify-center text-zinc-900 bg-white hover:bg-zinc-100 border border-zinc-200 hover:border-zinc-300 font-semibold rounded-lg text-sm py-2.5 text-center dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:bg-zinc-600">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">
                                                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <button type="button" data-modal-target="{{ $column->id }}" data-modal-toggle="{{ $column->id }}" class="flex items-center justify-center w-full py-2 font-semibold text-zinc-500 border-2 border-zinc-200 border-dashed rounded-lg hover:bg-zinc-100 hover:text-zinc-900 hover:border-zinc-300 dark:border-zinc-800 dark:hover:border-zinc-700 dark:hover:bg-zinc-800 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                    Add another card
                                </button>
                            </div>

                                <!-- Add Task Modal -->
                                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="{{ $column->id }}">
                                    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-zinc-800">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 border-b rounded-t md:px-6 dark:border-zinc-700">
                                                <div class="text-xl font-semibold dark:text-white">Add new task</div>
                                                <button type="button" data-modal-toggle="new-card-modal" class="text-zinc-400 bg-transparent hover:bg-zinc-300 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-700 dark:hover:text-white">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 space-y-6 md:px-6">
                                                <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="column_id" value="{{ $column->id }}">
                                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                    <div class="grid grid-cols-2 gap-6 mb-4">
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="product-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Task Name</label>
                                                            <input type="text" name="title" id="title" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:placeholder-zinc-400" placeholder="Redesign Homepage" required="">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="product-details" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Enter a description</label>
                                                            <textarea name="description" id="description" rows="6" class="block w-full text-zinc-900 border border-zinc-200 rounded-lg bg-zinc-50 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:placeholder-zinc-400" placeholder="On line 672 you define $table_variants. Each instance of 'color-level' needs to be changed to 'shift-color'."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center w-full">
                                                        <label class="flex items-center justify-center w-full h-32 text-zinc-500 border-2 border-zinc-300 border-dashed rounded-lg cursor-pointer hover:bg-zinc-100 hover:border-zinc-300 hover:text-zinc-900 dark:border-zinc-700 dark:hover:border-zinc-600 dark:hover:bg-zinc-700 dark:hover:text-white">
                                                            <div class="flex items-center justify-center space-x-2">
                                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                                <p class="text-base">Drop files to upload</p>
                                                            </div>
                                                            <input type="file" name="image" id="image" class="hidden">
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center p-4 space-x-3 border-t border-zinc-200 rounded-b md:p-6 dark:border-zinc-700">
                                                        <button type="submit" class="w-32 inline-flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 border border-blue-700 hover:border-blue-800 font-semibold rounded-lg text-sm py-2.5 text-center">
                                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                                            Add Card
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="min-w-kanban">
                                <div class="py-4 text-base font-semibold text-zinc-900">
                                    Add another group
                                </div>
                                <div class="flex flex-col">
                                    <button type="button" data-modal-target="new-column" data-modal-toggle="new-column" class="flex items-center justify-center w-full h-32 py-2 m-0 font-semibold text-zinc-500 border-2 border-zinc-200 border-dashed rounded-lg hover:bg-zinc-100 hover:text-zinc-900 hover:border-zinc-300 dark:border-zinc-800 dark:hover:border-zinc-700 dark:hover:bg-zinc-800 dark:hover:text-white">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Task Modal -->
        <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="new-column">
            <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-zinc-800">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:px-6 dark:border-zinc-700">
                        <div class="text-xl font-semibold dark:text-white">Create New Column</div>
                        <button type="button" data-modal-toggle="new-card-modal" class="text-zinc-400 bg-transparent hover:bg-zinc-300 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-700 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 space-y-6 md:px-6">
                        <form action="{{ route('columns.store') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="grid grid-cols-2 gap-6 mb-4">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="product-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Column Name</label>
                                    <input type="text" name="name" id="column_name" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:placeholder-zinc-400" placeholder="Redesign Homepage" required="">
                                </div>
                            </div>
                            <div class="flex items-center p-4 space-x-3 border-t border-zinc-200 rounded-b md:p-6 dark:border-zinc-700">
                                <button type="submit" class="w-32 inline-flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 border border-blue-700 hover:border-blue-800 font-semibold rounded-lg text-sm py-2.5 text-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Create New
                                </button>
                                <button type="button" data-modal-toggle="new-card-modal" class="w-24 text-zinc-900 bg-white hover:bg-zinc-100 border border-zinc-200 hover:border-zinc-300 font-semibold rounded-lg text-sm py-2.5 text-center dark:bg-zinc-700 dark:border-zinc-600 dark:text-white dark:hover:bg-zinc-600">
                                    Close
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
