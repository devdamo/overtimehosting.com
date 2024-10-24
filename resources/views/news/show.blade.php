<head>
    <!-- Primary Meta Tags -->
    <title>OverTimeHosting - {{ $newsItem->title }}</title>
    <meta name="title" content="{{ $newsItem->title }}" />
    <meta name="description" content="{{ Str::limit(strip_tags($newsItem->content), 150) }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="{{ $newsItem->title }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($newsItem->content), 150) }}">
    <meta property="og:image" content="{{ asset('storage/' . $newsItem->bg_image) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $newsItem->title }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($newsItem->content), 150) }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $newsItem->bg_image) }}">
</head>




@extends('layouts.wrapper')

@section('content')

@include('layouts.navigation')


<main class="pb-16 lg:pb-24 bg-white dark:bg-zinc-900 antialiased">
    <header class="bg-[url('{{ $newsItem->bg_image ? asset('storage/' . $newsItem->bg_image) : 'default-logo.jpg' }}')] w-full h-[460px] xl:h-[537px] bg-no-repeat bg-cover bg-center bg-blend-darken relative">
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50"></div>
        <div class="absolute top-20 left-1/2 px-4 mx-auto w-full max-w-screen-xl -translate-x-1/2 xl:top-1/2 xl:-translate-y-1/2 xl:px-0">
            <span class="block mb-4 text-zinc-300">Published on <a href="https://overtimehosting.com/" class="font-semibold text-white hover:underline">OverTimeHosting</a></span>
            <h1 class="mb-4 max-w-4xl text-2xl font-extrabold leading-none text-white sm:text-3xl lg:text-4xl">{{ $newsItem->title }}</h1>
            <p class="text-lg font-normal text-zinc-300">{{ $newsItem->description }}</p>
        </div>
    </header>
    <div class="flex relative z-20 justify-between p-6 -m-36 mx-4 max-w-screen-xl bg-white dark:bg-zinc-800 rounded xl:-m-32 xl:p-9 xl:mx-auto">
        <article class="xl:w-[828px] w-full max-w-none format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <div class="flex flex-col lg:flex-row justify-between lg:items-center">
                <div class="flex items-center space-x-3 text-zinc-500 dark:text-zinc-400 text-base mb-2 lg:mb-0">
                    <span>By <a class="text-zinc-900 dark:text-white hover:underline no-underline font-semibold">{{ $newsItem->author->name }}</a></span>
                    <span class="bg-zinc-300 dark:bg-zinc-400 w-2 h-2 rounded-full"></span>
                    <span><time class="font-normal text-zinc-500 dark:text-zinc-400" pubdate class="uppercase" datetime="2022-03-08" title="August 3rd, 2022">August 3, 2022, 2:20am EDT</time></span>
                </div>
                <aside aria-label="Share social media">
                    <div class="not-format">
                        <button data-tooltip-target="tooltip-facebook" class="inline-flex items-center p-2 text-sm font-medium text-center text-zinc-500 bg-white rounded-lg hover:bg-zinc-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-zinc-50 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-600" type="button">
                            <svg class="w-5 h-5 text-zinc-500 dark:text-zinc-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div id="tooltip-facebook" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-zinc-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-zinc-700">
                            Share on Facebook
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-twitter" class="inline-flex items-center p-2 text-sm font-medium text-center text-zinc-500 bg-white rounded-lg hover:bg-zinc-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-zinc-50 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-600" type="button">
                            <svg class="w-5 h-5 text-zinc-500 dark:text-zinc-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
                            </svg>
                        </button>
                        <div id="tooltip-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-zinc-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-zinc-700">
                            Share on Twitter
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-reddit" class="inline-flex items-center p-2 text-sm font-medium text-center text-zinc-500 bg-white rounded-lg hover:bg-zinc-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-zinc-50 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-600" type="button">
                            <svg class="w-5 h-5 text-zinc-500 dark:text-zinc-400" aria-hidden="true" viewBox="0 0 18 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_13676_82300)">
                                    <path d="M9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18Z" />
                                    <path d="M15.0004 8.99997C15.0004 8.27365 14.411 7.68418 13.6846 7.68418C13.3267 7.68418 13.011 7.82102 12.7794 8.0526C11.8846 7.41049 10.6425 6.98944 9.27412 6.93681L9.87412 4.12628L11.8215 4.53681C11.8425 5.03155 12.2531 5.43155 12.7583 5.43155C13.2741 5.43155 13.6952 5.01049 13.6952 4.4947C13.6952 3.97891 13.2741 3.55786 12.7583 3.55786C12.3899 3.55786 12.0741 3.76839 11.9267 4.08418L9.7478 3.62102C9.68464 3.61049 9.62148 3.62102 9.56885 3.6526C9.51622 3.68418 9.48464 3.73681 9.46359 3.79997L8.80043 6.93681C7.40043 6.97891 6.1478 7.38944 5.24254 8.0526C5.01096 7.83155 4.68464 7.68418 4.33727 7.68418C3.61096 7.68418 3.02148 8.27365 3.02148 8.99997C3.02148 9.53681 3.33727 9.98944 3.80043 10.2C3.77938 10.3263 3.76885 10.4631 3.76885 10.6C3.76885 12.621 6.11622 14.2526 9.02149 14.2526C11.9267 14.2526 14.2741 12.621 14.2741 10.6C14.2741 10.4631 14.2636 10.3368 14.2425 10.2105C14.6741 9.99997 15.0004 9.53681 15.0004 8.99997ZM6.00043 9.93681C6.00043 9.42102 6.42148 8.99997 6.93727 8.99997C7.45306 8.99997 7.87412 9.42102 7.87412 9.93681C7.87412 10.4526 7.45306 10.8737 6.93727 10.8737C6.42148 10.8737 6.00043 10.4526 6.00043 9.93681ZM11.232 12.4105C10.5899 13.0526 9.36885 13.0947 9.01096 13.0947C8.65306 13.0947 7.42148 13.0421 6.7899 12.4105C6.69517 12.3158 6.69517 12.1579 6.7899 12.0631C6.88464 11.9684 7.04254 11.9684 7.13727 12.0631C7.53727 12.4631 8.40043 12.6105 9.02149 12.6105C9.64254 12.6105 10.4952 12.4631 10.9057 12.0631C11.0004 11.9684 11.1583 11.9684 11.2531 12.0631C11.3267 12.1684 11.3267 12.3158 11.232 12.4105ZM11.0636 10.8737C10.5478 10.8737 10.1267 10.4526 10.1267 9.93681C10.1267 9.42102 10.5478 8.99997 11.0636 8.99997C11.5794 8.99997 12.0004 9.42102 12.0004 9.93681C12.0004 10.4526 11.5794 10.8737 11.0636 10.8737Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13676_82300">
                                        <rect width="18" height="18" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <div id="tooltip-reddit" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-zinc-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-zinc-700">
                            Post on Reddit
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-tooltip-target="tooltip-link" class="inline-flex items-center p-2 text-sm font-medium text-center text-zinc-500 bg-white rounded-lg hover:bg-zinc-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-zinc-50 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-600" type="button">
                            <svg class="w-5 h-5 text-zinc-500 dark:text-zinc-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.013 7.962a3.519 3.519 0 0 0-4.975 0l-3.554 3.554a3.518 3.518 0 0 0 4.975 4.975l.461-.46m-.461-4.515a3.518 3.518 0 0 0 4.975 0l3.553-3.554a3.518 3.518 0 0 0-4.974-4.975L10.3 3.7"/>
                            </svg>
                        </button>
                        <div id="tooltip-link" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-zinc-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-zinc-700">
                            Share link
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </aside>
            </div>


            <div class="space-y-6 text-zinc-500 dark:text-white mb-4">
                {!! $newsItem->body !!}
            </div>

            <section class="not-format">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg lg:text-2xl font-bold text-zinc-900 dark:text-white">Discussions</h2>
                </div>

                @auth()
                    <form class="mb-6" method="POST" action="{{ route('news.comment.store', $newsItem->id) }}">
                        @csrf
                        <div class="mb-4 w-full bg-zinc-50 rounded-lg border border-zinc-200 dark:bg-zinc-700 dark:border-zinc-600">
                            <div class="py-2 px-4 bg-zinc-50 rounded-t-lg dark:bg-zinc-800">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea name="content" rows="6" class="px-0 w-full text-sm text-zinc-900 bg-zinc-50 border-0 dark:bg-zinc-800 focus:ring-0 dark:text-white dark:placeholder-zinc-400" placeholder="Write a comment..." required></textarea>
                            </div>
                            <div class="flex justify-between items-center py-2 px-3 border-t dark:border-zinc-600">
                                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Post comment
                                </button>
                            </div>
                        </div>
                    </form>
                @endauth
                @guest()

                <div class="xt-lg lg:text-2xl font-bold text-zinc-900 dark:text-white p-5">
                    <h3 class="">Login to post comments. <a class="text-red-600" href="{{ route('login') }}">Login here</a> </h3>
                </div>
                @endguest

                @foreach($newsItem->comments as $comment)
                <article class="p-6 mb-6 text-base bg-zinc-50 rounded-lg dark:bg-zinc-700">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="text-sm text-zinc-600 dark:text-zinc-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                        </div>
                    </footer>
                    <p class="text-zinc-500 dark:text-zinc-400">{{ $comment->content }}</p>
                </article>
                @endforeach


            </section>
        </article>
        <aside class="hidden xl:block" aria-labelledby="sidebar-label">
            <div class="xl:w-[336px] sticky top-6">
                <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                <div class="mb-12">
                    <h4 class="mb-4 text-sm font-bold text-zinc-900 dark:text-white uppercase">Latest news</h4>


@foreach($relatedNews as $item)
                    <div class="mb-6 flex items-center">
                        <a href="{{ url('news', $item->id) }}" class="shrink-0">
                            <img src="{{ $item->news_logo ? asset('storage/' . $item->news_logo) : 'default-logo.jpg' }}" class="mr-4 max-w-full w-24 h-24 rounded-lg" alt="Image 1">
                        </a>
                        <div>
                            <h5 class="mb-2 text-lg font-bold leading-tight dark:text-white text-zinc-900">{{ $newsItem->title }}</h5>
                            <p class="mb-2 text-zinc-500 dark:text-zinc-400">{{ $newsItem->description }}</p>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">
                            <svg aria-hidden="true" class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>
                            {{ $item->tag }}
                        </span>
                        </div>

                    </div>
@endforeach

                    <h4 class="mb-4 text-sm font-bold text-zinc-900 dark:text-white uppercase">Current Rating</h4>
                    <div class="flex items-center justify-between mb-2">
                        <form method="POST" action="{{ url('news/'.$newsItem->id.'/rate') }}">
                            @csrf
                            <button name="stars" value="1" type="submit" class="py-2 px-3 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">
                                <svg class="w-6 h-6 text-zinc-800 dark:text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                </svg>
                                <span class="text-zinc-500 dark:text-zinc-400 text-sm font-medium">1</span>
                            </button>
                            <button name="stars" value="2" type="submit" class="py-2 px-3 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">
                                <svg class="w-6 h-6 text-zinc-800 dark:text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                </svg>
                                <span class="text-zinc-500 text-sm font-medium dark:text-zinc-400">2</span>
                            </button>
                            <button name="stars" value="3" type="submit" class="py-2 px-3 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">
                                <svg class="w-6 h-6 text-zinc-800 dark:text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                </svg>
                                <span class="text-zinc-500 text-sm font-medium dark:text-zinc-400">3</span>
                            </button>
                            <button name="stars" value="4" type="submit" class="py-2 px-3 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">
                                <svg class="w-6 h-6 text-zinc-800 dark:text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                </svg>
                                <span class="text-zinc-500 text-sm font-medium dark:text-zinc-400">4</span>
                            </button>
                            <button name="stars" value="5" type="submit" class="py-2 px-3 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">
                                <svg class="w-6 h-6 text-zinc-800 dark:text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                </svg>
                                <span class="text-zinc-500 text-sm font-medium dark:text-zinc-400">5</span>
                            </button>
                        </form>
                    </div>
                    <h2 class="font-bold text-zinc-900 dark:text-white">Average Rating: {{ $newsItem->average_rating ?? 'No ratings yet' }}</h2>
                </div>
            </div>
        </aside>
    </div>
</main>

<aside aria-label="Related articles" class="py-8 lg:py-24 bg-white dark:bg-zinc-900">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-6 lg:mb-8 text-2xl font-bold text-zinc-900 dark:text-white">Read Next</h2>
        <div class="grid gap-6 lg:gap-12 md:grid-cols-2">

            @foreach($relatedNews as $item) <!-- Use $relatedNews -->
                    <article class="flex flex-col xl:flex-row">
                        <a href="{{ url('news', $item->id) }}" class="mb-2 xl:mb-0">
                            <img src="{{ $item->news_logo ? asset('storage/' . $item->news_logo) : 'default-logo.jpg' }}" class="mr-5 max-w-sm" alt="Image 4">
                        </a>
                        <div class="flex flex-col justify-center">
                            <h2 class="mb-2 text-xl font-bold leading-tight text-zinc-900 dark:text-white">
                                <a href="{{ url('news', $item->id) }}">{{ $item->title }}</a>
                            </h2>
                            <a href="{{ url('news', $item->id) }}" class="inline-flex items-center font-medium underline underline-offset-4 text-blue-600 dark:text-blue-500 hover:no-underline">
                                {{ $item->description }}
                            </a>
                        </div>
                    </article>
            @endforeach

        </div>
    </div>
</aside>

<link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>


<!-- Footer -->
<x-footer/>

@endsection
