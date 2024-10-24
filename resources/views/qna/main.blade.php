@extends('layouts.wrapper')

@section('content')

@include('layouts.navigation')


<section class="bg-white py-8 antialiased dark:bg-zinc-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 space-y-6">
        <h2 class="text-xl font-semibold text-zinc-900 dark:text-white sm:text-2xl">General questions</h2>

        <div class="mt-6" id="accordion-flush" data-accordion="open" data-active-classes="bg-white dark:bg-zinc-900 text-zinc-900 dark:text-white" data-inactive-classes="text-zinc-500 dark:text-zinc-400">

            <h2 id="accordion-flush-heading-1">
                <button type="button" class="flex w-full items-center justify-between gap-3 border-b border-zinc-200 py-5 text-left text-xl font-semibold text-zinc-900 dark:border-zinc-700 dark:text-white" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span> DAMOO </span>
                    <svg data-accordion-icon class="h-5 w-5 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                <div class="space-y-4 border-b border-zinc-200 py-5 dark:border-zinc-700">
                    <div class="flex items-center gap-3">
                        <h3 class="text-base font-semibold text-zinc-900 dark:text-white">yoooo</h3>
                        <p class="text-sm font-normal text-zinc-500 dark:text-zinc-400">November 20 2023 • 12:45</p>
                    </div>
                    <p class="text-base font-normal text-zinc-500 dark:text-zinc-400">damooooooooooooooooooooooooooooooooo.</p>
                    <div class="flex items-center gap-4">
                        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Was it helpful to you?</p>
                        <div class="flex items-center">
                            <input id="general-radio-1" type="radio" value="" name="general-radio" class="h-4 w-4 border-zinc-300 bg-zinc-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-zinc-600 dark:bg-zinc-700 dark:ring-offset-zinc-800 dark:focus:ring-primary-600" />
                            <label for="general-radio-1" class="ms-2 text-sm font-medium text-zinc-900 dark:text-zinc-300"> Yes: 9 </label>
                        </div>
                        <div class="flex items-center">
                            <input id="general-radio-2" type="radio" value="" name="general-radio" class="h-4 w-4 border-zinc-300 bg-zinc-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-zinc-600 dark:bg-zinc-700 dark:ring-offset-zinc-800 dark:focus:ring-primary-600" />
                            <label for="general-radio-2" class="ms-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">No: 0 </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 sm:mt-8">
            <p class="text-lg font-normal text-zinc-500 dark:text-zinc-400">
                Didn't find the answer?
                <a href="#" title="" class="font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">Join our Discord!</a>
            </p>
        </div>
    </div>
</section>


    <!-- Footer -->
    <x-footer/>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@endsection
