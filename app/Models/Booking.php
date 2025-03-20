<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'trip_type',
        'departure',
        'destination',
        'departure_date',
        'return_date',
        'seat_class',
        'seat_number',
    ];
}
