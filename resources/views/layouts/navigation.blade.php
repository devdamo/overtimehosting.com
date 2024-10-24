<header class="shadow-md">
    <nav class="bg-white border-zinc-200 dark:border-zinc-600 dark:bg-zinc-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">OverTimeHosting</span>
            </a>
            <div class="flex items-center">
                @guest
                <a href="/login" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                @endguest
                <span class="mr-0 ml-2 w-px h-5 bg-zinc-200 dark:bg-zinc-600 lg:inline lg:mr-3 lg:ml-5"></span>
                @auth
                <div class="relative shrink-0">
                    <button id="accountDropdownButton2" data-dropdown-toggle="accountDropdown2" type="button" class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-zinc-100 dark:hover:bg-zinc-700 text-sm font-medium leading-none text-zinc-900 dark:text-white">
                        <img class="w-6 h-6 rounded-full me-1.5" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Rounded avatar">
                        <span class="hidden sm:block lg:hidden xl:block">
                            My Account
                        </span>
                        <svg class="w-4 h-4 text-zinc-900 dark:text-white sm:ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div id="accountDropdown2" class="z-10 hidden w-52 divide-y divide-zinc-100 overflow-hidden overflow-y-auto rounded-lg bg-white antialiased shadow dark:divide-zinc-600 dark:bg-zinc-700">
                        <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                    </svg>
                                    My Orders
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8H5m12 0c.6 0 1 .4 1 1v2.6M17 8l-4-4M5 8a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1v-2.6M5 8l4-4 4 4m6 4h-4a2 2 0 1 0 0 4h4c.6 0 1-.4 1-1v-2c0-.6-.4-1-1-1Z" />
                                    </svg>
                                    My Wallet
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                    </svg>
                                    Favourites Items
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 9H8a5 5 0 0 0 0 10h9m4-10-4-4m4 4-4 4" />
                                    </svg>
                                    My Returns
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.9 1.3 3.9 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.2-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                                    </svg>
                                    Gift Cards
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16v-5.5C11 8.5 9.4 7 7.5 7m3.5 9H4v-5.5C4 8.5 5.6 7 7.5 7m3.5 9v4M7.5 7H14m0 0V4h2.5M14 7v3m-3.5 6H20v-6a3 3 0 0 0-3-3m-2 9v4m-8-6.5h1" />
                                    </svg>
                                    Subscriptions
                                </a>
                            </li>
                        </ul>

                        <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2" d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    Account
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M21 13v-2a1 1 0 0 0-1-1h-.8l-.7-1.7.6-.5a1 1 0 0 0 0-1.5L17.7 5a1 1 0 0 0-1.5 0l-.5.6-1.7-.7V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.8l-1.7.7-.5-.6a1 1 0 0 0-1.5 0L5 6.3a1 1 0 0 0 0 1.5l.6.5-.7 1.7H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.8l.7 1.7-.6.5a1 1 0 0 0 0 1.5L6.3 19a1 1 0 0 0 1.5 0l.5-.6 1.7.7v.8a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.8l1.7-.7.5.6a1 1 0 0 0 1.5 0l1.4-1.4a1 1 0 0 0 0-1.5l-.6-.5.7-1.7h.8a1 1 0 0 0 1-1Z"
                                        />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H7a1 1 0 0 1-1-1v-7c0-.6.4-1 1-1Z" />
                                    </svg>
                                    Privacy
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.4V3m0 2.4a5.3 5.3 0 0 1 5.1 5.3v1.8c0 2.4 1.9 3 1.9 4.2 0 .6 0 1.3-.5 1.3h-13c-.5 0-.5-.7-.5-1.3 0-1.2 1.9-1.8 1.9-4.2v-1.8A5.3 5.3 0 0 1 12 5.4ZM8.7 18c.1.9.3 1.5 1 2.1a3.5 3.5 0 0 0 4.6 0c.7-.6 1.3-1.2 1.4-2.1h-7Z" />
                                    </svg>
                                    Notifications
                                </a>
                            </li>
                        </ul>

                        <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13c-2.8-.8-4.7-1-8-1a1 1 0 0 0-1 1v11c0 .6.5 1 1 1 3.2 0 5 .2 8 1m0-13c2.8-.8 4.7-1 8-1 .6 0 1 .5 1 1v11c0 .6-.5 1-1 1-3.2 0-5 .2-8 1" />
                                    </svg>
                                    Help Guide
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 10a2.5 2.5 0 1 1 5 .2 2.4 2.4 0 0 1-2.5 2.4V14m0 3h0m9-5a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Help Center
                                </a>
                            </li>
                        </ul>

                        <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                            <li>
                                <span class="group flex w-full items-center justify-between gap-2 rounded-md px-3 py-2 text-zinc-900 hover:bg-zinc-100 dark:text-white dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4 text-zinc-500 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 0 1-.5-18v0A9 9 0 0 0 20 15h.5a9 9 0 0 1-8.5 6Z" />
                                    </svg>
                                    Dark Mode
                                    <label class="ml-auto inline-flex cursor-pointer items-center">
                                        <input type="checkbox" value="" class="peer sr-only" name="dark-mode" />
                                        <div class="peer relative h-5 w-9 rounded-full bg-zinc-200 after:absolute after:start-[2px] after:top-[2px] after:h-4 after:w-4 after:rounded-full after:border after:border-zinc-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-zinc-500 dark:bg-zinc-600 dark:peer-focus:ring-blue-800 rtl:peer-checked:after:-translate-x-full"></div>
                                        <span class="sr-only">Toggle</span>
                                    </label>
                                </span>
                            </li>
                        </ul>

                        <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                            <li>
                                <a href="#" title="" class="group flex items-center gap-2 rounded-md px-3 py-2 text-sm text-red-600 hover:bg-red-50 dark:text-red-500 dark:hover:bg-zinc-600">
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                    </svg>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endauth
                @guest
                   <a href="https://shop.overtimehosting.com" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Get Started</a>
                @endguest
            </div>
        </div>
    </nav>
    <nav class="bg-white border-zinc-200 dark:bg-zinc-700 dark:border-zinc-600 border-y">
        <div class="grid py-4 px-4 mx-auto max-w-screen-xl lg:grid-cols-2 md:px-6">
            <div class="flex items-center lg:order-1">
                <ul class="flex flex-row mt-0 space-x-8 text-sm font-medium">
                    <li>
                        <a href="/" class="text-zinc-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdown-button-megamenu" data-collapse-toggle="megamenu" class="flex justify-between items-center w-full font-medium dark:hover:text-blue-500 md:p-0 md:w-auto dark:text-white hover:text-blue-500 dark:focus:text-blue-500">Company <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    </li>
                    <li>
                        <a href="/products" class="text-zinc-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-500">Marketplace</a>
                    </li>
                    <li>
                        <a href="#" class="hidden text-zinc-900 dark:text-white hover:text-blue-600 md:inline dark:hover:text-blue-500">Resources</a>
                    </li>
                    <li>
                        <a href="/contact" class="hidden text-zinc-900 dark:text-white hover:text-blue-600 md:inline dark:hover:text-blue-500">Contact</a>
                    </li>
                    <li>
                        <a href="/news" class="hidden text-zinc-900 dark:text-white hover:text-blue-600 md:inline dark:hover:text-blue-500">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav id="megamenu" class="hidden bg-white border-b border-zinc-200 dark:bg-zinc-800 dark:border-zinc-600">
        <div class="grid py-4 px-4 mx-auto max-w-screen-xl text-zinc-900 dark:text-white md:grid-cols-2 lg:grid-cols-4 md:px-6">
            <ul class="col-span-2 md:col-span-1">
                <li>
                    <a href="/roadmap" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">Road Map</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">What is our Company's Plans</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/maintenance" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">Maintenance</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">Get Status on our server's up time and hardware down times</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/jobs" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">Careers</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">Join our company and join a grate team of people</span>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="col-span-2 md:col-span-1">
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">OverTimeHosting</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">Updates and changes to overtimehosting website</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">OTHStore</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">Updates and changes to oth store website</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">OTHTree</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">Updates and changes to othtree website</span>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="hidden lg:block">
                <li>
                    <a href="/projects" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">Our Clients</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">Thease are our companies that we support and fund.</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/team" class="flex p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                        <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <div>
                            <div class="font-semibold">Our Team</div>
                            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">This is our team members</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="col-span-2 p-4 lg:col-span-1">
                <h2 class="mb-2 font-semibold text-zinc-900 dark:text-white">Our brands</h2>
                <p class="mb-2 font-light text-zinc-500 dark:text-zinc-400">At JBS Foods, we pride ourselves on a portfolio of brands that cater to a variety of preferences.</p>
                <a href="#" class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400">
                    Explore our brands <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                </a>
            </div>
        </div>
    </nav>
</header>
