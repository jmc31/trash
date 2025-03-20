<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookNow extends Component
{
    public $tripType;
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
            $this->returnDate = null; // Clear return date when switching to One-Way
        }
    }

    public function render()
    {
        return view('livewire.book-now')->layout('layouts.app');
    }
}
