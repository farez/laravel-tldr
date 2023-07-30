<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased flex flex-col h-full bg-indigo-50 max-h-screen" x-data="{ open: false }">
<nav class="bg-slate-800 h-[50px]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-[50px] items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/videos" class="@if(Request::is('videos')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Videos</a>
                        <a href="/about" class="@if(Request::is('about')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                    <svg class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<main id="main" class="max-w-7xl mx-auto flex-1 flex flex-col md:flex-row relative" style="min-height: calc(100vh - 50px)">
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden z-50 bg-slate-800" id="mobile-menu" x-show="open" style="display: none;">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/videos" class="@if(Request::is('videos')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Videos</a>
            <a href="/about" class="@if(Request::is('about')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif block rounded-md px-3 py-2 text-base font-medium">About</a>
        </div>
    </div>

    {{ $slot }}
</main>

</body>
</html>