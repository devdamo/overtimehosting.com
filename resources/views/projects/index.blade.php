@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900 px-4" id="projects">
        <div class="w-full py-10 sm:py-16 2xl:px-32 xl:px-28 lg:px-20 md:px-10 max-w-8xl mx-auto">
            <div class="px-4 max-w-3xl mx-auto mb-8">
                <h2 class="mb-4 text-2xl max-w-3xl font-extrabold text-center text-zinc-900 md:text-4xl dark:text-white">
                    Here’s a look at the companies and groups we’re sponsoring and partnering with.
                </h2>
                <p class="mb-6 md:text-lg text-center text-zinc-500 dark:text-zinc-400">
                    We are proud to collaborate with a diverse range of companies and groups. Through these partnerships and sponsorships, we aim to foster innovation, growth, and mutual success. Explore the exciting opportunities that emerge when industry leaders and visionary organizations come together to create lasting impact.
                </p>
            </div>

            @foreach($companies as $company)
                <div class="space-y-4 lg:space-y-8 max-w-4xl mx-auto bg-zinc-50 rounded-lg border border-zinc-100 p-4 lg:p-6 dark:bg-zinc-800 dark:border-zinc-700 mb-4 lg:mb-6">
                        <div class="flex items-center space-x-4">
                            <img class="w-12" src="{{ $company->logo ? asset('storage/' . $company->logo) : asset('images/default-logo.jpg') }}" alt="{{ $company->name }}">
                            <h3 class="text-xl font-bold text-zinc-900 sm:text-3xl dark:text-white">{{ $company->name }}</h3>
                        </div>

                        <div class="text-base font-normal text-gray-500 dark:text-gray-400 mb-2">{!! $company->description !!}</div>

                        <div class="sm:flex items-start justify-between text-base text-zinc-900 dark:text-white border-t border-zinc-100 pt-6 dark:border-zinc-700">
                            <div class="w-full mb-4 sm:mb-0">
                                <h4 class="font-semibold mb-1">Services Provided:</h4>
                                <ul>
                                    @foreach($company->services as $service)
                                        <li class="text-sm text-zinc-500 dark:text-zinc-400">{{ $service }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="w-full">
                                <h4 class="font-semibold mb-1">Main activities and responsibilities:</h4>
                                <ul>
                                    @foreach($company->main_activities as $activity)
                                        <li class="text-sm text-zinc-500 dark:text-zinc-400">{{ $activity }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                </div>
            @endforeach

        </div>
    </section>

    <x-footer/>

@endsection
