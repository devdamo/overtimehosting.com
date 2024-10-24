@extends('layouts.wrapper')
@section('title', 'RoadMap')
@section('content')

    @include('layouts.navigation')
    <section class="bg-white py-8 antialiased dark:bg-zinc-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 space-y-6">
            <h2 class="text-xl font-semibold text-zinc-900 dark:text-white sm:text-2xl">Road Map</h2>

            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                @foreach ($roadmaps as $roadmap)
                    <div class="card mt-4">
                        <div class="card-body">
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $roadmap->section_number }}</time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $roadmap->title }}</h3>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $roadmap->body }}</p>
                            </li>
                        </div>
                    </div>
            @endforeach
            </ol>
            <div class="mt-6 sm:mt-8">
                <p class="text-lg font-normal text-zinc-500 dark:text-zinc-400">
                    Wanna Know how its going?
                    <a href="https://discord.gg/Y3wt6T7tgf" title="" class="font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">Join our Discord!</a>
                </p>
            </div>
        </div>
    </section>

    <x-footer/>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@endsection
