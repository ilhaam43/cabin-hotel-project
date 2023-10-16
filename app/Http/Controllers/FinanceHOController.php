<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class FinanceHOController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.financeHO.index');
    }
}
