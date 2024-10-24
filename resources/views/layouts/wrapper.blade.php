<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OvertimeHosting - @yield('title', 'Home')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/OTHLOGO-removebg-preview.png') }}" type="image/png">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />

    <script src="{{ asset('js/wysiwyg-editor.js') }}" defer></script>

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


<body class="bg-zinc-800 overflow-y-scroll no-scrollbar">

@if($advertisement = \App\Models\Advertisement::where('show_globally', true)->first())
    <x-advertisement :advertisement="$advertisement" />
@endif

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

<script>
    // Example for showing and hiding the signup popup
    document.querySelectorAll('[data-collapse-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-collapse-toggle');
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.classList.toggle('hidden');
            }
        });
    });

    // Ensure the modals appear above everything
    window.addEventListener('load', () => {
        document.querySelectorAll('.fixed').forEach((el) => {
            el.style.zIndex = 10000;
        });
    });
</script>


</body>
</html>
