<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'HydroRemind') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-900">
        <div class="min-h-screen flex flex-col">
            <!-- Navigation Header -->
            <nav x-data="{ open: false }" class="bg-white shadow-sm border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <!-- Logo / Brand -->
                        <div class="flex items-center">
                            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                                <!-- Water Drop Icon -->
                                <svg class="h-8 w-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                                </svg>
                                <span class="text-xl font-bold text-gray-900">HydroRemind</span>
                            </a>
                        </div>

                        <!-- Desktop Navigation Links -->
                        <div class="hidden md:flex md:items-center md:space-x-6">
                            <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out font-medium">
                                Home
                            </a>
                            <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out font-medium">
                                About
                            </a>
                            <a href="{{ route('features') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out font-medium">
                                Features
                            </a>
                            <a href="{{ route('how-it-works') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out font-medium">
                                How It Works
                            </a>
                            <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out font-medium">
                                Contact
                            </a>
                            <a href="{{ route('faq') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out font-medium">
                                FAQ
                            </a>
                        </div>

                        <!-- Desktop Auth Buttons -->
                        <div class="hidden md:flex md:items-center md:space-x-4">
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out font-medium">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-medium text-sm text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                                Register
                            </a>
                        </div>

                        <!-- Mobile Hamburger Button -->
                        <div class="flex items-center md:hidden">
                            <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Toggle navigation menu">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile Navigation Menu -->
                <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden">
                    <div class="pt-2 pb-3 space-y-1 border-t border-gray-100">
                        <a href="{{ route('home') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-blue-600 hover:bg-gray-50 transition duration-150 ease-in-out">
                            Home
                        </a>
                        <a href="{{ route('about') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-blue-600 hover:bg-gray-50 transition duration-150 ease-in-out">
                            About
                        </a>
                        <a href="{{ route('features') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-blue-600 hover:bg-gray-50 transition duration-150 ease-in-out">
                            Features
                        </a>
                        <a href="{{ route('how-it-works') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-blue-600 hover:bg-gray-50 transition duration-150 ease-in-out">
                            How It Works
                        </a>
                        <a href="{{ route('contact') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-blue-600 hover:bg-gray-50 transition duration-150 ease-in-out">
                            Contact
                        </a>
                        <a href="{{ route('faq') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-blue-600 hover:bg-gray-50 transition duration-150 ease-in-out">
                            FAQ
                        </a>
                    </div>
                    <div class="pt-4 pb-3 border-t border-gray-200">
                        <div class="flex items-center px-4 space-x-3">
                            <a href="{{ route('login') }}" class="flex-1 text-center px-4 py-2 border border-gray-300 rounded-lg font-medium text-gray-700 hover:bg-gray-50 transition duration-150 ease-in-out">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="flex-1 text-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-medium text-white hover:bg-blue-700 transition duration-150 ease-in-out">
                                Register
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <!-- Brand Column -->
                        <div class="col-span-1 md:col-span-1">
                            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                                <!-- Water Drop Icon -->
                                <svg class="h-8 w-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                                </svg>
                                <span class="text-xl font-bold text-gray-900">HydroRemind</span>
                            </a>
                            <p class="mt-4 text-gray-600 text-sm">
                                Stay hydrated, stay healthy. Your personal water drinking reminder to help you maintain optimal hydration throughout the day.
                            </p>
                            <!-- Social Media Icons -->
                            <div class="mt-6 flex space-x-4">
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition duration-150 ease-in-out" aria-label="Facebook">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition duration-150 ease-in-out" aria-label="Twitter">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition duration-150 ease-in-out" aria-label="Instagram">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-blue-500 transition duration-150 ease-in-out" aria-label="LinkedIn">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Quick Links Column -->
                        <div class="col-span-1">
                            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Quick Links</h3>
                            <ul class="mt-4 space-y-3">
                                <li>
                                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">About</a>
                                </li>
                                <li>
                                    <a href="{{ route('features') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">Features</a>
                                </li>
                                <li>
                                    <a href="{{ route('how-it-works') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">How It Works</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Support Column -->
                        <div class="col-span-1">
                            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Support</h3>
                            <ul class="mt-4 space-y-3">
                                <li>
                                    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">Contact</a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('terms') }}" class="text-gray-600 hover:text-blue-600 transition duration-150 ease-in-out">Terms of Service</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter or Additional Info Column -->
                        <div class="col-span-1">
                            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Stay Updated</h3>
                            <p class="mt-4 text-gray-600 text-sm">
                                Get hydration tips and updates delivered to your inbox.
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-medium text-sm text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                                    Get Started Free
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright Notice -->
                    <div class="mt-12 pt-8 border-t border-gray-100">
                        <p class="text-center text-gray-500 text-sm">
                            &copy; {{ date('Y') }} HydroRemind. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
