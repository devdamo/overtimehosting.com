@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <section class="bg-zinc-50 antialiased pb-10 dark:bg-zinc-900">
        @if ($selectedCategory && $selectedCategory->image)
            <section class="relative h-64 overflow-hidden lg:h-96">
                <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('storage/' . $selectedCategory->image) }}" alt="{{ $selectedCategory->name }}">
            </section>
        @else
            <section class="relative h-64 overflow-hidden lg:h-96">

            </section>
        @endif


        <div class="relative mx-auto max-w-screen-xl px-4 lg:-mt-48">
            <!-- TOP BAR -->
            <div class="mb-4 divide-y divide-zinc-200 rounded-lg border border-zinc-200 bg-white p-4 shadow-sm dark:divide-zinc-700 dark:border-zinc-700 dark:bg-zinc-800 md:p-6">
                <div class="items-center justify-between pb-4 md:flex">
                    <h2 class="mb-4 text-xl font-semibold text-zinc-900 dark:text-white md:mb-0">OverTimeHosting - Marketplace</h2>
                </div>
                <div class="items-center justify-between space-y-4 py-4 lg:flex lg:space-y-0">
                    <!--Dropdown Buttons -->
                    <div class="grid grid-cols-2 items-center gap-4 md:flex ">
                        <button id="brandsDropdownButton" data-dropdown-toggle="dropdownBrands" type="button" class="flex w-full items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white dark:focus:ring-zinc-700 sm:w-auto">
                            <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                            </svg>
                            CPU brands
                            <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div id="dropdownBrands" class="z-50 hidden w-48 divide-y divide-zinc-100 rounded-lg bg-white shadow dark:divide-zinc-600 dark:bg-zinc-700" data-popper-placement="bottom">
                            <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                                <li class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-600">
                                    <input id="brand-checkbox-amd" type="checkbox" value="AMD" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-500 dark:bg-zinc-600 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" />
                                    <label for="brand-checkbox-amd" class="inline-flex w-full items-center gap-2 text-zinc-900 dark:text-zinc-300">AMD <span class="ms-auto text-zinc-500 dark:text-zinc-400">1,276</span></label>
                                </li>
                                <li class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-600">
                                    <input id="brand-checkbox-intel" type="checkbox" value="Intel" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-500 dark:bg-zinc-600 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" />
                                    <label for="brand-checkbox-intel" class="inline-flex w-full items-center gap-2 text-zinc-900 dark:text-zinc-300">Intel <span class="ms-auto text-zinc-500 dark:text-zinc-400">2,522</span></label>
                                </li>
                                <li class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-600">
                                    <input id="brand-checkbox-arm" type="checkbox" value="ARM" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-500 dark:bg-zinc-600 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" />
                                    <label for="brand-checkbox-arm" class="inline-flex w-full items-center gap-2 text-zinc-900 dark:text-zinc-300">ARM <span class="ms-auto text-zinc-500 dark:text-zinc-400">3,766</span></label>
                                </li>
                            </ul>
                            <div class="p-2">
                                <button type="button" class="w-full rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="applyCpuFilter">See all results</button>
                            </div>
                        </div>

                        <script>
                            document.getElementById('applyCpuFilter').addEventListener('click', function() {
                                let selectedBrands = [];
                                document.querySelectorAll('input[type="checkbox"]:checked').forEach(function(checkbox) {
                                    selectedBrands.push(checkbox.value.toLowerCase()); // Convert to lowercase before adding
                                });

                                // Redirect to the products page with the selected CPU brands as a query
                                if (selectedBrands.length > 0) {
                                    window.location.href = '{{ route("products.index") }}?cpu=' + selectedBrands.join(',');
                                } else {
                                    window.location.href = '{{ route("products.index") }}';
                                }
                            });
                        </script>

                        <button id="ratingDropdownButton" data-dropdown-toggle="dropdownRating" type="button" class="flex w-full items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white dark:focus:ring-zinc-700 sm:w-auto">
                            <svg class="-ms-0.5 me-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                            </svg>
                            Rating
                            <svg class="-me-0.5 ms-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                            </svg>
                        </button>

                        <div id="dropdownRating" class="z-50 hidden w-56 divide-y divide-zinc-100 rounded-lg bg-white shadow dark:divide-zinc-600 dark:bg-zinc-700" data-popper-placement="bottom">
                            <form method="GET" action="{{ route('products.index') }}">
                                <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                                    @for ($i = 5; $i >= 1; $i--)
                                        <li class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-600">
                                            <input id="rating-checkbox-{{ $i }}" type="radio" name="rating" value="{{ $i }}" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" />
                                            <label for="rating-checkbox-{{ $i }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-zinc-500 dark:text-zinc-400">
                                                @for ($j = 1; $j <= 5; $j++)
                                                    @if ($j <= $i)
                                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                                        </svg>
                                                    @else
                                                        <svg class="h-5 w-5 text-zinc-300 dark:text-zinc-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                                        </svg>
                                                    @endif
                                                @endfor
                                            </label>
                                        </li>
                                    @endfor
                                </ul>
                                <div class="p-2">
                                    <button type="submit" class="w-full rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Filter by Rating</button>
                                </div>
                            </form>
                        </div>

                        <button id="CategoryDropdownButton" data-dropdown-toggle="dropdownCategory" type="button" class="flex w-full items-center justify-center rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-white dark:focus:ring-zinc-700 sm:w-auto">
                            <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                            </svg>
                            Category
                            <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div id="dropdownCategory" class="z-50 hidden w-48 divide-y divide-zinc-100 rounded-lg bg-white shadow dark:divide-zinc-600 dark:bg-zinc-700" data-popper-placement="bottom">
                            <ul class="p-2 text-start text-sm font-medium text-zinc-900 dark:text-white">
                                @foreach($categories as $category)
                                    <li class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-600">
                                        <input id="category-checkbox-{{ $category->id }}" type="checkbox" value="{{ $category->name }}" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-500 dark:bg-zinc-600 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" />
                                        <label for="category-checkbox-{{ $category->id }}" class="inline-flex w-full items-center gap-2 text-zinc-900 dark:text-zinc-300">
                                            {{ $category->name }}
                                            <span class="ms-auto text-zinc-500 dark:text-zinc-400">({{ $category->products->count() }})</span>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="p-2">
                                <button type="button" class="w-full rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="applyCategoryFilter">See all results</button>
                            </div>
                        </div>

                        <script>
                            document.getElementById('applyCategoryFilter').addEventListener('click', function() {
                                let selectedCategories = [];
                                document.querySelectorAll('input[type="checkbox"]:checked').forEach(function(checkbox) {
                                    selectedCategories.push(checkbox.value);
                                });

                                // Redirect to the products page with the selected category as query
                                if (selectedCategories.length > 0) {
                                    window.location.href = '{{ route("products.index") }}?category=' + selectedCategories.join(',');
                                } else {
                                    window.location.href = '{{ route("products.index") }}';
                                }
                            });
                        </script>

                    </div>
                    <div class="shrink-0 items-center gap-4 sm:flex">
                        <p class="mb-2 text-base font-medium text-zinc-900 dark:text-white sm:mb-0">Seller:</p>

                        <div class="flex flex-wrap items-center gap-3">
                            <div class="flex items-center">
                                <input id="1-year" name="warranty" type="checkbox" value="" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" />
                                <label for="1-year" class="ms-2 text-sm font-medium text-zinc-900 dark:text-zinc-300"> OverTimeHosting </label>
                            </div>

                            <div class="flex items-center">
                                <input id="2-years" type="checkbox" name="warranty" value="" class="h-4 w-4 rounded border-zinc-300 bg-zinc-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700 dark:ring-offset-zinc-800 dark:focus:ring-blue-600" />
                                <label for="2-years" class="ms-2 text-sm font-medium text-zinc-900 dark:text-zinc-300"> Shadow Hosting </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <div class="w-full">
                        <form action="{{ route('products.index') }}" method="GET" class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-zinc-500 dark:text-zinc-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" name="query" class="block w-full p-2 pl-10 text-sm text-zinc-900 border border-zinc-300 rounded-lg bg-zinc-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- PRODUCT CARDS -->
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($products as $product)
                <div class="space-y-4 rounded-lg border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-800">
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative mb-4 min-h-72 overflow-hidden rounded-lg">
                            <!-- Item -->
                            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/' . $product->logo) }}" alt="{{ $product->name }} logo" class="absolute left-1/2 top-1/2 block h-full -translate-x-1/2 -translate-y-1/2 dark:hidden" />
                                <img src="{{ asset('storage/' . $product->logo) }}" alt="{{ $product->name }} logo" class="absolute left-1/2 top-1/2 hidden h-full -translate-x-1/2 -translate-y-1/2 dark:block" />
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="#" class="text-lg font-semibold leading-tight text-zinc-900 hover:underline dark:text-white">{{ $product->name }}</a>
                        <div class="mt-2 text-base font-normal text-zinc-500 dark:text-zinc-400">
                            {!! $product->quick_description !!}
                        </div>
                    </div>

                    <a href="#" title="" class="inline-flex items-center gap-2 text-sm font-medium text-blue-700 hover:underline dark:text-blue-600">
                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8H5m12 0a1 1 0 0 1 1 1v2.6M17 8l-4-4M5 8a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.6M5 8l4-4 4 4m6 4h-4a2 2 0 1 0 0 4h4a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1Z" />
                        </svg>

                        {{ $product->seller }}
                    </a>

                    <div class="flex items-center justify-between gap-4">
                        <p class="text-2xl font-extrabold leading-tight text-zinc-900 dark:text-white">£{{ $product->price }}</p>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="{{ route('products.show', $product) }}" class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>
                            View Product
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <x-footer></x-footer>

@endsection
