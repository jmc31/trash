<div class="max-w-3xl mx-auto mt-10 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h2 class="text-xl md:text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">Book Your Flight</h2>

    <form wire:submit.prevent="bookFlight" class="space-y-4">
        <!-- Trip Type -->
        <div class="flex justify-center space-x-4">
            <label class="inline-flex items-center">
                <input type="radio" name="tripType" wire:model="tripType" value="one-way"
                    class="form-radio text-indigo-600 focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500">
                <span class="ml-2 text-gray-700 dark:text-gray-300">One-Way</span>
            </label>
            <label class="inline-flex items-center">
                <input type="radio" name="tripType" wire:model="tripType" value="round-trip"
                    class="form-radio text-indigo-600 focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500">
                <span class="ml-2 text-gray-700 dark:text-gray-300">Round-Trip</span>
            </label>
        </div>

        <!-- Personal Info -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                <input type="text" id="name" wire:model="name" placeholder="Enter your full name" required
                    class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" id="email" wire:model="email" placeholder="Enter your email" required
                    class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
            </div>
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone Number</label>
            <input type="tel" id="phone" wire:model="phone" placeholder="Enter your phone number" required
                class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
        </div>

        <!-- Departure & Destination -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div>
                <label for="departure" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Departure</label>
                <select id="departure" wire:model="departure" required
                    class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
                    <option value="">Select a country</option>
                    @foreach (config('countries.list') as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="destination" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Destination</label>
                <select id="destination" wire:model="destination" required
                    class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
                    <option value="">Select a country</option>
                    @foreach (config('countries.list') as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Dates -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div>
                <label for="departureDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Departure Date</label>
                <input type="date" id="departureDate" wire:model="departureDate" required
                    class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
            </div>
            <div>
                <label for="returnDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Return Date</label>
                <input type="date" id="returnDate" wire:model="returnDate"
                    class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm"
                    @disabled($tripType !== 'round-trip')>
            </div>
        </div>

        <!-- Seat Selection -->
        <div>
            <label for="seatClass" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Seat Class</label>
            <select id="seatClass" wire:model="seatClass" required
                class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
                <option value="">Select Seat Class</option>
                <option value="economy">Economy</option>
                <option value="business">Business</option>
                <option value="first-class">First Class</option>
            </select>
        </div>

        <!-- Seat Number Dropdown -->
        <div>
            <label for="seatNumber" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Seat Number</label>
            <select id="seatNumber" wire:model="seatNumber" required
                class="mt-1 w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-500 text-sm">
                <option value="">Select a Seat</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
                <!-- Add other seat numbers here -->
            </select>
        </div>

        <!-- Submit -->
        <div class="text-center mt-4">
            <button type="submit"
                class="w-full md:w-auto px-6 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-md font-semibold text-sm">
                Book Flight
            </button>
        </div>
    </form>
</div>
