@extends('layouts.wrapper')
@section('title', 'Legal')
@section('content')

    @include('layouts.navigation')

    <section class="border-b border-zinc-100 bg-zinc-50 dark:bg-zinc-800 dark:border-zinc-700">
        <div class="max-w-screen-xl px-4 py-6 mx-auto">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2 md:space-x-4">
                    <li class="inline-flex items-center">
                        <a href="/"
                           class="inline-flex items-center text-sm font-medium text-zinc-700 hover:text-blue-600 dark:text-zinc-400 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-5 h-5 text-zinc-400" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-2 text-sm font-medium text-zinc-500 md:ml-4 dark:text-zinc-400">
                                {{ $page->title }}
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="mt-4 text-2xl font-bold text-zinc-900 dark:text-white">
                Effective Date: {{ $page->effective_date->format('F j, Y') }}
            </h1>
        </div>
    </section>

    <section class="bg-white dark:bg-zinc-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:pb-16">
            <div class="flex flex-col gap-12 lg:flex-row lg:items-start xl:gap-20">

                <div class="flex-1 min-w-0">

                    <div class="text-zinc-900 dark:text-white">{!! $page->content !!}</div>

                    <div class="p-6 mt-6 rounded-lg bg-gray-50 dark:bg-zinc-800">
                        <ol class="text-base font-normal text-zinc-500 dark:text-zinc-400 space-y-2.5 pl-5">
                            <li>
                                <span class="font-semibold text-zinc-900 dark:text-white">OverTimeHosting</span>
                            </li>
                            <li>
                                <span class="font-semibold text-zinc-900 dark:text-white">Northampton</span>
                            </li>
                            <li>
                                <span class="font-semibold text-zinc-900 dark:text-white">United Kingdom</span>
                            </li>
                            <li>
                                <span class="font-semibold text-zinc-900 dark:text-white">Email: contact@overtimehosting.com</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>

@endsection
