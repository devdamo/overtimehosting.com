<!-- resources/views/components/advertisement.blade.php -->
@props(['advertisement'])

@if($advertisement->type === 'default')
    <!-- Default Discount Banner -->
    <div id="banner" tabindex="-1" class="fixed z-[10000] w-full items-start justify-between gap-8 border-b border-zinc-200 bg-zinc-50 px-4 py-3 dark:border-zinc-700 dark:bg-zinc-800 sm:items-center lg:py-4">
        <p class="mx-auto text-base text-zinc-500 dark:text-zinc-400">
            <span class="font-medium text-zinc-900 dark:text-white">{{ $advertisement->title }}</span> 🌟
            {{ $advertisement->content }}
            <a href="{{ $advertisement->cta_url }}" class="font-medium text-zinc-900 underline hover:no-underline dark:text-white">{{ $advertisement->cta_text }}</a>
        </p>
        <button data-collapse-toggle="banner" type="button" class="flex items-center rounded-lg p-1.5 text-sm text-zinc-400 hover:bg-zinc-200 hover:text-zinc-900 dark:hover:bg-zinc-600 dark:hover:text-white">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
@elseif($advertisement->type === 'illustration')
    <!-- Discount Banner with Illustration -->
    <div id="banner-2" tabindex="-1" class="fixed z-[10000] w-full items-start justify-between gap-8 border-b border-blue-200 bg-blue-50 px-4 py-3 dark:border-zinc-700 dark:bg-zinc-800 sm:items-center lg:py-4">
        <div class="mx-auto items-center sm:flex sm:space-x-4">
            <div class="mb-4 flex items-center text-sm text-blue-700 dark:text-blue-300 sm:mb-0 md:text-base">
                <img class="mx-auto h-12 pe-4 dark:hidden" src="{{ $advertisement->image_url }}" alt="{{ $advertisement->title }}" />
                <img class="mx-auto hidden h-12 pe-4 dark:block" src="{{ $advertisement->image_url }}" alt="{{ $advertisement->title }}" />
                <p class="border-blue-200 dark:border-zinc-700 sm:border-s sm:ps-4">
                    <span class="font-medium">{{ $advertisement->title }}</span> 🌟 {{ $advertisement->content }}
                </p>
            </div>
            <div class="flex items-center space-x-4 sm:shrink-0 sm:space-x-0">
                <a href="{{ $advertisement->cta_url }}" class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-3 py-2 text-center text-xs font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Shop Now</a>
            </div>
        </div>
    </div>
@elseif($advertisement->type === 'floating')
    <!-- Floating Discount Banner -->
    <div class="fixed z-[10000] left-1/2 -translate-x-1/2 max-w-screen-lg px-4 2xl:px-0 w-full py-4">
        <div id="banner-3" tabindex="-1" class="relative z-[10000] flex w-full items-start justify-between gap-8 rounded-lg border border-blue-200 bg-blue-50 px-4 py-3 dark:border-zinc-700 dark:bg-zinc-800 sm:items-center lg:py-4">
            <div class="items-center text-blue-700 dark:text-blue-300 sm:flex sm:space-x-3">
                <p class="border-blue-200 dark:border-zinc-700">
                    <span class="font-medium">{{ $advertisement->title }}</span> {{ $advertisement->content }}
                    <a href="{{ $advertisement->cta_url }}" class="inline-flex items-center font-medium hover:underline">{{ $advertisement->cta_text }}</a>
                </p>
            </div>
        </div>
    </div>
@elseif($advertisement->type === 'popup')
    <!-- Discount Corner Popup -->
    <div id="signup-popup" tabindex="-1" class="fixed z-[10000] top-0 left-0 right-0 w-full px-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-zinc-700 md:p-6 p-4">
                <div class="items-center space-y-4 sm:flex sm:space-y-0">
                    <img class="h-28 sm:mx-auto" src="{{ $advertisement->image_url }}" alt="{{ $advertisement->title }}" />
                    <div class="sm:ps-6">
                        <h3 class="mb-2 font-semibold text-zinc-900 dark:text-white">{{ $advertisement->title }}</h3>
                        <p class="mb-4 text-base leading-relaxed text-zinc-500 dark:text-zinc-400">{{ $advertisement->content }}</p>
                        <a href="{{ $advertisement->cta_url }}" class="inline-flex items-center font-medium text-blue-700 hover:underline dark:text-blue-500">{{ $advertisement->cta_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif($advertisement->type === 'pricing')
    <!-- Pricing Plan Modal -->
    <div id="pro-version-popup" tabindex="-1" class="fixed z-[10000] top-0 right-0 left-0 overflow-y-auto overflow-x-hidden w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="md:p-8 p-4 shadow dark:bg-zinc-800 rounded-lg bg-white">
                <h3 class="mb-4 text-xl font-semibold leading-none text-zinc-900 dark:text-white">{{ $advertisement->title }}</h3>
                <p class="mb-4 text-lg text-zinc-500 dark:text-white">{{ $advertisement->content }}</p>
                <div class="sm:flex items-center space-y-4 sm:space-x-4 sm:space-y-0">
                    <a href="{{ $advertisement->cta_url }}" class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800">{{ $advertisement->cta_text }}</a>
                </div>
            </div>
        </div>
    </div>
@endif
