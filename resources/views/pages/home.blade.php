<x-static-layout>
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-cyan-50 to-blue-100">
        <!-- Background Water Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="water-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="8" fill="currentColor" class="text-blue-500"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#water-pattern)"/>
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Stay Hydrated,
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Stay Healthy</span>
                    </h1>
                    <p class="mt-6 text-lg sm:text-xl text-gray-600 max-w-2xl">
                        Your body needs water to thrive. HydroRemind helps you build healthy hydration habits with smart reminders, personalized goals, and progress tracking. Never forget to drink water again.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 border border-transparent rounded-xl font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40">
                            <span>Get Started</span>
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="{{ route('features') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white border border-gray-200 rounded-xl font-semibold text-gray-700 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out shadow-md">
                            <span>Learn More</span>
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Hero Illustration - Large Water Drop -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative">
                        <!-- Animated Rings -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-72 h-72 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-full border-4 border-blue-200 opacity-30 animate-ping" style="animation-duration: 3s;"></div>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-56 h-56 sm:w-64 sm:h-64 lg:w-72 lg:h-72 rounded-full border-4 border-cyan-300 opacity-40 animate-ping" style="animation-duration: 2.5s;"></div>
                        </div>
                        <!-- Main Water Drop -->
                        <div class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 flex items-center justify-center">
                            <svg class="w-full h-full drop-shadow-2xl" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="dropGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#3B82F6"/>
                                        <stop offset="50%" style="stop-color:#06B6D4"/>
                                        <stop offset="100%" style="stop-color:#0EA5E9"/>
                                    </linearGradient>
                                    <linearGradient id="highlightGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#ffffff;stop-opacity:0.6"/>
                                        <stop offset="100%" style="stop-color:#ffffff;stop-opacity:0"/>
                                    </linearGradient>
                                </defs>
                                <!-- Water Drop Shape -->
                                <path d="M50 10 C50 10, 80 45, 80 60 C80 77, 67 90, 50 90 C33 90, 20 77, 20 60 C20 45, 50 10, 50 10Z" fill="url(#dropGradient)"/>
                                <!-- Highlight -->
                                <ellipse cx="38" cy="50" rx="8" ry="12" fill="url(#highlightGradient)" transform="rotate(-20 38 50)"/>
                            </svg>
                            <!-- Floating Bubbles -->
                            <div class="absolute top-8 right-4 w-4 h-4 bg-blue-300 rounded-full opacity-60 animate-bounce" style="animation-duration: 2s;"></div>
                            <div class="absolute bottom-16 left-4 w-3 h-3 bg-cyan-300 rounded-full opacity-60 animate-bounce" style="animation-duration: 1.5s; animation-delay: 0.5s;"></div>
                            <div class="absolute top-20 left-8 w-2 h-2 bg-blue-400 rounded-full opacity-50 animate-bounce" style="animation-duration: 1.8s; animation-delay: 0.3s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-16 sm:h-24" viewBox="0 0 1440 100" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,50 C360,100 720,0 1080,50 C1260,75 1380,75 1440,50 L1440,100 L0,100 Z"/>
            </svg>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                    Why Stay <span class="text-blue-600">Hydrated</span>?
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Drinking enough water every day has incredible benefits for your body and mind. Here's what proper hydration can do for you.
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1: Boost Energy -->
                <div class="group relative bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-8 hover:shadow-xl hover:shadow-blue-100 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Boost Energy</h3>
                    <p class="mt-3 text-gray-600">
                        Dehydration leads to fatigue. Stay energized throughout the day by maintaining optimal hydration levels.
                    </p>
                </div>

                <!-- Benefit 2: Improve Focus -->
                <div class="group relative bg-gradient-to-br from-cyan-50 to-teal-50 rounded-2xl p-8 hover:shadow-xl hover:shadow-cyan-100 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/30">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Improve Focus</h3>
                    <p class="mt-3 text-gray-600">
                        Your brain is 75% water. Proper hydration enhances concentration, memory, and mental clarity.
                    </p>
                </div>

                <!-- Benefit 3: Better Health -->
                <div class="group relative bg-gradient-to-br from-teal-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl hover:shadow-teal-100 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-xl flex items-center justify-center shadow-lg shadow-teal-500/30">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Better Health</h3>
                    <p class="mt-3 text-gray-600">
                        Water supports digestion, circulation, and helps flush toxins. It's essential for overall wellness.
                    </p>
                </div>

                <!-- Benefit 4: Track Progress -->
                <div class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl hover:shadow-blue-100 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Track Progress</h3>
                    <p class="mt-3 text-gray-600">
                        Visualize your hydration journey with detailed tracking and insights to build lasting habits.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Preview Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                    How It <span class="text-blue-600">Works</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Getting started with HydroRemind is simple. Just three easy steps to a healthier, more hydrated you.
                </p>
            </div>

            <!-- Steps -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Step 1 -->
                <div class="relative text-center">
                    <!-- Step Number -->
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full text-white text-2xl font-bold shadow-lg shadow-blue-500/30">
                        1
                    </div>
                    <!-- Connector Line (hidden on mobile) -->
                    <div class="hidden md:block absolute top-8 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gradient-to-r from-blue-300 to-cyan-300"></div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Set Your Goal</h3>
                    <p class="mt-3 text-gray-600 max-w-xs mx-auto">
                        Tell us about yourself and we'll calculate your personalized daily water intake goal based on your needs.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative text-center">
                    <!-- Step Number -->
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-full text-white text-2xl font-bold shadow-lg shadow-cyan-500/30">
                        2
                    </div>
                    <!-- Connector Line (hidden on mobile) -->
                    <div class="hidden md:block absolute top-8 left-[calc(50%+40px)] w-[calc(100%-80px)] h-0.5 bg-gradient-to-r from-cyan-300 to-teal-300"></div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Get Reminders</h3>
                    <p class="mt-3 text-gray-600 max-w-xs mx-auto">
                        Receive smart notifications throughout the day, customized to your schedule and preferences.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative text-center">
                    <!-- Step Number -->
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-500 rounded-full text-white text-2xl font-bold shadow-lg shadow-teal-500/30">
                        3
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Track Progress</h3>
                    <p class="mt-3 text-gray-600 max-w-xs mx-auto">
                        Log your water intake with a single tap and watch your hydration habits improve over time.
                    </p>
                </div>
            </div>

            <!-- Link to Full How It Works Page -->
            <div class="mt-12 text-center">
                <a href="{{ route('how-it-works') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold transition duration-150 ease-in-out group">
                    <span>See how it works in detail</span>
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-600 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="cta-pattern" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                        <circle cx="5" cy="5" r="3" fill="white"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#cta-pattern)"/>
            </svg>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-cyan-400/20 rounded-full blur-2xl"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-blue-400/20 rounded-full blur-xl"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Water Drop Icon -->
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full mb-8">
                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                </svg>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                Ready to Start Your<br>
                <span class="text-cyan-200">Hydration Journey?</span>
            </h2>
            <p class="mt-6 text-lg sm:text-xl text-blue-100 max-w-2xl mx-auto">
                Join thousands of people who have transformed their health with better hydration habits. It's free to get started!
            </p>
            <div class="mt-10">
                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-10 py-4 bg-white border border-transparent rounded-xl font-semibold text-blue-600 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-600 transition duration-150 ease-in-out shadow-xl hover:shadow-2xl">
                    <span>Create Free Account</span>
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
            <p class="mt-6 text-blue-200 text-sm">
                No credit card required. Start tracking your hydration today.
            </p>
        </div>
    </section>
</x-static-layout>
