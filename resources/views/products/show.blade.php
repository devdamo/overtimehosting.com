@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')
    <section class="bg-white py-8 antialiased dark:bg-zinc-800 md:pb-16 lg:pt-0 lg:dark:bg-zinc-900">
        <div class="hidden h-[448px] overflow-hidden lg:block">
            <img class="hidden h-full w-full object-cover dark:block" src="{{ asset('storage/' . $product->bg_logo) }}" alt="{{ $product->name }} logo" />
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 lg:-mt-48">
            <div class="border-zinc-200 bg-white shadow-sm dark:border-zinc-700 dark:bg-zinc-800 lg:rounded-lg lg:rounded-b-none lg:border lg:p-8">
                <div class="gap-12 lg:flex">
                    <div class="min-w-0 flex-1 gap-8 sm:flex sm:items-start">
                        <div class="shrink-0">
                            <div class="w-36 shrink-0 overflow-hidden rounded-lg">
                                <img class="h-full w-full object-cover" src="{{ asset('storage/' . $product->logo) }}" alt="{{ $product->name }} logo" />
                            </div>
                        </div>

                        <div class="mt-4 min-w-0 flex-1 sm:mt-0">
                            <span class="me-2 rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300"> Save £{{ $product->sale }} </span>

                            <h1 class="mt-4 text-2xl font-semibold text-zinc-900 dark:text-white">{{ $product->name }}</h1>

                            <div class="mt-4 flex flex-wrap items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center gap-1">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $product->star_rating)
                                                <!-- Filled star (yellow) -->
                                                <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                                </svg>
                                            @else
                                                <!-- Empty star (zinc) -->
                                                <svg class="h-4 w-4 dark:text-zinc-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                    <p class="text-sm font-medium leading-none text-zinc-500 dark:text-zinc-400">({{ $product->star_rating }} / 5)</p>
                                </div>
                            </div>

                            <div class="mt-4 hidden space-y-2 sm:block">
                                <p class="text-base font-semibold text-zinc-900 dark:text-white">Quick description:</p>
                                <div class="text-base font-normal text-zinc-500 dark:text-zinc-400">
                                    {!! $product->quick_description !!}
                                </div>
                                <p class="pt-4 text-base font-semibold text-zinc-900 dark:text-white">Important Info:</p>
                                <div class="text-base font-normal text-zinc-500 dark:text-zinc-400">
                                    {!! $product->important_info !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden border-zinc-200 dark:border-zinc-700 sm:mt-8 sm:block lg:hidden" />

                    <div class="mt-6 shrink-0 space-y-8 sm:mt-8 lg:mt-0 lg:w-full lg:max-w-xs">
                        <div>
                            <p class="text-2xl font-medium leading-none text-zinc-900 dark:text-white">Starting from <span class="font-extrabold">£{{ $product->price - $product->sale }}</span></p>
                            <p class="mt-2 text-base font-normal text-zinc-500 dark:text-zinc-400">Original price was £{{ $product->price }}</p>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-1">
                            <div class="space-y-4">

                                <a href="{{ $product->buy_now_url }}" title="" class="mt-4 flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:mt-0" role="button">
                                    <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>
                                    Buy now
                                </a>
                            </div>

                            <div class="sm:hidden">
                                <p class="text-base font-semibold text-zinc-900 dark:text-white lg:mt-4">Quick description:</p>
                                <div class="mt-2 space-y-4  text-base font-normal text-zinc-500 dark:text-zinc-400">
                                    {!! $product->quick_description !!}
                                </div>
                            </div>

                            <hr class="hidden border-zinc-200 dark:border-zinc-700 lg:block" />

                            <div class="text-base font-normal text-zinc-500 dark:text-zinc-400">
                                {!! $product->features !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-8 antialiased dark:bg-zinc-900">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="sm:border-b border-zinc-200 text-center text-sm font-medium text-zinc-500 dark:border-zinc-700 dark:text-zinc-400 sm:block">
                <ul class="-mb-px flex flex-wrap gap-x-4" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li>
                        <button id="description-tab" data-tabs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true" class="inline-block rounded-t-lg border-b-2 p-3 pl-0 dark:border-transparent">Description</button>
                    </li>

                    <li>
                        <button id="reviews-tab" data-tabs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false" class="inline-block rounded-t-lg border-b-2 p-3 hover:border-zinc-300 hover:text-zinc-600 dark:border-transparent dark:hover:text-zinc-300">Reviews</button>
                    </li>
                </ul>
            </div>

            <div id="default-tab-content">
                <div class="w-full">
                    <div class="col-span-1">
                        <div id="description" class=" py-4 sm:py-8 lg:grid-cols-5 lg:gap-8" role="tabpanel" aria-labelledby="description-tab">
                            <div class=" w-full space-y-6">
                                <div class="space-y-6 text-zinc-500 dark:text-zinc-400">
                                    {!! $product->long_description !!}
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="mx-auto max-w-screen-xl">
                                <div class="mt-6 flex flex-wrap gap-4 rounded-lg border border-zinc-200 bg-white p-4 shadow-sm dark:border-zinc-700 dark:bg-zinc-800 sm:gap-6 sm:p-6 lg:gap-8 lg:p-8">
                                    <div class="flex-1 space-y-3">
                                        <p class="text-3xl font-bold leading-none text-zinc-900 dark:text-white">{{ $product->star_rating }} / 5</p>
                                        <p class="text-base font-normal leading-none text-zinc-500 dark:text-zinc-400">Average rating</p>

                                        <div class="space-y-1">
                                            <div class="flex items-center">
                                                <div class="flex">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $product->star_rating)
                                                            <!-- Filled star (yellow) -->
                                                            <svg class="h-5 w-5 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                                            </svg>
                                                        @else
                                                            <!-- Empty star (zinc) -->
                                                            <svg class="h-5 w-5 text-zinc-300 dark:text-zinc-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="max-w-md">
                                        <div class="mb-4 space-y-3">
                                            <p class="text-xl font-semibold leading-none text-zinc-900 dark:text-white">What do you think of this product?</p>
                                            <p class="text-base font-normal leading-none text-zinc-500 dark:text-zinc-400">Give your opinion by rating the product</p>
                                        </div>
                                        @auth
                                        <button type="button" data-modal-target="review-modal" data-modal-toggle="review-modal" class="block rounded-lg bg-blue-700 px-5 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Write a customer review</button>
                                        @else
                                            <p class="text-base font-normal leading-none text-zinc-500 dark:text-zinc-400">Login before giving a review</p>
                                        @endauth
                                    </div>
                                </div>

                                <div class="mt-6 divide-y divide-zinc-200 border-t border-zinc-200 dark:divide-zinc-700 dark:border-zinc-700">

                                @forelse($productReviews as $productReview)
                                    <article class="py-6">
                                        <div class="flex items-center">
                                            <div class="font-medium dark:text-white">
                                                <p>{{ $productReview->user->name }}</p>
                                            </div>
                                        </div>

                                        <div class="mb-3 flex items-center space-x-2">
                                            <div class="flex items-center space-x-0.5 rtl:space-x-reverse">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $productReview->stars)
                                                        <!-- Filled star -->
                                                        <svg class="h-5 w-5 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                                        </svg>
                                                    @else
                                                        <!-- Empty star -->
                                                        <svg class="h-5 w-5 text-zinc-300 dark:text-zinc-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                                        </svg>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>

                                        <p class="mb-3 text-base font-normal text-zinc-500 dark:text-zinc-400">{{ $productReview->reason }}</p>
                                    </article>
                                    @empty
                                        <p class="pt-4 mb-3 text-base font-normal text-zinc-500 dark:text-zinc-400">No reviews for this product yet.</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add review modal -->
    <div id="review-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden antialiased md:inset-0">
        <div class="relative max-h-full w-full max-w-2xl p-4">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-zinc-800">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b border-zinc-200 p-4 dark:border-zinc-700 md:p-5">
                    <div>
                        <h3 class="mb-1 text-lg font-semibold text-zinc-900 dark:text-white">Add a review for:</h3>
                        <a href="#" class="font-medium text-blue-700 hover:underline dark:text-blue-500">{{ $product->name }}</a>
                    </div>
                    <button type="button" class="absolute right-5 top-5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-zinc-400 hover:bg-zinc-200 hover:text-zinc-900 dark:hover:bg-zinc-600 dark:hover:text-white" data-modal-toggle="review-modal">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('productReviews.store', $product->id) }}" method="POST" class="p-4 md:p-5">
                    @csrf
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <x-editor
                            name="post_content"
                            label="Blog Post Content"
                            :value="$post->content ?? ''"
                        />

                        <div class="col-span-2">
                            <label for="stars" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Rating (1 to 5)</label>
                            <select name="stars" id="stars" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <div class="flex items-center">
                                <input id="review-checkbox" type="checkbox" value="" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" required=""/>
                                <label for="review-checkbox" class="ms-2 text-sm font-medium text-zinc-500 dark:text-zinc-400">By publishing this review you agree with the <a href="https://overtimehosting.com/terms-of-service" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-zinc-200 pt-4 dark:border-zinc-700 md:pt-5">
                        <button type="submit" class="me-2 inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add review</button>
                        <button type="button" data-modal-toggle="review-modal" class="me-2 rounded-lg border border-zinc-200 bg-white px-5 py-2.5 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white dark:focus:ring-zinc-700">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

@endsection
