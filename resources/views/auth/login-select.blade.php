@extends('layouts.wrapper')

@section('content')
    <section class="py-8 bg-white dark:bg-zinc-900 lg:py-0">
        <div class="lg:flex">
            <div class="hidden w-full max-w-md p-12 lg:h-screen lg:block bg-blue-600">
                <div class="flex items-center mb-8 space-x-4">
                    <a href="/" class="flex items-center text-2xl font-semibold text-white">
                        OverTimeHosting
                    </a>
                </div>
                <div class="block p-8 text-white rounded-lg bg-blue-500">
                    <h2 class="mb-1 text-2xl font-semibold">OTH Basic</h2>
                    <p class="mb-4 font-light text-blue-100 sm:text-lg">£20 /month</p>
                    <!-- List -->
                    <ul role="list" class="space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Multiple Game servers</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Plugin Managers</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Team size: <span class="font-semibold">3</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Premium support</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Free updates</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center mx-auto md:w-[42rem] px-4 md:px-8 xl:px-0">
                <div class="w-full">
                    <div class="flex items-center justify-center mb-8 space-x-4 lg:hidden">
                        <a href="/" class="flex items-center text-2xl font-semibold">
                            <span class="text-zinc-900 dark:text-white">OverTimeHosting</span>
                        </a>
                    </div>
                    <ol class="flex items-center mb-6 text-sm font-medium text-center text-zinc-500 dark:text-zinc-400 lg:mb-12 sm:text-base">
                        <li class="flex items-center after:content-[''] after:w-12 after:h-1 after:border-b after:border-blue-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-blue-700">
                            <div class="flex items-center sm:block after:content-['/'] sm:after:hidden after:mx-2 after:font-light after:text-blue-200 dark:text-blue-500">
                                <div class="mr-2 sm:mb-2 sm:mx-auto">1</div>
                                Found <span class="hidden sm:inline-flex">Login Page</span>
                            </div>
                        </li>
                        <li class="flex items-center sm:block">
                            <div class="mr-2 sm:mb-2 sm:mx-auto">2</div>
                            Logged in
                        </li>
                    </ol>
                    <h1 class="mb-4 text-2xl font-extrabold leading-tight tracking-tight text-zinc-900 sm:mb-6 dark:text-white">How are you today ?</h1>
                    <p class="mb-4 text-lg font-light text-zinc-500 dark:text-zinc-400">Are you a customer or staff?</p>
                    <form action="{{ route('redirect-login') }}" method="POST">
                        @csrf
                        <ul class="mb-6 space-y-4 sm:space-y-6">
                            <li>
                                <input type="radio" id="admin" name="login_type" value="admin" class="hidden peer" required>
                                <label for="admin" class="inline-flex items-center justify-center w-full p-5 text-zinc-500 border-2 border-zinc-200 rounded-lg cursor-pointer dark:hover:text-zinc-300 dark:border-zinc-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 bg-zinc-50 hover:text-zinc-600 hover:bg-zinc-100 dark:text-zinc-400 dark:bg-zinc-800 dark:hover:bg-zinc-700">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path></svg>
                                    <span class="w-full">Admin Sign-in</span>
                                    <svg class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="user" name="login_type" value="user" class="hidden peer">
                                <label for="user" class="inline-flex items-center justify-center w-full p-5 text-zinc-500 border-2 border-zinc-200 rounded-lg cursor-pointer dark:hover:text-zinc-300 dark:border-zinc-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 bg-zinc-50 hover:text-zinc-600 hover:bg-zinc-100 dark:text-zinc-400 dark:bg-zinc-800 dark:hover:bg-zinc-700">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="w-full">Customer Sign-in</span>
                                    <svg class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </label>
                            </li>
                        </ul>
                        <button class="w-full px-5 py-2.5 sm:py-3.5 text-sm font-medium text-center text-white rounded-lg bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proceed</button>
                    </form>
                    <p class="mt-4 text-sm font-light text-zinc-500 dark:text-zinc-400">
                        Are you a customer and don't have an account? <a href="https://othstore.net/auth/register" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Register here</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
