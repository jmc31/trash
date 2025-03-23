<div class="max-w-3xl mx-auto mt-10 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h2 class="text-xl md:text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">Edit Booking</h2>

    <form wire:submit.prevent="updateBooking" class="space-y-4">
        <!-- Trip Type -->
        <div class="flex justify-center space-x-4">
            <label class="inline-flex items-center">
                <input type="radio" wire:model="tripType" value="one-way"
                    class="form-radio text-indigo-600 focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500">
                <span class="ml-2 text-gray-700 dark:text-gray-300">One-Way</span>
            </label>
            <label class="inline-flex items-center">
                <input type="radio" wire:model="tripType" value="round-trip"
                    class="form-radio text-indigo-600 focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500">
                <span class="ml-2 text-gray-700 dark:text-gray-300">Round-Trip</span>
            </label>
        </div>

        <!-- Personal Info -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                <input type="text" wire:model="name" required class="mt-1 w-full px-3 py-2 border rounded-md">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" wire:model="email" required class="mt-1 w-full px-3 py-2 border rounded-md">
            </div>
        </div>

        <!-- More Inputs -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone Number</label>
            <input type="tel" wire:model="phone" required class="mt-1 w-full px-3 py-2 border rounded-md">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Departure</label>
                <input type="text" wire:model="departure" required class="mt-1 w-full px-3 py-2 border rounded-md">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Destination</label>
                <input type="text" wire:model="destination" required class="mt-1 w-full px-3 py-2 border rounded-md">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-4">
            <button type="submit" class="w-full px-6 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-md font-semibold text-sm">
                Update Booking
            </button>
        </div>
    </form>
</div>
