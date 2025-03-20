<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Store booking details
    public function store(Request $request)
    {
        $request->validate([
            'tripType' => 'required|string|in:one-way,round-trip',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'age' => 'required|integer|min:1',
            'departure' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'departureDate' => 'required|date',
            'returnDate' => 'nullable|date',
            'seatClass' => 'required|string|in:economy,business,first-class',
            'seatNumber' => 'required|string|max:10',
        ]);

        Booking::create([
            'trip_type' => $request->tripType,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'age' => $request->age,
            'departure' => $request->departure,
            'destination' => $request->destination,
            'departure_date' => $request->departureDate,
            'return_date' => $request->tripType === 'one-way' ? null : $request->returnDate,
            'seat_class' => $request->seatClass,
            'seat_number' => $request->seatNumber,
        ]);

        return redirect()->route('dashboard')->with('success', 'Flight booked successfully!');
    }

    // Display bookings in dashboard
    public function index()
    {
        $bookings = Booking::latest()->get();
        return view('dashboard', compact('bookings'));
    }

    // Edit Booking Form
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('edit-booking', compact('booking'));
    }

    // Delete Booking
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('dashboard')->with('success', 'Booking deleted successfully.');
    }
}
