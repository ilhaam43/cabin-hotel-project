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
        $pic = PicHotelBranch::where('user_id', $user->id)->first();
        $paymentMethod = PaymentMethod::all();
        $query = Reservation::query();
        $queryDP = Reservation::query();

        $getReservation = $query->get();
        $reservationId = [];
        $paymentId = [];

        foreach ($getReservation as $reservationData) {
            $reservationId[] = $reservationData->id;
            $paymentId[] = $reservationData->payment_id;
        }   

        $dateNow = Carbon::now('Asia/Bangkok')->isoFormat('DD MMMM YYYY');
        $dateQuery = Carbon::now()->toDateString();
        
        $totalIncomeRoom = Payment::whereIn('id', $paymentId)->whereDate('created_at', $dateQuery)->sum('total_payment');
        $totalIncomeRoom = number_format($totalIncomeRoom, 0, ',', '.');
        $totalDownPayment = DownPayment::whereIn('payment_id', $paymentId)->whereDate('created_at', $dateQuery)->sum('down_payment');
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
        if ($request->filled('payment_date')) {
            $paymentDate = $request['payment_date'];

            $query->whereHas('payment', function ($query) use ($paymentDate) {
                $query->whereDate('updated_at', $paymentDate);
            });
        }

        if ($request->filled('hotel_branch')) {
            
            $hotelBranch = $request['hotel_branch'];

            if($hotelBranch == 'All'){
                $query->whereNot('hotel_branch_id', $hotelBranch);
            }else{
                $query->where('hotel_branch_id', $hotelBranch);
            }
        }

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
        if ($request->filled('payment_date_dp')) {
            $paymentDate = $request['payment_date_dp'];

            $queryDP->whereHas('payment', function ($queryDP) use ($paymentDate) {
                $queryDP->whereDate('updated_at', $paymentDate);
            });
        }

        if ($request->filled('hotel_branch_dp')) {
            
            $hotelBranch = $request['hotel_branch_dp'];

            if($hotelBranch == 'All'){
                $queryDP->whereNot('hotel_branch_id', $hotelBranch);
            }else{
                $queryDP->where('hotel_branch_id', $hotelBranch);
            }
        }

        if ($request->filled('checkin_dp')) {
            $checkin = $request['checkin_dp'];

            $queryDP->whereDate('reservation_start_date', $checkin);
        }

        if ($request->filled('checkout_dp')) {
            $checkout = $request['checkout_dp'];

            $queryDP->whereDate('reservation_end_date', $checkout);
        }

        $reservation = $query->with('payment.paymentDetail.paymentMethod', 'customer', 'payment.downPayment', 'hotelRoomReserved', 'reservationMethod')->paginate(10);

        $downPayment = $queryDP->whereHas('payment', function ($queryDP) {
            $queryDP->where('payment_status', 'DP');
        })->with('payment.paymentDetail.paymentMethod', 'customer', 'payment.downPayment', 'hotelRoomReserved', 'reservationMethod',)->paginate(10);

        $hotelBranch = HotelBranch::all();

        return view('financeHO.index', compact('reservation', 'downPayment', 'paymentMethod', 'totalIncomeRoom', 'totalDownPayment', 'dateNow', 'hotelBranch'));
    }

    public function reportHeadOffice(Request $request)
    {
        $from = $request['pdf_from'];
        $to = $request['pdf_to'];
        $branch = $request['pdf_hotel_branch'];
        return redirect()->route('pdf.report.finance-ho', ['from' => $from, 'to' => $to, 'branch' => $branch]);
    }
}
