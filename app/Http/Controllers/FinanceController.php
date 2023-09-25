<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function index() 
    {
        $user = Auth::user();
        return view('admin.finance.index');
    }
}
