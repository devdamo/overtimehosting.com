@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

<section class="bg-white dark:bg-zinc-900">
    <div class="bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/contact/laptop-human.jpg')] bg-no-repeat bg-cover bg-center bg-zinc-700 bg-blend-multiply">
        <div class="px-4 lg:pt-24 pt-8 pb-72 lg:pb-80 mx-auto max-w-screen-sm text-center lg:px-6 ">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Contact Us</h2>
            <p class="mb-16 font-light text-zinc-400 sm:text-xl">We're here to support you and your services.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="py-16 px-4 mx-auto -mt-96 max-w-screen-xl sm:py-24 lg:px-6 ">
        <form action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 gap-8 p-6 mx-auto mb-16 max-w-screen-md bg-white rounded-lg border border-zinc-200 shadow-sm lg:mb-28 dark:bg-zinc-800 dark:border-zinc-700 sm:grid-cols-2">
            @csrf
            <div>
                <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">First Name</label>
                <input type="text" name="first_name" id="first-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm" placeholder="DAMO" required>
            </div>
            <div>
                <label for="last-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Last Name</label>
                <input type="text" name="last_name" id="last-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm" placeholder="NEMO" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Your email</label>
                <input type="email" name="email" id="email" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg block w-full p-2.5" placeholder="contact@overtimehosting.com" required>
            </div>
            <div>
                <label for="phone-number" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Phone Number</label>
                <input type="number" name="phone_number" id="phone-number" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm" placeholder="+0160422222" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-400">Your message</label>
                <textarea name="message" id="message" rows="6" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg shadow-sm border border-zinc-300" placeholder="Leave a comment..." required></textarea>
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800">Send message</button>
        </form>
    </div>
</section>

    <x-footer/>

@endsection
