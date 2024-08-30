<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRoom;
use App\Models\HotelRoomNumber;
use App\Models\HotelRoomRate;
use App\Models\HotelRoomStatus;
use App\Models\PicHotelBranch;
use App\Services\RoomManagementService;
use Illuminate\Support\Facades\Auth;

class RoomManagementController extends Controller
{
    private $service;

    public function __construct(RoomManagementService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $i = 1;
        $user = Auth::user();
        $pic = PicHotelBranch::where('user_id', $user->id)->first();
        $hotelRoomNumber = HotelRoomNumber::where('hotel_branch_id', $pic->hotel_branch_id)->with('hotelRoom', 'hotelRoomStatus')->paginate(10);
        $roomType = HotelRoom::all();
        $roomStatus = HotelRoomStatus::all();
        
        return view('supervisor.room-management.index', compact('hotelRoomNumber', 'i', 'roomType', 'roomStatus'));
    }

    public function roomType()
    {
        $i = 1;
        $hotelRoomType = HotelRoom::paginate(10);
        
        return view('supervisor.room-management.room-type.index', compact('hotelRoomType', 'i'));
    }

    public function roomPrice()
    {
        $i = 1;
        $user = Auth::user();
        $pic = PicHotelBranch::where('user_id', $user->id)->first();
        $hotelRoomPrice = HotelRoomRate::where('hotel_branch_id', $pic->hotel_branch_id)->with('hotelRoom')->paginate(10);
        $roomType = HotelRoom::all();
        $categoryDay = ['Weekday', 'Weekend', 'High Season', 'Middle Day'];

        return view('supervisor.room-management.room-price.index', compact('hotelRoomPrice', 'roomType', 'categoryDay', 'i'));
    }

    public function storeRoomBranch(Request $request)
    {
        try{    
            $store = $this->service->storeRoomBranch($request);
            // Flash success message to the session
            session()->flash('success', 'Tambah Room Berhasil');
        }catch(\Throwable $th){
            // Flash success message to the session
            session()->flash('error', 'Tambah Room Gagal');
            return $th;
        }
        return redirect()->route('supervisor.room-management.index');
    }

    public function updateRoomBranch(Request $request)
    {
        try{    
            $store = $this->service->updateRoomBranch($request);
            // Flash success message to the session
            session()->flash('success', 'Update Room Berhasil');
        }catch(\Throwable $th){
            // Flash success message to the session
            session()->flash('error', 'Update Room Gagal');
            return $th;
        }
        return redirect()->route('supervisor.room-management.index');
    }

    public function deleteRoomBranch($id)
    {
        try{    
            $delete = $this->service->deleteRoomBranch($id);
            // Flash success message to the session
            session()->flash('success', 'Delete Room Berhasil');
        }catch(\Throwable $th){
            // Flash success message to the session
            session()->flash('error', 'Delete Room Gagal');
            return $th;
        }
        return redirect()->route('supervisor.room-management.index');
    }

    public function storeRoomType(Request $request)
    {
        try{    
            $store = $this->service->storeRoomType($request);
            // Flash success message to the session
            session()->flash('success', 'Tambah Room Type Berhasil');
        }catch(\Throwable $th){
             // Flash failed message to the session
            session()->flash('error', 'Tambah Room Type Gagal');
            return $th;
        }
        return redirect()->route('supervisor.room-management.room-type.index');
    }

    public function updateRoomType(Request $request)
    {
        try{    
            $update = $this->service->updateRoomType($request);
            // Flash success message to the session
            session()->flash('success', 'Update Room Type Berhasil');
        }catch(\Throwable $th){
            // Flash success message to the session
            session()->flash('error', 'Update Room Type Gagal');
            return $th;
        }
        return redirect()->route('supervisor.room-management.room-type.index');
    }

    public function storeRoomPrice(Request $request)
    {
        try{    
            $store = $this->service->storeRoomPrice($request);
            // Flash success message to the session
            session()->flash('success', 'Tambah Harga Room Berhasil');
        }catch(\Throwable $th){
            // Flash failed message to the session
            session()->flash('error', 'Tambah Harga Room Gagal');
            return $th;
        }
        return redirect()->route('supervisor.room-management.room-price.index');
    }

    public function updateRoomPrice(Request $request)
    {
        try{    
            $store = $this->service->updateRoomPrice($request);
            // Flash success message to the session
            session()->flash('success', 'Update Room Price Berhasil');
        }catch(\Throwable $th){
            // Flash success message to the session
            session()->flash('error', 'Update Room Price Gagal');
            return $th;
        }
        return redirect()->route('supervisor.room-management.room-price.index');
    }
}
