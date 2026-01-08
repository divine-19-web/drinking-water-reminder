<x-static-layout>
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-blue-600 via-blue-500 to-cyan-400 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Frequently Asked Questions</h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                Find answers to common questions
            </p>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-4" x-data="{ openItem: null }">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 1 ? null : 1"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">How much water should I drink daily?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 1 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 1" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            The general recommendation is to drink about 8 glasses (64 ounces or approximately 2 liters) of water per day. However, your individual needs may vary based on factors like body weight, activity level, climate, and overall health. HydroRemind helps you calculate and track your personalized daily water intake goal based on your specific needs.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 2 ? null : 2"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">Can I customize my reminder schedule?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 2 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 2" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            Yes, absolutely! HydroRemind offers fully customizable reminder schedules. You can set your preferred reminder intervals (every 30 minutes, hourly, or custom), choose your active hours to avoid notifications during sleep or meetings, and even set different schedules for weekdays and weekends.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 3 ? null : 3"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">Is HydroRemind free to use?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 3 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 3" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            Yes, HydroRemind offers a free tier that includes all essential features like basic reminders, daily goal tracking, and progress history. We also offer a premium subscription with advanced features such as detailed analytics, custom container sizes, integration with fitness apps, and priority support.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 4 ? null : 4"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">How do I track my water intake?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 4 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 4" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            Tracking is simple! Just tap the quick-add button on your dashboard to log a drink. You can choose from preset container sizes (like a glass, bottle, or cup) or enter a custom amount. Your progress is displayed visually with a progress bar and percentage, making it easy to see how close you are to your daily goal.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 5 ? null : 5"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">Can I set different goals for different days?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 5 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 5" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            Yes! You can set different hydration goals for weekdays and weekends to match your varying activity levels. For example, you might set a higher goal for workout days or lower goals for rest days. You can also manually adjust your daily goal at any time from the settings.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 6 ? null : 6"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">Does the app work offline?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 6 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 6" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            HydroRemind works primarily as a web-based application and requires an internet connection for full functionality. However, reminders that have been scheduled will continue to work, and your data will sync automatically once you are back online. We are working on enhanced offline capabilities for future updates.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 7 ? null : 7"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">How do I reset my password?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 7 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 7" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            To reset your password, click on the "Forgot Password" link on the login page. Enter your registered email address, and we will send you a password reset link. Click the link in the email, and you will be able to create a new password. The link expires after 60 minutes for security purposes.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 8 ? null : 8"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">Can I export my hydration data?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 8 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 8" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            Yes, you can export your hydration data from the settings page. We offer CSV and PDF export options for your records. This is useful if you want to share your hydration history with a healthcare provider or keep a personal backup of your data.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 9 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 9 ? null : 9"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">What notifications will I receive?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 9 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 9" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            HydroRemind sends several types of notifications: hydration reminders at your scheduled intervals, daily goal achievement celebrations, streak milestones, and weekly progress summaries. You can customize which notifications you receive and how they are delivered (push notifications, email, or both) in your notification settings.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 10 -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <button
                        @click="openItem = openItem === 10 ? null : 10"
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition duration-150"
                    >
                        <span class="text-lg font-semibold text-gray-900">How do I delete my account?</span>
                        <svg
                            class="w-5 h-5 text-blue-500 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === 10 }"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="openItem === 10" x-collapse>
                        <div class="px-6 pb-5 text-gray-600">
                            To delete your account, go to Settings and then Profile. Scroll down to the "Danger Zone" section and click "Delete Account." You will be asked to confirm this action. Please note that account deletion is permanent and will remove all your hydration history, settings, and personal data from our servers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Callout Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl shadow-xl overflow-hidden">
                <div class="px-8 py-12 md:px-12 md:py-16 text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-white mb-4">Still have questions?</h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                        We are here to help! Reach out to our support team and we will get back to you as soon as possible.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition duration-300 shadow-lg">
                        <span>Contact Us</span>
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-static-layout>
