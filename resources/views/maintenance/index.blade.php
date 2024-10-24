@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900 antialiased">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
            <div class="max-w-3xl mx-auto space-y-4 text-center">
                <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-zinc-900 dark:text-white">
                    Service Maintenance Schedule
                </h2>
                <p class="text-xl font-medium leading-tight text-zinc-500 dark:text-zinc-400">
                    {{ \Carbon\Carbon::now()->setTimezone('Europe/London')->format('d M Y, H:i:s') }}
                </p>
                <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                    <svg aria-hidden="true" class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    London TIme (BST +1)
                </span>
            </div>

            <div class="grid grid-cols-1 mt-12 lg:mt-16 gap-y-12 gap-x-16">
                <div class="space-y-8">

                    <div>
                    @foreach ($maintenances as $maintenance)
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-stretch">
                            <p class="w-auto text-sm font-medium text-zinc-500 sm:text-right sm:w-32 dark:text-zinc-400 shrink-0">
                                {{ \Carbon\Carbon::parse($maintenance->start_date)->format('d M') }} - {{ \Carbon\Carbon::parse($maintenance->end_date)->format('d M') }}
                            </p>
                            <div class="hidden w-px bg-zinc-200 sm:shrink-0 dark:bg-zinc-700 sm:block"></div>
                            <div class="flex-1 pb-8 sm:pb-12">
                                <div class="p-4 space-y-4 bg-zinc-100 rounded-lg dark:bg-zinc-800">
                                    <h4 class="text-xl font-bold text-zinc-900 dark:text-white">
                                        <a href="#" class="hover:underline">Service Maintenance Scheduled</a>
                                    </h4>
                                    <div>
                                        <p class="text-zinc-500 dark:text-zinc-400 text-base font-normal">{{ $maintenance->service_name }}</p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-zinc-900 dark:text-white">
                                            <a href="#" class="hover:underline">Reason</a>
                                        </h4>
                                        <p class="text-zinc-500 dark:text-zinc-400 text-base font-normal">{{ $maintenance->reason }}</p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-zinc-900 dark:text-white">
                                            <a href="#" class="hover:underline">Priority</a>
                                        </h4>
                                        <p class="text-zinc-500 dark:text-zinc-400 text-base font-normal">
                                            @if ($maintenance->priority == 'low')
                                                <span class="text-green-600 font-semibold">Low</span>
                                            @elseif ($maintenance->priority == 'medium')
                                                <span class="text-yellow-600 font-semibold">Medium</span>
                                            @else
                                                <span class="text-red-600 font-semibold">High</span>
                                            @endif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>
@endsection

