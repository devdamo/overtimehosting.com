@extends('layouts.wrapper')

@section('content')

@include('layouts.navigation')


<section class="bg-white dark:bg-zinc-900">
    <div class="py-8 px-4 mx-auto space-y-12 max-w-screen-xl lg:space-y-20 sm:py-16 lg:px-6">
        <!-- Row -->
        <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
            <img class="hidden mb-4 w-full lg:mb-0 lg:flex rounded-lg" src="{{ asset('images/chrome_7H1iJjn3qF.png') }}" alt="office feature image 2">
            <div class="text-zinc-500 sm:text-lg dark:text-zinc-400">
                <h2 class="mb-2 text-2xl tracking-tight font-extrabold text-zinc-900 dark:text-white">Here's some features from our panel</h2>
                <!-- List -->
                <ul role="list" class="pt-8 my-7 space-y-5 border-t border-zinc-200 dark:border-zinc-700">
                    <p class="font-light lg:text-l">Multi-Server Management: Easily manage multiple game servers from a single interface, including creating, stopping, starting, and deleting servers.</p>
                    <p class="font-light lg:text-l">User Permissions: Customizable permission system to control what users can do on the panel, including server access, administrative tasks, and more.</p>
                    <p class="font-light lg:text-l">Support for Various Games: Compatible with a wide range of games, including Minecraft, ARK: Survival Evolved, and many others.</p>
                    <p class="font-light lg:text-l">Docker Integration: Uses Docker containers to isolate game servers, improving security and stability. Each server runs in its own container.</p>
                    <p class="font-light lg:text-l">Web-Based Interface: Manage everything through a web interface, which includes features like file management, console access, and server configuration.</p>
                    <p class="font-light lg:text-l">Resource Monitoring: Track server performance and resource usage, including CPU, RAM, and disk usage, to ensure optimal performance.</p>
                </ul>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <x-footer/>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@endsection
