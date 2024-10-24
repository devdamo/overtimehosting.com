<section class="bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/coast-house-view.jpg')] h-[204] bg-no-repeat bg-cover bg-center bg-zinc-700 bg-blend-multiply">
    <div class="relative py-8 px-4 mx-auto max-w-screen-xl text-white lg:py-16 xl:px-0 z-1">
        <div class="mb-6 max-w-screen-md lg:mb-0">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-tight text-white md:text-5xl lg:text-6xl">We Make game and web hosting easy!</h1>
            <p class="mb-6 font-light text-zinc-300 lg:mb-8 md:text-lg lg:text-xl">Start your game server affordably with our cost-effective solutions. Experience both reliability and value with our services. You can get started with a free month with some plans.</p>
        </div>
    </div>
</section>


<section class="bg-white dark:bg-zinc-900 antialiased">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-20">
            @foreach($news as $newsItem)
                @if($newsItem->id == 1)
            <article>
                <a href="{{ url('news', $newsItem->id) }}" title="">
                    <img class="object-cover w-full rounded-lg" src="{{ asset('storage/' . $newsItem->news_logo) }}" alt="{{ $newsItem->id }}">
                </a>
                <div class="mt-5 space-y-3">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                      <svg aria-hidden="true" class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                         <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      {{ $newsItem->tag }}
                    </span>
                    <h2 class="text-2xl font-bold leading-tight tracking-tight text-zinc-900 dark:text-white">
                        <a href="#" class="hover:underline" title="">
                            {{ $newsItem->title }}
                        </a>
                    </h2>
                    <p class="text-base font-normal text-zinc-500 dark:text-zinc-400">
                        {{ $newsItem->description }}
                    </p>
                    <a href="{{ url('news', $newsItem->id) }}" title=""
                       class="inline-flex items-center text-base font-semibold leading-tight text-blue-600 hover:underline dark:text-blue-500">
                        Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
                @endif
            @endforeach
            <div class="space-y-8">
                @foreach($news as $item)
                    @if($item->id != 1)
                <article>
                    <div class="space-y-3">
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">
                            <svg aria-hidden="true" class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>
                            {{ $item->tag }}
                        </span>
                        <h2 class="text-2xl font-bold leading-tight tracking-tight text-zinc-900 dark:text-white">
                            <a href="{{ url('news', $item->id) }}" class="hover:underline" title="">
                                {{ $item->title }}
                            </a>
                        </h2>
                        <p class="text-base font-normal text-zinc-500 dark:text-zinc-400">
                            {{ $item->description }}
                        </p>
                        <a href="{{ url('news', $item->id) }}" title="" class="inline-flex items-center text-base font-semibold leading-tight text-blue-600 hover:underline dark:text-blue-500">
                            Read more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
