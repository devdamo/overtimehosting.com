<head>
    <title>OverTimeHosting - Frequently asked questions</title>
</head>

@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-lg text-center">
                <h2 class="mb-2 text-4xl tracking-tight font-extrabold text-zinc-900 dark:text-white">Frequently asked questions</h2>
                <p class="mb-8 text-zinc-500 lg:text-lg dark:text-zinc-400">Ask us anything about our brand and products, and get factual responses.</p>
            </div>

            <div class="grid pt-8 text-left border-t border-zinc-200 dark:border-zinc-700 sm:gap-8 lg:gap-16 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($faqs->chunk(4) as $faqChunk)
                    <div>
                        @foreach ($faqChunk as $faq)
                            <div class="mb-10">
                                <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                                    {{ $faq->question }}
                                </h3>
                                <p class="mb-4 text-zinc-500 dark:text-zinc-400">
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>








    <!-- Footer -->
    <x-footer/>
@endsection
