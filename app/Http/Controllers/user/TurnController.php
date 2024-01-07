<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TurnController extends Controller
{
    public function reservation_person(){
        return view('user.Appointment_reservation');
    }
    public function onsite_service(){
        return view('user.On-site_service');
    }
}
