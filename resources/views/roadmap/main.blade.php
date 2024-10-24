@extends('layouts.wrapper')
@section('title', 'RoadMap')
@section('content')

@include('layouts.navigation')


<section class="bg-white py-8 antialiased dark:bg-zinc-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 space-y-6">
        <h2 class="text-xl font-semibold text-zinc-900 dark:text-white sm:text-2xl">Road Map</h2>


        <ol class="relative border-s border-gray-200 dark:border-gray-700">
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">1.5</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing and Sales</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Digital Marketing: Start with digital marketing campaigns (Google Ads, social media ads) to attract initial customers.</p>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Affiliate Program: Set up an affiliate program to incentivize others to promote your services.</p>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Content Marketing: Publish blog posts, guides, and tutorials to establish authority and attract organic traffic.</p>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">1.4</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Soft Launch</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Beta Testing: Invite a small group of users to test your services and provide feedback.</p>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Website Development: Build a professional website showcasing your services, pricing, and features.</p>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Refinement: Make necessary adjustments based on beta testers' feedback.</p>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">1.3</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Website and Branding</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Brand Development: Create a logo, brand colors, and other visual identity elements.</p>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Website Development: Build a professional website showcasing your services, pricing, and features.</p>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">SEO and Content: Implement SEO strategies and create initial content (blogs, service descriptions) to attract search traffic.</p>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">1.2</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Infrastructure and Technology</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Server Setup: Purchase or lease servers and configure them for hosting.</p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Software Installation: Install and configure necessary software (control panels like cPanel or Plesk, billing systems like WHMCS).</p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Security Measures: Implement security measures including firewalls, DDoS protection, and regular backups.</p>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">1.1</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Legal and Financial Setup</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Register Business: Complete necessary legal steps to register your business.</p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Secure Funding: Identify funding sources (self-funding, loans, investors) and secure initial capital.</p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Set Up Accounting: Implement an accounting system for financial tracking and reporting.</p>
            </li>
        </ol>

        <div class="mt-6 sm:mt-8">
            <p class="text-lg font-normal text-zinc-500 dark:text-zinc-400">
                Wanna Know how its going?
                <a href="https://discord.gg/Y3wt6T7tgf" title="" class="font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">Join our Discord!</a>
            </p>
        </div>
    </div>
</section>


    <!-- Footer -->
    <x-footer/>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@endsection
