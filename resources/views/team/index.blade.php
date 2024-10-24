<!-- resources/views/team/index.blade.php -->
@extends('layouts.wrapper')

@section('content')
    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900 antialiased">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-zinc-900 sm:text-4xl dark:text-white">
                    Our people make us great
                </h2>
                <p class="mt-4 text-base font-normal text-zinc-500 sm:text-xl dark:text-zinc-400">
                    You'll interact with talented professionals, will be challenged to solve difficult problems and think in new and
                    creative ways.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-4 mt-8 lg:mt-16 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">

                @foreach ($teamMembers as $teamMember)
                <a href="{{ route('team.show', $teamMember->slug) }}" class="relative overflow-hidden rounded-lg group">
                    <img class="object-cover w-full h-[320px] lg:h-auto scale-100 ease-in duration-300 group-hover:scale-125" src="{{ asset('storage/' . $teamMember->logo) }}" alt="{{ $teamMember->display_name }}">
                    <div class="absolute inset-0 grid items-end justify-center p-4 bg-gradient-to-b from-transparent to-black/60">
                        <div class="text-center">
                            <p class="text-xl font-bold text-white">
                                {{ $teamMember->display_name }}
                            </p>
                            <p class="text-base font-medium text-zinc-300">
                                {{ $teamMember->company_role }}
                            </p>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>

            <div class="max-w-3xl p-4 mx-auto mt-8 rounded-md lg:mt-16 bg-zinc-50 dark:bg-zinc-800">
                <div class="flex flex-col justify-between gap-3 md:gap-6 md:items-center md:flex-row">
                    <div class="flex items-center gap-1.5">
                        <svg aria-hidden="true" class="hidden w-5 h-5 text-zinc-800 dark:text-zinc-400 md:block shrink-0"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                        <span class="text-base font-normal text-zinc-700 dark:text-zinc-400">
                            <span class="font-semibold">
                                Want to join the OverTimeHosting team?
                            </span>
                            We are growing our community.
                        </span>
                    </div>

                    <a href="/jobs" title=""
                       class="inline-flex items-center text-base font-medium text-blue-600 hover:underline dark:text-blue-500">
                        Join our team
                        <svg aria-hidden="true" class="w-5 h-5 ml-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>

@endsection
