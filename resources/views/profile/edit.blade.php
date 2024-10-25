@section('title', 'Account Settings')
<x-app-layout>
    <main>
        <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-zinc-900">
            <div class="mb-4 col-span-full xl:mb-2">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-zinc-700 hover:text-blue-600 dark:text-zinc-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-zinc-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <a href="/dashboard" class="ml-1 text-zinc-700 hover:text-blue-600 md:ml-2 dark:text-zinc-300 dark:hover:text-white">Dashboard</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-zinc-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-1 text-zinc-400 md:ml-2 dark:text-zinc-500" aria-current="page">Account Settings</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-zinc-900 sm:text-2xl dark:text-white">User settings</h1>
            </div>
            <!-- Right Content -->
            <div class="col-span-full xl:col-auto">
                <div class="p-4 mb-4 bg-white border border-zinc-200 rounded-lg shadow-sm dark:border-zinc-700 sm:p-6 dark:bg-zinc-800">
                    <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                        <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green-2x.png' }}" alt="{{ $user->name }} picture">
                        <div>
                            <h3 class="mb-1 text-xl font-bold text-zinc-900 dark:text-white">Profile picture</h3>
                            <div class="mb-4 text-sm text-zinc-500 dark:text-zinc-400">
                                JPG, GIF or PNG. Max size of 800K
                            </div>
                            <div class="flex items-center space-x-4">
                                <form action="{{ route('profile.updateAvatar') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="avatar" accept="image/*" class="mb-4 block w-full text-sm text-zinc-900 border border-zinc-300 rounded-lg cursor-pointer bg-zinc-50 dark:text-zinc-400 focus:outline-none dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400" aria-describedby="file_input_help" id="file_input" type="file">
                                    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path></svg>
                                        Upload picture
                                    </button>
                                </form>
                                <form action="{{ route('profile.deleteAvatar') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-2 px-3 text-sm font-medium text-zinc-900 focus:outline-none bg-white rounded-lg border border-zinc-200 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-zinc-200 dark:focus:ring-zinc-700 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">
                                        Delete
                                    </button>
                                </form>
                            </div>
                            @if (session('status'))
                                <div class="mt-4 text-sm text-green-500">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="p-4 mb-4 bg-white border border-zinc-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-zinc-700 sm:p-6 dark:bg-zinc-800">
                    <div class="flow-root">
                        <h3 class="text-xl font-semibold dark:text-white">Social accounts</h3>
                        <ul class="divide-y divide-zinc-200 dark:divide-zinc-700">
                            <li class="py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 dark:text-white" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                <span class="block text-base font-semibold text-zinc-900 truncate dark:text-white">
                                    Facebook account
                                </span>
                                        <a href="#" class="block text-sm font-normal truncate text-blue-700 hover:underline dark:text-blue-500">
                                            www.facebook.com/themesberg
                                        </a>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <a href="#" class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-zinc-900 bg-white border border-zinc-300 rounded-lg hover:bg-zinc-100 focus:ring-4 focus:ring-blue-300 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">Disconnect</a>
                                    </div>
                                </div>
                            </li>
                            <li class="py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 dark:text-white" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                <span class="block text-base font-semibold text-zinc-900 truncate dark:text-white">
                                    Twitter account
                                </span>
                                        <a href="#" class="block text-sm font-normal truncate text-blue-700 hover:underline dark:text-blue-500">
                                            www.twitter.com/themesberg
                                        </a>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <a href="#" class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-zinc-900 bg-white border border-zinc-300 rounded-lg hover:bg-zinc-100 focus:ring-4 focus:ring-blue-300 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">Disconnect</a>
                                    </div>
                                </div>
                            </li>
                            <li class="py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 dark:text-white" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                <span class="block text-base font-semibold text-zinc-900 truncate dark:text-white">
                                    Github account
                                </span>
                                        <span class="block text-sm font-normal text-zinc-500 truncate dark:text-zinc-400">
                                    Not connected
                                </span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <a href="#" class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Connect</a>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-4 pb-6">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 dark:text-white" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="dribbble" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                <span class="block text-base font-semibold text-zinc-900 truncate dark:text-white">
                                    Dribbble account
                                </span>
                                        <span class="block text-sm font-normal text-zinc-500 truncate dark:text-zinc-400">
                                    Not connected
                                </span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <a href="#" class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Connect</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div>
                            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                        </div>
                    </div>
                </div>
                <div class="p-4 mb-4 bg-white border border-zinc-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-zinc-700 sm:p-6 dark:bg-zinc-800">
                    <div class="flow-root">
                        <h3 class="text-xl font-semibold dark:text-white">Other accounts</h3>
                        <ul class="mb-6 divide-y divide-zinc-200 dark:divide-zinc-700">
                            <li class="py-4">
                                <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                                    <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                        <div>
                                            <img class="w-6 h-6 rounded-full" src="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green.png" alt="Bonnie image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-base font-semibold text-zinc-900 leading-none truncate mb-0.5 dark:text-white">
                                                Bonnie Green
                                            </p>
                                            <p class="mb-1 text-sm font-normal truncate text-blue-700 dark:text-blue-500">
                                                New York, USA
                                            </p>
                                            <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">
                                                Last seen: 1 min ago
                                            </p>
                                        </div>
                                    </div>
                                    <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                        <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-zinc-900 bg-white border border-zinc-300 rounded-lg hover:bg-zinc-100 focus:ring-4 focus:ring-blue-300 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">Disconnect</a>
                                    </div>
                                </div>
                            </li>
                            <li class="py-4">
                                <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                                    <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                        <div>
                                            <img class="w-6 h-6 rounded-full" src="https://flowbite-admin-dashboard.vercel.app/images/users/jese-leos.png" alt="Jese image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-base font-semibold text-zinc-900 leading-none truncate mb-0.5 dark:text-white">
                                                Jese Leos
                                            </p>
                                            <p class="mb-1 text-sm font-normal truncate text-blue-700 dark:text-blue-500">
                                                California, USA
                                            </p>
                                            <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">
                                                Last seen: 2 min ago
                                            </p>
                                        </div>
                                    </div>
                                    <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                        <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-zinc-900 bg-white border border-zinc-300 rounded-lg hover:bg-zinc-100 focus:ring-4 focus:ring-blue-300 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">Disconnect</a>
                                    </div>
                                </div>
                            </li>
                            <li class="py-4">
                                <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                                    <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                        <div>
                                            <img class="w-6 h-6 rounded-full" src="https://flowbite-admin-dashboard.vercel.app/images/users/thomas-lean.png" alt="Thomas image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-base font-semibold text-zinc-900 leading-none truncate mb-0.5 dark:text-white">
                                                Thomas Lean
                                            </p>
                                            <p class="mb-1 text-sm font-normal truncate text-blue-700 dark:text-blue-500">
                                                Texas, USA
                                            </p>
                                            <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">
                                                Last seen: 1 hour ago
                                            </p>
                                        </div>
                                    </div>
                                    <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                        <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-zinc-900 bg-white border border-zinc-300 rounded-lg hover:bg-zinc-100 focus:ring-4 focus:ring-blue-300 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">Disconnect</a>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-4">
                                <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                                    <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                        <div>
                                            <img class="w-6 h-6 rounded-full" src="https://flowbite-admin-dashboard.vercel.app/images/users/lana-byrd.png" alt="Lana image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-base font-semibold text-zinc-900 leading-none truncate mb-0.5 dark:text-white">
                                                Lana Byrd
                                            </p>
                                            <p class="mb-1 text-sm font-normal truncate text-blue-700 dark:text-blue-500">
                                                Texas, USA
                                            </p>
                                            <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400">
                                                Last seen: 1 hour ago
                                            </p>
                                        </div>
                                    </div>
                                    <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                        <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-zinc-900 bg-white border border-zinc-300 rounded-lg hover:bg-zinc-100 focus:ring-4 focus:ring-blue-300 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">Disconnect</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div>
                            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="p-4 mb-4 bg-white border border-zinc-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-zinc-700 sm:p-6 dark:bg-zinc-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Full Name</label>
                                <input id="name" name="name" type="text" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DAMO IS COOL" value="{{ auth()->user()->name }}" required autofocus autocomplete="name">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Email</label>
                                <input id="email" name="email" type="email" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" value="{{ auth()->user()->email }}" required autocomplete="username">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="role" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Role</label>
                                <input type="text" name="role" id="role" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="dev" >
                            </div>
                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                <div>
                                    <p class="text-sm mt-2 text-zinc-800 dark:text-zinc-200">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification" class="underline text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif

                            <div class="col-span-6 sm:col-full">
                                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Save all</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="p-4 mb-4 bg-white border border-zinc-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-zinc-700 sm:p-6 dark:bg-zinc-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Password information</h3>
                    <form method="post" action="{{ route('password.update') }}" data-bitwarden-watching="1">
                        @csrf
                        @method('put')

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="current-password" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Current password</label>
                                <input id="update_password_current_password" name="current_password" type="password" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="password" placeholder="••••••••" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">New password</label>
                                <input data-popover-target="popover-password" data-popover-placement="bottom" id="update_password_password" name="password" type="password" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="new-password" placeholder="••••••••" required="">
                                <div data-popover="" id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-zinc-500 transition-opacity duration-300 bg-white border border-zinc-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-zinc-800 dark:border-zinc-600 dark:text-zinc-400" data-popper-reference-hidden="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1213px, -1382px);">
                                    <div class="p-3 space-y-2">
                                        <h3 class="font-semibold text-zinc-900 dark:text-white">Must have at least 6 characters</h3>
                                        <p>It’s better to have:</p>
                                        <ul>
                                            <li class="flex items-center mb-1">
                                                Upper &amp; lower case letters
                                            </li>
                                            <li class="flex items-center mb-1">
                                                A symbol (#$&amp;)
                                            </li>
                                            <li class="flex items-center">
                                                A longer password (min. 12 chars.)
                                            </li>
                                        </ul>
                                    </div>
                                    <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(139px, 0px);"></div>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="confirm-password" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Confirm password</label>
                                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="new-password" placeholder="••••••••" required="">
                            </div>
                            <div class="col-span-6 sm:col-full">
                                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Save all</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="p-4 mb-4 bg-white border border-zinc-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-zinc-700 sm:p-6 dark:bg-zinc-800">
                    <h3 class="mb-2 text-xl font-semibold dark:text-white">Delete Account</h3>
                    <p class="pb-2 text-base font-semibold text-zinc-900 leading-none truncate mb-0.5 dark:text-white">By confirming this action your account will be completely lost</p>
                    <div class="grid grid-cols-6 gap-6">
                        <button id="deleteFormButton" data-modal-target="deleteFormModal" data-modal-toggle="deleteFormModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">delete account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="deleteFormModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-zinc-800">
                <div class="flex justify-between items-center py-4 px-4 sm:px-5">
                    <h3 class="text-lg font-semibold leading-none text-zinc-900 dark:text-white">Are you sure?</h3>
                    <button type="button" class="text-zinc-400 bg-transparent absolute top-2.5 right-2.5 hover:bg-zinc-200 hover:text-zinc-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="deleteFormModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <p class="py-4 px-4 font-light text-orange-700 bg-orange-100 border-t border-b border-orange-200 sm:px-5 dark:border-zinc-600 dark:bg-zinc-700 dark:text-orange-300">Unexpected bad things can happen if you don’t read this!</p>
                <div class="py-4 px-4 sm:px-5 sm:py-5">
                    <p class="font-light text-zinc-500 dark:text-zinc-400">This action <span class="font-semibold text-zinc-900 dark:text-white">CANNOT</span> be undone. This will permanently delete the <span class="font-semibold text-zinc-900 dark:text-white">{{ auth()->user()->name }}</span> account.</p>
                    <form method="post" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')

                        <div class="mt-2 mb-4">
                            <label for="repository-name-input" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Please type in the password of the account to confirm.</label>
                            <input id="password" name="password" type="password" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="••••••••">
                        </div>
                        <button type="submit" class="justify-center py-2 px-3 w-full text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                            I understand, delete account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
