@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            @foreach($jobs as $job)
                <div class="bg-white rounded-lg shadow lg:grid lg:grid-cols-3 dark:bg-zinc-800">
                    <div class="col-span-2 p-6 lg:p-8">
                        <h2 class="mb-1 text-2xl font-bold text-zinc-900 dark:text-white">{{ $job->title }}</h2>
                        <p class="text-lg font-light text-zinc-500 dark:text-zinc-400">{{ $job->short_description }}</p>
                    </div>
                    <div class="flex p-6 text-center bg-zinc-50 lg:p-8 dark:bg-zinc-700">
                        <div class="self-center w-full">
                            <a href="{{ route('jobs.show', $job->id) }}" class="flex justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-bue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apply Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-footer/>

@endsection
