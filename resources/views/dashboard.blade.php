<x-app-layout>
    <section class="bg-zinc-50 py-8 antialiased dark:bg-zinc-900 md:py-8">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <nav class="mb-4 flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-zinc-700 hover:text-blue-600 dark:text-zinc-400 dark:hover:text-white">
                            <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            Home Page
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="mx-1 h-4 w-4 text-zinc-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                            </svg>
                            <a href="/dashboard" class="ms-1 text-sm font-medium text-zinc-700 hover:text-blue-600 dark:text-zinc-400 dark:hover:text-white md:ms-2">Dashboard</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mb-4 text-xl font-semibold text-zinc-900 dark:text-white sm:text-2xl md:mb-6">General overview</h2>
            <div class="gap-8 lg:flex">
                <!-- Sidenav -->
                <aside id="sidebar" class="hidden h-full w-80 shrink-0 overflow-y-auto border border-zinc-200 bg-white p-3 shadow-sm dark:border-zinc-700 dark:bg-zinc-800 lg:block lg:rounded-lg">
                    <button id="dropdownUserNameButton" data-dropdown-toggle="dropdownUserName" type="button" class="dark:hover-bg-zinc-700 mb-3 flex w-full items-center justify-between rounded-lg bg-white p-2 hover:bg-zinc-100 focus:outline-none focus:ring-4 focus:ring-zinc-200 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-700" type="button">
                        <span class="sr-only">Open user menu</span>
                        <div class="flex w-full items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : 'https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green-2x.png' }}" class="mr-3 h-8 w-8 rounded-md" alt="Bonnie avatar" />
                                <div class="text-left">
                                    <div class="mb-0.5 font-semibold leading-none text-zinc-900 dark:text-white">{{ auth()->user()->name }}</div>
                                    <div class="text-sm text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</div>
                                </div>
                            </div>
                        </div>
                    </button>
                    <div class="mb-4 w-full border-y border-zinc-100 py-4 dark:border-zinc-700">
                        <ul class="grid grid-cols-3 gap-2">
                            <li>
                                <a href="#" class="group flex flex-col items-center justify-center rounded-xl bg-blue-50 p-2.5 hover:bg-blue-100 dark:bg-blue-900 dark:hover:bg-blue-800">
                                    <span class="mb-1 flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 group-hover:bg-blue-200 dark:bg-blue-800  dark:group-hover:bg-blue-700">
                                        <svg class="h-5 w-5 text-blue-600 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-300">Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group flex flex-col items-center justify-center rounded-xl bg-blue-50 p-2.5 hover:bg-blue-100 dark:bg-blue-900 dark:hover:bg-blue-800">
                                    <span class="mb-1 flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 group-hover:bg-blue-200 dark:bg-blue-800  dark:group-hover:bg-blue-700">
                                        <svg class="h-5 w-5 text-blue-600 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-300">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group flex flex-col items-center justify-center rounded-xl bg-blue-50 p-2.5 hover:bg-blue-100 dark:bg-blue-900 dark:hover:bg-blue-800">
                                    <span class="mb-1 flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 group-hover:bg-blue-200 dark:bg-blue-800  dark:group-hover:bg-blue-700">
                                        <svg class="h-5 w-5 text-blue-600 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-300">Reviews</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Update RoadMap</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">News Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Permissions Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Product Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Maintenance Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Maintenance Webhook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Sponsored Companies</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="mt-5 space-y-2 border-t border-zinc-100 pt-5 dark:border-zinc-700">
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">MatterMost</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">PlayBooks - Mattermost</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="mt-5 space-y-2 border-t border-zinc-100 pt-5 dark:border-zinc-700">
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Job Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-700">
                                <span class="ml-3 flex-1 whitespace-nowrap">Job Listings</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="mt-5 space-y-2 border-t border-zinc-100 pt-5 dark:border-zinc-700">
                        <li>
                            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-red-600 hover:bg-red-100 dark:text-red-500 dark:hover:bg-zinc-700">
                                <svg class="h-6 w-6 flex-shrink-0 text-red-600 transition duration-75 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                </svg>
                                <span class="ml-3 flex-1 whitespace-nowrap">Log out</span>
                            </a>
                        </li>
                    </ul>
                </aside>
                <!-- Right content -->
                <div class="grid w-full grid-cols-2 gap-4">
                    <div class="col-span-2 rounded-lg border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-800">
                        <div class="border-b border-zinc-200 dark:border-zinc-700">
                            <h3 class="flex items-center pb-4 text-xl font-semibold leading-none text-zinc-900 dark:text-white md:pb-6">
                                Contact Messages
                                <button data-tooltip-target="contact-desc" data-tooltip-trigger="hover" class="ms-2 text-zinc-400 hover:text-zinc-900 dark:text-zinc-500 dark:hover:text-white">
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="contact-desc" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-zinc-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-zinc-700">
                                    These are the current Contact Messages from clients or guests.
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </h3>
                        </div>

                        @foreach($contacts as $contact)
                            <div class="mt-4 grid grid-cols-2 gap-10 border-b border-zinc-200 pb-4 dark:border-zinc-700 sm:grid-cols-4 md:mt-6 md:grid-cols-4 md:pb-6 lg:grid-cols-4 xl:grid-cols-4">
                                <dl>
                                    <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Name</dt>
                                    <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">
                                        <a href="#" class="hover:underline">{!!  $contact->first_name !!} {!! $contact->last_name !!}</a>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Phone Number</dt>
                                    <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">{{ $contact->phone_number }}</dd>
                                </dl>

                                <dl>
                                    <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Email</dt>
                                    <dd class="pe-8 mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">{{ $contact->email }}</dd>
                                </dl>

                                <div class="col-span-2 content-center sm:col-span-4 md:col-span-1 md:justify-self-end lg:justify-self-start xl:col-span-1 xl:justify-self-end">
                                    <button id="actionsMenuDropdownModal-{{ $contact->id }}" data-dropdown-toggle="dropdown-{{ $contact->id }}" type="button" class="flex w-full items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white xl:w-auto">
                                        Actions
                                        <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <div id="dropdown-{{ $contact->id }}" class="z-10 hidden w-40 divide-y divide-zinc-100 rounded-lg bg-white shadow dark:bg-zinc-700" data-popper-placement="bottom">
                                        <ul class="p-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400">
                                            <li>
                                                <button data-modal-target="readProductModal-{{ $contact->id }}" data-modal-toggle="readProductModal-{{ $contact->id }}" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                    <span>Message</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Main modal -->
                                    <div id="readProductModal-{{ $contact->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-zinc-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                    <div class="text-lg text-zinc-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold">
                                                            Message
                                                        </h3>
                                                    </div>
                                                    <div>
                                                        <button type="button" data-modal-toggle="readProductModal-{{ $contact->id }}" class="text-zinc-400 bg-transparent hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-zinc-600 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <dl>
                                                    <dd class="mb-4 font-semibold text-zinc-500 sm:mb-5 dark:text-zinc-400">{{ $contact->message }}</dd>
                                                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Date and time</dt>
                                                    <dd class="mb-4 font-semibold text-gray-500 sm:mb-5 dark:text-gray-400">{{ $contact->created_at->format('d-m-Y H:i') }}</dd>
                                                </dl>
                                                <div class="flex justify-between items-center">
                                                    <button type="button" data-modal-toggle="readProductModal-{{ $contact->id }}" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-span-2 rounded-lg border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-800">
                        <div class="border-b border-zinc-200 dark:border-zinc-700">
                            <h3 class="flex items-center pb-4 text-xl font-semibold leading-none text-zinc-900 dark:text-white md:pb-6">
                                Active orders
                                <button data-tooltip-target="orders-desc" data-tooltip-trigger="hover" class="ms-2 text-zinc-400 hover:text-zinc-900 dark:text-zinc-500 dark:hover:text-white">
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="orders-desc" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-zinc-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-zinc-700">
                                    Here, you can see your current orders.
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </h3>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-4 border-b border-zinc-200 pb-4 dark:border-zinc-700 sm:grid-cols-4 md:mt-6 md:grid-cols-5 md:pb-6 lg:grid-cols-4 xl:grid-cols-5">
                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Order ID:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">
                                    <a href="#" class="hover:underline">#FWB125467980</a>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Date:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">27.01.2024</dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Price:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">$4,799</dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Status:</dt>
                                <dd class="mt-1.5 inline-flex items-center rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">
                                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                    </svg>
                                    In transit
                                </dd>
                            </dl>

                            <div class="col-span-2 content-center sm:col-span-4 md:col-span-1 md:justify-self-end lg:justify-self-start xl:col-span-1 xl:justify-self-end">
                                <button
                                    id="actionsMenuDropdownModal1"
                                    data-dropdown-toggle="dropdownOrderModal1"
                                    type="button"
                                    class="flex w-full items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white dark:focus:ring-zinc-700 xl:w-auto"
                                >
                                    Actions
                                    <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="dropdownOrderModal1" class="z-10 hidden w-40 divide-y divide-zinc-100 rounded-lg bg-white shadow dark:bg-zinc-700" data-popper-placement="bottom">
                                    <ul class="p-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400" aria-labelledby="actionsMenuDropdown2">
                                        <li>
                                            <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"></path>
                                                </svg>
                                                <span>Order again</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                </svg>
                                                Order details
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-red-600 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"></path>
                                                </svg>
                                                Cancel order
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-4 border-b border-zinc-200 pb-4 dark:border-zinc-700 sm:grid-cols-4 md:mt-6 md:grid-cols-5 md:pb-6 lg:grid-cols-4 xl:grid-cols-5">
                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Order ID:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">
                                    <a href="#" class="hover:underline">#FWB125467971</a>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Date:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">11.12.2023</dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Price:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">$964</dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Status:</dt>
                                <dd class="mt-1.5 inline-flex items-center rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 4h-13m13 16h-13M8 20v-3.333a2 2 0 0 1 .4-1.2L10 12.6a1 1 0 0 0 0-1.2L8.4 8.533a2 2 0 0 1-.4-1.2V4h8v3.333a2 2 0 0 1-.4 1.2L13.957 11.4a1 1 0 0 0 0 1.2l1.643 2.867a2 2 0 0 1 .4 1.2V20H8Z"></path>
                                    </svg>
                                    Pre-order
                                </dd>
                            </dl>

                            <div class="col-span-2 content-center sm:col-span-4 md:col-span-1 md:justify-self-end lg:justify-self-start xl:col-span-1 xl:justify-self-end">
                                <button
                                    id="actionsMenuDropdownModal2"
                                    data-dropdown-toggle="dropdownOrderModal2"
                                    type="button"
                                    class="flex w-full items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white dark:focus:ring-zinc-700 xl:w-auto"
                                >
                                    Actions
                                    <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="dropdownOrderModal2" class="z-10 hidden w-40 divide-y divide-zinc-100 rounded-lg bg-white shadow dark:bg-zinc-700" data-popper-placement="bottom">
                                    <ul class="p-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400" aria-labelledby="actionsMenuDropdown2">
                                        <li>
                                            <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"></path>
                                                </svg>
                                                <span>Order again</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                </svg>
                                                Order details
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-red-600 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"></path>
                                                </svg>
                                                Cancel order
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-4 md:mt-6 md:grid-cols-5 lg:grid-cols-4 xl:grid-cols-5">
                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Order ID:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">
                                    <a href="#" class="hover:underline">#FWB125467665</a>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Date:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">05.04.2023</dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Price:</dt>
                                <dd class="mt-1.5 text-base font-semibold text-zinc-900 dark:text-white">$230</dd>
                            </dl>

                            <dl>
                                <dt class="text-base font-medium text-zinc-500 dark:text-zinc-400">Status:</dt>
                                <dd class="me-2 mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
                                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"></path>
                                    </svg>
                                    Confirmed
                                </dd>
                            </dl>

                            <div class="col-span-2 content-center sm:col-span-4 md:col-span-1 md:justify-self-end lg:justify-self-start xl:col-span-1 xl:justify-self-end">
                                <button
                                    id="actionsMenuDropdownModal3"
                                    data-dropdown-toggle="dropdownOrderModal3"
                                    type="button"
                                    class="flex w-full items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white dark:focus:ring-zinc-700 xl:w-auto"
                                >
                                    Actions
                                    <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="dropdownOrderModal3" class="z-10 hidden w-40 divide-y divide-zinc-100 rounded-lg bg-white shadow dark:bg-zinc-700" data-popper-placement="bottom">
                                    <ul class="p-2 text-left text-sm font-medium text-zinc-500 dark:text-zinc-400" aria-labelledby="actionsMenuDropdown3">
                                        <li>
                                            <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"></path>
                                                </svg>
                                                <span>Order again</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white">
                                                <svg class="me-1.5 h-4 w-4 text-zinc-400 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                </svg>
                                                Order details
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 border-t border-zinc-200 pt-4 dark:border-zinc-700 md:mt-6 md:pt-6">
                            <button type="button" class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">
                                <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                See all orders
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</x-app-layout>
