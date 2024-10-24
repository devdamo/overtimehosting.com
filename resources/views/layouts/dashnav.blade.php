<header>
    <nav class="bg-white border-zinc-200 px-4 lg:px-6 py-2.5 dark:bg-zinc-800">
        <div class="grid grid-cols-3 items-center mx-auto max-w-screen-xl">
            <a class="flex items-center lg:justify-center lg:order-2">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">OverTimeHosting</span>
            </a>
            <div class="flex col-span-2 justify-end items-center lg:order-3 lg:col-span-1">
                <button type="button" class="flex mx-3 text-sm bg-zinc-800 rounded-full md:mr-0 focus:ring-4 focus:ring-zinc-300 dark:focus:ring-zinc-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <div class="relative inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full bg-zinc-100 dark:bg-zinc-600">
                        <img class="w-10 h-10 rounded" src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : 'https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green-2x.png' }}" alt="Default avatar">
                    </div>
                </button>
                <!-- Dropdown menu    -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-zinc-100 shadow dark:bg-zinc-700 dark:divide-zinc-600" id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-zinc-900 dark:text-white">{{ auth()->user()->name }}</span>
                        <span class="block text-sm font-light text-zinc-500 truncate dark:text-zinc-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-1 font-light text-zinc-500 dark:text-zinc-400" aria-labelledby="dropdown">
                        <li>
                            <a href="{{ route('profile.edit') }}" class="block py-2 px-4 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:text-zinc-400 dark:hover:text-white">Account settings</a>
                        </li>
                    </ul>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-blue-600 dark:text-blue-500 ml-1 lg:ml-3 hover:bg-zinc-50 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-sm px-3 lg:px-5 py-2 lg:py-2.5 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">Log out</button>
                </form>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-zinc-500 rounded-lg lg:hidden hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-zinc-200 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:focus:ring-zinc-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden col-span-4 justify-between items-center w-full lg:flex lg:w-auto lg:order-1 lg:col-span-1" id="mobile-menu-2">
                <div class="hidden col-span-4 justify-between items-center w-full lg:flex lg:w-auto lg:order-1 lg:col-span-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <button id="mega-menu-button" data-dropdown-toggle="mega-menu" class="block py-2 pr-4 pl-3 text-zinc-700 border-b border-zinc-100 hover:bg-zinc-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-zinc-400 lg:dark:hover:text-white dark:hover:bg-zinc-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-zinc-700">Apps</button>
                        </li>
                        <li>
                            <button id="team-menu-button" data-dropdown-toggle="team-menu" class="block py-2 pr-4 pl-3 text-zinc-700 border-b border-zinc-100 hover:bg-zinc-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-zinc-400 lg:dark:hover:text-white dark:hover:bg-zinc-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-zinc-700">Teams</button>
                        </li>
                        <li>
                            <button id="job-menu-button" data-dropdown-toggle="job-menu" class="block py-2 pr-4 pl-3 text-zinc-700 border-b border-zinc-100 hover:bg-zinc-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-zinc-400 lg:dark:hover:text-white dark:hover:bg-zinc-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-zinc-700">Jobs</button>
                        </li>
                        <li>
                            <a href="" class="block py-2 pr-4 pl-3 text-zinc-700 border-b border-zinc-100 hover:bg-zinc-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-zinc-400 lg:dark:hover:text-white dark:hover:bg-zinc-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-zinc-700">Pages</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="mega-menu" class="grid hidden absolute z-10 w-full bg-white border border-zinc-100 shadow-md dark:border-zinc-700 lg:rounded-lg lg:w-auto lg:grid-cols-3 dark:bg-zinc-700">
                <div class="p-2 text-zinc-900 bg-white lg:rounded-lg dark:text-white lg:col-span-3 dark:bg-zinc-800">
                    <ul>
                        <li>
                            <a href="{{ route('roadmap.index') }}" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Update Roadmap</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Add a new entry on the roadmap of our website.</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.news.index') }}" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path><path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">News Manager</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Update people of new changes to our company and let people know of anything new.</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('permissions.index') }}" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Permissions Management</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Manage user roles and give permissions to people.</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/products" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Product Manager</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Create new products and add them to the website.</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/maintenance" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">maintenance</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Create a New maintenance announcement.</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/webhooks" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Webhook</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Edit webhook</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/companies" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Sponsored Companies</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Edit Sponsored Companies</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.mattermost.index') }}" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Mattermost Integration</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.mattermost.playbooks') }}" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">PlayBooks Mattermost</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/companies" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Sponsored Companies</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Edit Sponsored Companies</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="job-menu" class="grid hidden absolute z-10 w-full bg-white border border-zinc-100 shadow-md dark:border-zinc-700 lg:rounded-lg lg:w-auto lg:grid-cols-3 dark:bg-zinc-700">
                <div class="p-2 text-zinc-900 bg-white lg:rounded-lg dark:text-white lg:col-span-3 dark:bg-zinc-800">
                    <ul>
                        <li>
                            <a href="/dashboard/job_categories" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Jobs Category</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Create job category for what ever you need.</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/jobs/" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Create Job Listings</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">create job listings for this compnay.</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/job-applications" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Employee Applications</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">view any live applications.</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="team-menu" class="grid hidden absolute z-10 w-full bg-white border border-zinc-100 shadow-md dark:border-zinc-700 lg:rounded-lg lg:w-auto lg:grid-cols-3 dark:bg-zinc-700">
                <div class="p-2 text-zinc-900 bg-white lg:rounded-lg dark:text-white lg:col-span-3 dark:bg-zinc-800">
                    <ul>
                        <li>
                            <a href="/dashboard/team" class="flex items-center p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-700">
                                <div class="p-2 mr-4 bg-white rounded-lg shadow dark:bg-zinc-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Team Management</div>
                                    <div class="text-sm font-light text-zinc-500 dark:text-zinc-400">Add Members to the team and remove them.</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
