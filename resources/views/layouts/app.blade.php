<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OvertimeHosting - @yield('title', 'Home')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/OTHLOGO-removebg-preview.png') }}" type="image/png">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('resources/js/wysiwyg-editor.js') }}" defer></script>

    <style>
        .rainbow-divider {
            height: 8px;
            background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
        }
        .sidebar {
            width: 300px;
            background-color: #1F2937; /* Tailwind CSS Zinc-800 */
        }
        .sidebar .section-title {
            border-bottom: 1px solid #374151; /* Tailwind CSS Zinc-600 */
        }
        .sidebar .link-btn {
            background-color: #374151; /* Tailwind CSS Zinc-600 */
        }
    </style>

</head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-zinc-100 dark:bg-zinc-900">
            @include('layouts.dashnav')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-zinc-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
