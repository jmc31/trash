<!-- Flight Bookings Table -->
<div style="max-width: 1200px; margin: 30px auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Flight Bookings</h2>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background: #34495e; color: white; text-align: left;">
                    <th style="padding: 12px;">Name</th>
                    <th style="padding: 12px;">Email</th>
                    <th style="padding: 12px;">Phone</th>
                    <th style="padding: 12px;">Age</th>
                    <th style="padding: 12px;">Trip Type</th>
                    <th style="padding: 12px;">Departure</th>
                    <th style="padding: 12px;">Destination</th>
                    <th style="padding: 12px;">Departure Date</th>
                    <th style="padding: 12px;">Return Date</th>
                    <th style="padding: 12px;">Seat Class</th>
                    <th style="padding: 12px;">Seat Number</th>
                    <th style="padding: 12px; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 10px;">{{ $booking->name }}</td>
                        <td style="padding: 10px;">{{ $booking->email }}</td>
                        <td style="padding: 10px;">{{ $booking->phone }}</td>
                        <td style="padding: 10px;">{{ $booking->age }}</td>
                        <td style="padding: 10px;">{{ ucfirst($booking->trip_type) }}</td>
                        <td style="padding: 10px;">{{ $booking->departure }}</td>
                        <td style="padding: 10px;">{{ $booking->destination }}</td>
                        <td style="padding: 10px;">{{ $booking->departure_date }}</td>
                        <td style="padding: 10px;">{{ $booking->return_date ?? 'N/A' }}</td>
                        <td style="padding: 10px;">{{ ucfirst($booking->seat_class) }}</td>
                        <td style="padding: 10px;">{{ $booking->seat_number }}</td>
                        <td style="padding: 10px; text-align: center;">
                            <!-- Edit Button -->
                            <a href="{{ route('edit.booking', $booking->id) }}"
                               style="padding: 5px 10px; background: #f39c12; color: white; border-radius: 5px; text-decoration: none; margin-right: 5px;">
                                Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('delete.booking', $booking->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    style="padding: 5px 10px; background: #e74c3c; color: white; border: none; border-radius: 5px; cursor: pointer;">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
