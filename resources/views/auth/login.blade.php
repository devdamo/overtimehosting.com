@extends('layouts.wrapper')
@section('title', 'Login')
@section('content')
<section class="bg-zinc-50 dark:bg-zinc-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-zinc-900 dark:text-white">
            OverTimeHosting LTD
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-zinc-800 dark:border-zinc-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-zinc-900 md:text-2xl dark:text-white">
                    Admin sign in
                </h1>
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Your email</label>
                        <input id="email" type="email" name="email" :value="old('email')" class="bg-zinc-50 border border-zinc-300 text-zinc-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Password</label>
                        <input id="password" type="password" name="password" autocomplete="current-password" placeholder="••••••••" class="bg-zinc-50 border border-zinc-300 text-zinc-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input aria-describedby="remember" id="remember_me" type="checkbox" class="w-4 h-4 border border-zinc-300 rounded bg-zinc-50 focus:ring-3 focus:ring-blue-300 dark:bg-zinc-700 dark:border-zinc-600 dark:focus:ring-blue-600 dark:ring-offset-zinc-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-zinc-500 dark:text-zinc-300">Remember me</label>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
                    <p class="text-sm font-light text-zinc-500 dark:text-zinc-400">
                        Don’t have an account yet? Contact the system admin online.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
