<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function reservation()
    {
        return view('user.Appointment_reservation');
    }
}
