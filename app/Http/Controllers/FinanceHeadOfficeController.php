<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ReservationMethod;
use App\Models\PicHotelBranch;
use App\Models\HotelRoom;
use App\Models\PaymentMethod;
use App\Models\HotelRoomNumber;
use App\Services\ReservationService;
use App\Models\CustomerTmp;
use App\Models\HotelRoomReservedTmp;
use App\Models\ReservationTmp;
use App\Models\PaymentAmenitiesTmp;
use App\Models\Reservation;
use App\Models\DownPayment;
use App\Models\Payment;
use App\Models\HotelRoomReserved;
use App\Models\PaymentDetail;
use App\Models\HotelBranch;
use Carbon\Carbon;

class FinanceHeadOfficeController extends Controller
{
    private $service;

    public function __construct(ReservationService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $paymentMethod = PaymentMethod::all();
        $hotelBranch = HotelBranch::all();
        $query = Reservation::query();
        $queryDP = Reservation::query();

        $getReservation = $query->get();
        $reservationId = [];
        $paymentId = [];

        foreach ($getReservation as $reservationData) {
            $reservationId[] = $reservationData->id;
            $paymentId[] = $reservationData->payment_id;
        }   

        $totalIncomeRoom = HotelRoomReserved::whereIn('reservation_id', $reservationId)->sum('price');
        $totalIncomeRoom = number_format($totalIncomeRoom, 0, ',', '.');
        $totalDownPayment = DownPayment::whereIn('payment_id', $paymentId)->sum('down_payment');
        $totalDownPayment = number_format($totalDownPayment, 0, ',', '.');

        // Apply filters based on dropdown selections
        if ($request->filled('payment_check')) {
            $paymentCheck = $request['payment_check'];

            $query->whereHas('payment', function ($query) use ($paymentCheck) {
                $query->where('payment_check', $paymentCheck);
            });
        }
        
        if($request->filled('payment_method_id')){
            $paymentMethodId = $request['payment_method_id'];

            $query->whereHas('payment', function ($query) use ($paymentMethodId) {
                $query->whereHas('paymentDetail', function ($query) use ($paymentMethodId) {
                    $query->where('payment_method_id', $paymentMethodId);
                });
            });
        }

        // Apply filters based on dropdown selections
        if ($request->filled('checkin')) {
            $checkin = $request['checkin'];

            $query->whereDate('reservation_start_date', $checkin);
        }

        if ($request->filled('checkout')) {
            $checkout = $request['checkout'];

            $query->whereDate('reservation_end_date', $checkout);
        }

        // Apply filters based on dropdown selections
        if ($request->filled('payment_check_dp')) {
            $paymentCheck = $request['payment_check_dp'];

            $queryDP->whereHas('payment', function ($queryDP) use ($paymentCheck) {
                $queryDP->where('payment_check', $paymentCheck);
            });
        }
        
        if($request->filled('payment_method_id_dp')){
            $paymentMethodId = $request['payment_method_id_dp'];

            $queryDP->whereHas('payment', function ($queryDP) use ($paymentMethodId) {
                $queryDP->whereHas('paymentDetail', function ($queryDP) use ($paymentMethodId) {
                    $queryDP->where('payment_method_id', $paymentMethodId);
                });
            });
        }

        // Apply filters based on dropdown selections
        if ($request->filled('checkin_dp')) {
            $checkin = $request['checkin_dp'];

            $queryDP->whereDate('reservation_start_date', $checkin);
        }

        if ($request->filled('checkout_dp')) {
            $checkout = $request['checkout_dp'];

            $queryDP->whereDate('reservation_end_date', $checkout);
        }

        $reservation = $query->with('payment.paymentDetail.paymentMethod', 'customer', 'payment.downPayment', 'hotelRoomReserved', 'reservationMethod',)->paginate(10);

        $downPayment = $queryDP->whereHas('payment', function ($queryDP) {
            $queryDP->where('payment_status', 'DP');
        })->with('payment.paymentDetail.paymentMethod', 'customer', 'payment.downPayment', 'hotelRoomReserved', 'reservationMethod',)->paginate(10);

        return view('admin.financeHO.index', compact('reservation', 'downPayment', 'paymentMethod', 'totalIncomeRoom', 'totalDownPayment', 'hotelBranch'));
    }
}
