<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    use HasFactory;

    public function Bookings(){
        return $this->hasMany(Booking::class);
    }
}

