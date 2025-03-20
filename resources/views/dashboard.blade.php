<x-app-layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 p-6">
        <div class="max-w-7xl mx-auto">

            <!-- Dashboard Header -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
                <p class="text-gray-600 dark:text-gray-400">Manage your flights efficiently.</p>
            </div>

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Booked Flights -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Booked Flights</h2>
                    <div class="h-32 flex items-center justify-center text-gray-500 dark:text-gray-400">
                        No Data Available
                    </div>
                </div>

                <!-- Available Flights -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Available Flights</h2>
                    <div class="h-32 flex items-center justify-center text-gray-500 dark:text-gray-400">
                        No Data Available
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Quick Actions</h2>
                    <div class="flex flex-col space-y-3">
                        <a href="#" class="block w-full px-4 py-2 text-center text-white bg-indigo-600 hover:bg-indigo-700 rounded-md font-semibold text-sm">
                            Book a Flight
                        </a>
                        <a href="#" class="block w-full px-4 py-2 text-center text-gray-900 dark:text-white bg-gray-200 dark:bg-gray-700 rounded-md font-semibold text-sm">
                            View Profile
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
