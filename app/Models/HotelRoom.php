<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    use HasFactory;

    protected $table = 'hotel_rooms';

    protected $guarded = ['
        id
    '];

    public function hotelRoomNumber()
    {
        return $this->hasMany(HotelRoomNumber::class);
    }

    public function hotelRoomRates()
    {
        return $this->hasOne(HotelRoomRate::class);
    }
}
