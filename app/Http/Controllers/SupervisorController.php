<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRoomNumber;

class SupervisorController extends Controller
{
    public function index()
    {
        return view('supervisor.index');
    }
}
