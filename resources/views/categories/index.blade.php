
    <section class="bg-zinc-50 py-8 antialiased dark:bg-zinc-900">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mb-4 mt-6 grid grid-cols-1 gap-4 text-center sm:mt-8 sm:grid-cols-2 lg:mb-0 lg:grid-cols-4 xl:gap-8">
                @foreach ($categories as $category)
                <a href="{{ route('products.index', ['category' => $category->name]) }}" class="grid place-content-center space-y-6 overflow-hidden rounded-lg border border-zinc-200 bg-white p-6 hover:bg-zinc-100 dark:border-zinc-700 dark:bg-zinc-800 dark:hover:bg-zinc-700">
                    <img src="{{ asset('storage/' . $category->image) }}" class="rounded-lg" alt="{{ $category->name }}">
                    <p class="text-lg font-semibold text-zinc-900 dark:text-white">{{ $category->name }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>
