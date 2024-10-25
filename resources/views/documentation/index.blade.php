@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-zinc-900 dark:text-white">How can we help you?</h2>
                <p class="mb-8 font-light text-zinc-500 sm:text-xl dark:text-zinc-500">Here are a few of the questions we get the most. If you don't see what's on your mind, reach out to us anytime on phone, chat, or email.</p>
                <label for="email-adress-icon" class="block mb-2 text-sm font-medium text-zinc-900 sr-only dark:text-zinc-300">Your Email</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-6 h-6 text-zinc-500 dark:text-zinc-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <form action="{{ route('documentation.search') }}" method="GET" class="mb-6">
                        <input type="text" name="query" class="block p-4 pl-12 w-full text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type keywords to find answers">
                    </form>
                </div>
                <p class="mt-4 text-sm text-zinc-500 dark:text-zinc-400">You can also browse the topics below to find what you are looking for.</p>
            </div>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="p-4 rounded shadow dark:bg-zinc-800">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-blue-100 dark:bg-blue-900 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-4 text-xl font-bold dark:text-white">General Articles</h3>
                    <ul role="list" class="mb-4 space-y-3 text-zinc-500 dark:text-zinc-400">
                        <li>
                            <a href="#" class="hover:underline">Test Link</a>
                        </li>
                    </ul>
                    <a href="{{ route('documentation.general.index') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                </div>
                <div class="p-4 rounded shadow dark:bg-zinc-800">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-blue-100 dark:bg-blue-900 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-4 text-xl font-bold dark:text-white">Game Articles</h3>
                    <ul role="list" class="mb-4 space-y-3 text-zinc-500 dark:text-zinc-400">
                        <li>
                            <a href="#" class="hover:underline">Test Link</a>
                        </li>

                    </ul>
                    <a href="{{ route('documentation.games') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                </div>
                <div class="p-4 rounded shadow dark:bg-zinc-800">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-blue-100 dark:bg-blue-900 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 3.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 9H10a3 3 0 013 3v1a1 1 0 102 0v-1a5 5 0 00-5-5H8.414l1.293-1.293z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-4 text-xl font-bold dark:text-white">Video Articles</h3>
                    <ul role="list" class="mb-4 space-y-4 text-zinc-500 dark:text-zinc-400">
                        <li>
                            <a href="#" class="hover:underline">Test Link</a>
                        </li>
                    </ul>
                    <a href="{{ route('documentation.videos') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                </div>
                <div class="p-4 rounded shadow dark:bg-zinc-800">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-blue-100 dark:bg-blue-900 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-4 text-xl font-bold dark:text-white">FAQs</h3>
                    <ul role="list" class="mb-4 space-y-3 text-zinc-500 dark:text-zinc-400">
                        <li>
                            <a href="#" class="hover:underline">Test Link</a>
                        </li>
                    </ul>
                    <a href="{{ route('documentation.faq') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">See all</a>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>

@endsection
