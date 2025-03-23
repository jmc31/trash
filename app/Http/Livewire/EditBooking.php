<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;

class EditBooking extends Component
{
    public $bookingId, $tripType, $name, $email, $phone, $departure, $destination;

    public function mount($id)
    {
        $booking = Booking::findOrFail($id);
        $this->bookingId = $booking->id;
        $this->tripType = $booking->trip_type;
        $this->name = $booking->name;
        $this->email = $booking->email;
        $this->phone = $booking->phone;
        $this->departure = $booking->departure;
        $this->destination = $booking->destination;
    }

    public function updateBooking()
    {
        $this->validate([
            'tripType' => 'required|in:one-way,round-trip',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'departure' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
        ]);

        $booking = Booking::findOrFail($this->bookingId);
        $booking->update([
            'trip_type' => $this->tripType,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'departure' => $this->departure,
            'destination' => $this->destination,
        ]);

        session()->flash('success', 'Booking updated successfully!');
        return redirect()->route('dashboard'); // Redirect back to the dashboard
    }

    public function render()
    {
        return view('livewire.edit-booking');
    }
}
