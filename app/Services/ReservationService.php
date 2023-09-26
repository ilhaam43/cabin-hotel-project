<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Customer;
use App\Models\CustomerTmp;
use App\Models\Reservation;
use App\Models\ReservationDetail;
use App\Models\ReservationTmp;
use App\Models\ReservationDetailTmp;
use App\Models\HotelRoomNumber;
use App\Models\HotelRoomRate;
use App\Models\HotelRoomReservedTmp;
use App\Models\Payment;
use App\Models\PaymentDetail;
use App\Models\PaymentAmenities;
use App\Models\PaymentAmenitiesTmp;
use App\Models\Amenities;
use App\Models\HotelRoomReserved;
use App\Models\PicHotelBranch;
use App\Models\DownPayment;
use Carbon\Carbon;

class ReservationService
{
    public function store($request)
    {
        $user = Auth::user();
        $picHotelBranch = PicHotelBranch::where('user_id', $user->id)->first();
        $customerTmp = CustomerTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->first();

        if($customerTmp->customer_tmp_id){
            $customerId = $customerTmp->customer_tmp_id;
        }else{
            $storeCustomer = Customer::create([
                'customer_title'              => $customerTmp->customer_title,
                'customer_identity_type'      => $customerTmp->customer_identity_type,
                'customer_name'               => $customerTmp->customer_name,
                'customer_email'              => $customerTmp->customer_email,
                'customer_phone'              => $customerTmp->customer_phone,
                'customer_address'            => $customerTmp->customer_identity_type,
                'customer_photo_url'          => $customerTmp->customer_photo_url,
                'customer_identity_photo_url' => $customerTmp->customer_identity_photo_url
            ]);

            $customerId = $storeCustomer->id;
        }

        $reservationTmp = ReservationTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('customer_tmp_id', $customerTmp->id)->first();

        $hotelRoomReservedTmp = HotelRoomReservedTmp::where('reservation_tmp_id', $reservationTmp->id)->get();
        $paymentAmenitiesTmp = PaymentAmenitiesTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->get();

        $amenitiesTotalPrice = PaymentAmenitiesTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->with('amenities')->sum('total_price');
        $amenitiesTotalPrice = $amenitiesTotalPrice ? $amenitiesTotalPrice : 0;

        $totalPrice = HotelRoomReservedTmp::where('reservation_tmp_id', $reservationTmp->id)->with('reservationDetailTmp', 'hotelRoomNumber.hotelRoom')->sum('price');

        $request['payment_cash_value'] = $request['payment_cash_value'] ? $request['payment_cash_value'] : 0;
        $request['payment_card_value'] = $request['payment_card_value'] ? $request['payment_card_value'] : 0;
        $request['payment_qris_value'] = $request['payment_qris_value'] ? $request['payment_qris_value'] : 0;
        $request['payment_transfer_value'] = $request['payment_transfer_value'] ? $request['payment_transfer_value'] : 0;

        $request['total_payment'] = $request['payment_cash_value'] +  $request['payment_card_value'] + $request['payment_qris_value'] + $request['payment_transfer_value'];

        $request['discount'] = $request['discount'] ? $request['discount'] : 0;

        if($request['discount_type'] == 'Persen'){
            $request['discount'] = $request['discount'] / 100;
            $request['total_payment'] = $request['total_payment'] * (1 - $request['discount']);
        }else if($request['discount_type'] == 'Nominal'){
            $request['discount'] = $request['discount'];
            $request['total_payment'] = $request['total_payment'] - $request['discount'];
        }

        $request['total_payment'] = $request['payment_cash_value'] +  $request['payment_card_value'] + $request['payment_qris_value'] + $request['payment_transfer_value'];

        $storePayment = Payment::create([
            'discount'              => $request['discount'],
            'total_price'           => $totalPrice,
            'total_price_amenities' => $amenitiesTotalPrice,
            'total_payment'         => $request['total_payment'],
            'change'                => $request['change'] ? $request['change'] : 0
        ]);

        if($request['payment_category'] == 'Down Payment')
        {
            $storeDownPayment = DownPayment::create([
                'payment_id'            => $storePayment->id,
                'customer_id'           => $customerId,
                'hotel_branch_id'       => $picHotelBranch->hotel_branch_id,
                'down_payment'          => $request['total_payment'],
                'status'                => 'New',
                'claim_date'            => null,
            ]);
        }

        if($request['payment_method_ota']){
            $storePaymentDetailOta = PaymentDetail::create([
                'payment_id'            => $storePayment->id,
                'payment_method_id'     => $request['payment_category_card'],
                'payment'               => $request['payment_ota_value'],
                'change'                => null,
                'bank_name'             => null,
                'card_number'           => null,
                'reference_number'      => null,
            ]);
        }

        if($request['payment_method_cash']){
            $storePaymentDetailCash = PaymentDetail::create([
                'payment_id'            => $storePayment->id,
                'payment_method_id'     => 1,
                'payment'               => $request['payment_cash_value'],
                'change'                => $request['change'],
                'bank_name'             => null,
                'card_number'           => null,
                'reference_number'      => null,
            ]);
        }

        if($request['payment_method_non_cash']){
            if($request['payment_category_card']){
                $storePaymentDetailCard = PaymentDetail::create([
                    'payment_id'            => $storePayment->id,
                    'payment_method_id'     => $request['payment_category_card'],
                    'payment'               => $request['payment_card_value'],
                    'change'                => null,
                    'bank_name'             => null,
                    'card_number'           => $request['payment_method_card_number'],
                    'reference_number'      => null,
                ]);
            }

            if($request['payment_category_qris']){
                $storePaymentDetailQris = PaymentDetail::create([
                    'payment_id'            => $storePayment->id,
                    'payment_method_id'     => $request['payment_category_qris'],
                    'payment'               => $request['payment_qris_value'],
                    'change'                => null,
                    'bank_name'             => null,
                    'card_number'           => null,
                    'reference_number'      => $request['payment_method_qris_reference'],
                ]);
            }

            if($request['payment_category_transfer']){
                $storePaymentDetailTransfer = PaymentDetail::create([
                    'payment_id'            => $storePayment->id,
                    'payment_method_id'     => $request['payment_category_transfer'],
                    'payment'               => $request['payment_transfer_value'],
                    'change'                => null,
                    'bank_name'             => null,
                    'card_number'           => null,
                    'reference_number'      => $request['payment_method_transfer_reference'],
                ]);
            }
        }

        if($amenitiesTotalPrice > 0){
            foreach($paymentAmenitiesTmp as $payAmenities){
                $storePaymentAmenities = PaymentAmenities::create([
                    'payment_id'            => $storePayment->id,
                    'amenities_id'          => $payAmenities->amenities_id,
                    'amount'                => $payAmenities->amount,
                    'price'                 => $payAmenities->price,
                    'total_price'           => $payAmenities->total_price,
                ]);
            }

            $deletePaymentAmenitiesTmp = PaymentAmenitiesTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->delete();
        }

        $storeReservation = Reservation::create([
            'hotel_branch_id'             => $picHotelBranch->hotel_branch_id,
            'user_id'                     => $user->id,
            'customer_id'                 => $customerId,
            'reservation_method_id'       => $customerTmp->reservation_method_id,
            'payment_id'                  => $storePayment->id,
            'booking_number'              => $request['booking_number'] ? $request['booking_number'] : null,
            'reservation_start_date'      => $reservationTmp->reservation_start_date,
            'reservation_end_date'        => $reservationTmp->reservation_end_date,
            'reservation_day_category'    => $reservationTmp->reservation_day_category,
            'status'                      => 'Booking',
        ]);

        foreach($hotelRoomReservedTmp as $index => $roomReserved){
            $storeHotelRoomReserved = HotelRoomReserved::create([
                'reservation_id'              => $reservationTmp->id,
                'hotel_room_number_id'        => $roomReserved->hotel_room_number_id,
                'total_guest'                 => $roomReserved->total_guest,
                'price'                       => $roomReserved->price,
            ]);
        }

        $deleteCustomerTmp = CustomerTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->delete();

        return $request;
    }

    public function storeCustomer($request)
    {
        //define pic hotel branch 
        $user = Auth::user();
        $pic = PicHotelBranch::where('user_id', $user->id)->first();
        $request['hotel_branch_id'] = $pic->hotel_branch_id;

        if($request['customer_check']){
            $getCustomer = Customer::where('id', $request['customer_id'])->first();

            $storeCustomer = CustomerTmp::create([
                'hotel_branch_id'        => $request['hotel_branch_id'],
                'reservation_method_id'  => $request['reservation_method_id'],
                'customer_tmp_id'        => $getCustomer->id,
                'booking_number'         => $request['booking_number'] ? $request['booking_number'] : null,
                'customer_title'         => $getCustomer->customer_title,
                'customer_identity_type' => $getCustomer->customer_identity_type,
                'customer_name'          => $getCustomer->customer_name,
                'customer_email'         => $getCustomer->customer_email,
                'customer_phone'         => $getCustomer->customer_phone,
                'customer_address'       => $getCustomer->customer_address,
                'customer_identity_photo_url' => $getCustomer->customer_identity_photo_url,
                'customer_photo_url' => $getCustomer->customer_photo_url
            ]);
        }else{
            // Upload customer photo and identity photo
            $customerPhoto = $this->uploadFile($request->file('customer_photo'), 'img/customer/identity_photos');
            $customerIdentityPhoto = $this->uploadFile($request->file('customer_identity_photo'), 'img/customer/identity_photos');
            $request['customer_identity_photo_url'] = $customerIdentityPhoto;
            $request['customer_photo_url'] = $customerPhoto;

            //filter request only for customer data
            $customer = $request->only([
                'hotel_branch_id',
                'reservation_method_id',
                'booking_number',
                'customer_title',
                'customer_identity_type', 
                'customer_name', 
                'customer_email', 
                'customer_phone', 
                'customer_address', 
                'customer_identity_photo_url', 
                'customer_photo_url',
            ]);

            //store customer tmp data to database
            $storeCustomer = CustomerTmp::create($customer);
        }
        
        return $storeCustomer;
    }

    public function storeRoomOrder($request)
    {
        $user = Auth::user();
        $picHotelBranch = PicHotelBranch::where('user_id', $user->id)->first();
        $customerTmp = CustomerTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->first();
        $reservationTmp = ReservationTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('customer_tmp_id', $customerTmp->id)->first();

        //check reservation checkout type if type is daily, mixed, and hourly condition
        if($request['daily']){
            $request['reservation_start_date'] = $request['reservation_start_date_daily'];
            $request['reservation_end_date'] = $request['reservation_end_date_daily'];
        }else if($request['mixed']){
            $request['reservation_start_date'] = $request['reservation_start_date_daily'];
            //convert day and hour to datetime with carbon
            $request['reservation_end_date'] = Carbon::parse($request['reservation_start_date_daily'])->addDays($request['mixed_day'])->addHours($request['mixed_hour']);
        }

        if(!$reservationTmp){
            //get admin data for know who input this data and from where hotel branches
            $request->merge([
                'user_id' => $user->id,
                'hotel_branch_id' => $picHotelBranch->hotel_branch_id,
                'customer_tmp_id' => $customerTmp->id
            ]);

            //check reservation status type if method id 1 then the value is checkin, for another id the value is booking
            $request['status'] = $customerTmp->reservation_method_id == 1 ? 'Checkin' : 'Booking';
                //filter request only for reservation data
                $reservation = $request->only([
                    'hotel_branch_id', 
                    'user_id', 
                    'customer_tmp_id', 
                    'reservation_start_date', 
                    'reservation_end_date', 
                    'reservation_day_category',
                    'status', 
                ]);
                $storeReservation = ReservationTmp::create($reservation);
        }

        // //check reservation status type if method id 1 then the value is reservation_start_date_daily add 1 hour
        // $request['reservation_start_date_daily'] = $request['reservation_method_id'] == 1 ? Carbon::parse($request['reservation_end_date_daily'])->addHours(1) : $request['reservation_start_date_daily'];

        $reservationTemporary = ReservationTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('customer_tmp_id', $customerTmp->id)->first();
        $request['reservation_tmp_id'] = $reservationTemporary->id;

        $hotelRoomNumber = HotelRoomNumber::where('id', $request['hotel_room_number_id'])->first();
        $hotelRoomId = $hotelRoomNumber->hotel_room_id;

        $checkin = Carbon::parse($request['reservation_start_date']);
        $checkout = Carbon::parse($request['reservation_end_date']);
        $diff = $checkin->diffInHours($checkout);

        if($diff <= 8){ //harga kamar dibawah 8 jam dibulatkan ke 8 jam
            $priceHour = HotelRoomRate::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_room_id', $hotelRoomId)->where('room_duration', 8)->first();

            $request['price'] = $priceHour->room_rates;
        }else if($diff > 24){ //logic perhitungan khusus untuk harga kamar diatas 24 jam
            $resultDay = intval($diff / 24);
            $remainsHour = $diff % 24;
            if($remainsHour !== 0){
                $remainsHour = $remainsHour < 8 ? 8 : $remainsHour;
                $priceDay = HotelRoomRate::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_room_id', $hotelRoomId)->where('room_duration', 24)->first();
                $priceHour = HotelRoomRate::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_room_id', $hotelRoomId)->where('room_duration', $remainsHour)->first();

                $request['price'] = ($priceDay->room_rates * $resultDay) + $priceHour->room_rates;
            }else{
                $priceDay = HotelRoomRate::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_room_id', $hotelRoomId)->where('room_duration', 24)->first();

                $request['price'] = $priceDay->room_rates * $resultDay;
            }
        }else{
            $priceHour = HotelRoomRate::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('hotel_room_id', $hotelRoomId)->where('room_duration', $diff)->first();

            $request['price'] = $priceHour->room_rates;
        }

        
        $storeHotelRoomReserved = HotelRoomReservedTmp::create([
            'reservation_tmp_id'        => $request['reservation_tmp_id'],
            'hotel_room_number_id'      => $request['hotel_room_number_id'],
            'total_guest'               => $request['total_guest'],
            'price'                     => $request['price'],
        ]);

        return $storeHotelRoomReserved;
    }

    public function storeAmenities($request)
    {
        $user = Auth::user();
        $picHotelBranch = PicHotelBranch::where('user_id', $user->id)->first();
        $breakfast = Amenities::where('amenities', 'Breakfast')->first();
        $extraBed = Amenities::where('amenities', 'Extra Bed')->first();
        $breakfastTmp = PaymentAmenitiesTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('amenities_id', 1)->first();
        $extraBedTmp = PaymentAmenitiesTmp::where('hotel_branch_id', $picHotelBranch->hotel_branch_id)->where('amenities_id', 2)->first();
        

        if($request['amount_breakfast']){
            if($breakfastTmp){
                $breakfastAmount = $breakfastTmp->amount + $request['amount_breakfast'];
                $breakfastTotalPrice = $breakfastTmp->total_price + ($breakfast->price * $request['amount_breakfast']);
                $paymentAmenitiesTmp = $breakfastTmp->update([
                    'amount' => $breakfastAmount,
                    'total_price' => $breakfastTotalPrice
                ]);
            }else{
                $paymentAmenitiesTmp = PaymentAmenitiesTmp::create([
                    'hotel_branch_id' => $picHotelBranch->hotel_branch_id,
                    'amenities_id' => $breakfast->id,
                    'amount' => $request['amount_breakfast'],
                    'price'  => $breakfast->price,
                    'total_price' => $breakfast->price * $request['amount_breakfast']
                ]);
            }
        }
        
        if($request['amount_extra_bed']){
            if($extraBedTmp){
                $extraBedAmount = $extraBedTmp->amount + $request['amount_extra_bed'];
                $extraBedTotalPrice = $extraBedTmp->total_price + ($extraBed->price * $request['amount_extra_bed']);
                $paymentAmenitiesTmp = $extraBedTmp->update([
                    'amount' => $extraBedAmount,
                    'total_price' => $extraBedTotalPrice
                ]);
            }else{  
                $paymentAmenitiesTmp = PaymentAmenitiesTmp::create([
                    'hotel_branch_id' => $picHotelBranch->hotel_branch_id,
                    'amenities_id' => $extraBed->id,
                    'amount' => $request['amount_extra_bed'],
                    'price'  => $extraBed->price,
                    'total_price' => $extraBed->price * $request['amount_extra_bed']
                ]);
            }
        }

        return $paymentAmenitiesTmp;
    }

    private function uploadFile($file, $destinationPath)
    {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path($destinationPath), $fileName);
        return "$destinationPath/$fileName";
    }
}

?>