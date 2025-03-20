<div class="max-w-6xl mx-auto mt-10 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h2 class="text-xl md:text-2xl font-bold text-gray-800 dark:text-white mb-6">Flight Bookings</h2>

    <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-white">
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Phone</th>
                <th class="border px-4 py-2">Trip Type</th>
                <th class="border px-4 py-2">Departure</th>
                <th class="border px-4 py-2">Destination</th>
                <th class="border px-4 py-2">Departure Date</th>
                <th class="border px-4 py-2">Return Date</th>
                <th class="border px-4 py-2">Seat Class</th>
                <th class="border px-4 py-2">Seat Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr class="border-b dark:border-gray-600">
                    <td class="border px-4 py-2">{{ $booking->name }}</td>
                    <td class="border px-4 py-2">{{ $booking->email }}</td>
                    <td class="border px-4 py-2">{{ $booking->phone }}</td>
                    <td class="border px-4 py-2">{{ ucfirst($booking->trip_type) }}</td>
                    <td class="border px-4 py-2">{{ $booking->departure }}</td>
                    <td class="border px-4 py-2">{{ $booking->destination }}</td>
                    <td class="border px-4 py-2">{{ $booking->departure_date }}</td>
                    <td class="border px-4 py-2">{{ $booking->return_date ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ ucfirst($booking->seat_class) }}</td>
                    <td class="border px-4 py-2">{{ $booking->seat_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
