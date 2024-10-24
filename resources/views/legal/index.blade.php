@extends('layouts.wrapper')
@section('title', 'Legal')
@section('content')

    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 ">
            <h2 class="mb-6 lg:mb-8 text-3xl lg:text-4xl tracking-tight font-extrabold text-center text-zinc-900 dark:text-white">{{ ucfirst($type) }} - Version History</h2>

            <div class="mx-auto max-w-screen-md">
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-zinc-900 text-zinc-900 dark:text-white" data-inactive-classes="text-zinc-500 dark:text-zinc-400">
                    @foreach($pages as $page)
                        @php
                            $day = \Carbon\Carbon::parse($page->effective_date)->format('d');
                            $month = \Carbon\Carbon::parse($page->effective_date)->format('m');
                        @endphp
                    <h2>
                        <a href="{{ route('legal.showByDate', ['type' => $type, 'day' => $day, 'month' => $month]) }}" class="flex justify-between items-center py-5 w-full font-medium text-left text-zinc-900 bg-white border-b border-zinc-200 dark:border-zinc-700 dark:bg-zinc-900 dark:text-white">
                            <span>View {{ ucfirst($type) }} for {{ $day }}-{{ $month }}</span>
                        </a>
                    </h2>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <x-footer/>

@endsection
