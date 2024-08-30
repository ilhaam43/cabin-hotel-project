<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Customer;
use App\Models\CustomerTmp;
use App\Models\Reservation;
use App\Models\ReservationDetail;
use App\Models\ReservationTmp;
use App\Models\ReservationDetailTmp;
use App\Models\HotelRoomNumber;
use App\Models\HotelRoom;
use App\Models\HotelRoomRate;
use App\Models\HotelRoomReservedTmp;
use App\Models\Payment;
use App\Models\PaymentPaid;
use App\Models\PaymentDetail;
use App\Models\PaymentAmenities;
use App\Models\PaymentAmenitiesTmp;
use App\Models\Amenities;
use App\Models\HotelRoomReserved;
use App\Models\PicHotelBranch;
use App\Models\DownPayment;
use Carbon\Carbon;

class RoomManagementService
{
    public function storeRoomBranch($request)
    {
        $user = Auth::user();
        $pic = PicHotelBranch::where('user_id', $user->id)->first();

        $hotelRoomNumber = HotelRoomNumber::create([
            'hotel_branch_id' => $pic->hotel_branch_id,
            'hotel_room_id' => $request['room_type'],
            'room_number' => $request['room_number'],
            'room_status_id' => $request['room_status']
        ]);

        return $hotelRoomNumber;
    }

    public function updateRoomBranch($request)
    {
        $roomNumber = HotelRoomNumber::where('id', $request['id'])->first();
        
        $updateRoomNumber = $roomNumber->update([
            'hotel_room_id' => $request['room_type'],
            'room_number' => $request['room_number'],
            'room_status_id' => $request['room_status']
        ]);

        return $updateRoomNumber;
    }

    public function deleteRoomBranch($id)
    {
        $roomType = HotelRoomNumber::findOrFail($id);
        $deleteRoomType = $roomType->delete();

        return $deleteRoomType;
    }

    public function storeRoomType($request)
    {
        $hotelRoomType = HotelRoom::create([
            'room_type' => $request['room_type'],
        ]);

        return $hotelRoomType;
    }

    public function updateRoomType($request)
    {
        $roomType = HotelRoom::where('id', $request['id'])->first();

        $updatehotelRoomType = $roomType->update([
            'room_type' => $request['room_type'],
        ]);

        return $updatehotelRoomType;
    }

    public function storeRoomPrice($request)
    {
        $user = Auth::user();
        $pic = PicHotelBranch::where('user_id', $user->id)->first();

        $hotelRoomPrice = HotelRoomRate::create([
            'hotel_branch_id' => $pic->hotel_branch_id,
            'hotel_room_id'   => $request['room_type_id'],
            'category_day' => $request['category_day'],
            'room_rates'      => $request['room_rates'],
            'room_duration'   => $request['room_duration'],
        ]);

        return $hotelRoomPrice;
    }

    public function updateRoomPrice($request)
    {
        $roomPrice = HotelRoomRate::where('id', $request['id'])->first();

        $updateHotelRoomPrice = $roomPrice->update([
            'hotel_room_id'   => $request['room_type_id'],
            'category_day' => $request['category_day'],
            'room_rates'      => $request['room_rates'],
            'room_duration'   => $request['room_duration'],
        ]);

        return $updateHotelRoomPrice;
    }

    public function deleteRoomPrice($request)
    {
        $roomNumber = HotelRoomNumber::where('id', $request['id'])->first();
        
        $updateRoomNumber = $roomNumber->update([
            'hotel_room_id' => $request['room_type'],
            'room_number' => $request['room_number'],
            'room_status_id' => $request['room_status']
        ]);

        return $updateRoomNumber;
    }
}

?>