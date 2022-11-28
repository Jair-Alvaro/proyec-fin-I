<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Booking extends Eloquent
{
    use HasFactory;
    public function Rooms(){
        return $this->belongsTo(Room::class);
    }
    public function Customers(){
        return $this->belongsTo(Customer::class);
    }
}
