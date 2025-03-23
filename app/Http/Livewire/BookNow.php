<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;

class BookNow extends Component
{
    public $tripType = 'one-way';
    public $departure;
    public $destination;
    public $departureDate;
    public $returnDate;
    public $travelers = 1;
    public $class = 'economy';
    public $name;
    public $email;
    public $phone;

    public function updatedTripType($value)
    {
        if ($value === 'one-way') {
            $this->returnDate = null;
        }
    }

    public function saveBooking()
    {
        $this->validate([
            'tripType' => 'required|in:one-way,round-trip',
            'departure' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'departureDate' => 'required|date',
            'returnDate' => 'nullable|date',
            'travelers' => 'required|integer|min:1',
            'class' => 'required|in:economy,business,first-class',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Booking::create([
            'trip_type' => $this->tripType,
            'departure' => $this->departure,
            'destination' => $this->destination,
            'departure_date' => $this->departureDate,
            'return_date' => $this->returnDate,
            'travelers' => $this->travelers,
            'seat_class' => $this->class,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('success', 'Booking successful!');

        return redirect()->route('dashboard'); // Redirect to dashboard after booking
    }

    public function render()
    {
        return view('livewire.book-now')->layout('layouts.app');
    }
}
