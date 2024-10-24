@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <aside aria-label="Related articles" class="py-8 bg-white lg:py-16 dark:bg-zinc-900 antialiased">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-zinc-900 dark:text-white">Read Next</h2>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($news as $item)
                <article class="p-4 mx-auto max-w-sm bg-white rounded-lg shadow-md border border-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 dark:border-zinc-700">
                    <a href="{{ url('news', $item->id) }}">
                        <img class="mb-5 rounded-lg" src="{{ $item->news_logo ? asset('storage/' . $item->news_logo) : 'default-logo.jpg' }}" alt="{{ $item->title }}">
                    </a>
                    <div class="flex items-center mb-3 space-x-2">
                        <div class="font-medium dark:text-white">
                            <div>{{ $item->author->name }}</div>
                            <div class="text-sm font-normal text-zinc-500 dark:text-zinc-400">Average Rating: {{ $newsItem->average_rating ?? 'No ratings yet' }}</div>
                        </div>
                    </div>
                    <h3 class="mb-2 text-xl font-bold tracking-tight text-zinc-900 lg:text-2xl dark:text-white">
                        <a>{{ $item->title }}</a>
                    </h3>
                    <p class="mb-3 text-zinc-500 dark:text-zinc-400">{{ $item->description }}</p>
                    <a href="{{ url('news', $item->id) }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 dark:text-blue-500 hover:no-underline">
                        Read more <svg class="mt-px ml-1 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                    </a>
                </article>
                @endforeach
            </div>
        </div>
    </aside>

    <x-footer/>
@endsection
