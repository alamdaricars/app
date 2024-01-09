<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\User;
use App\Models\User_car;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $result= Admission::where('user_id',1)->where('status','!=','4')->get();
        $user_car=User_car::where('user_id',1)->first();


        return view('user.dashboard',compact('result','user_car'));
    }
    public function reservation()
    {
        return view('user.Appointment_reservation');
    }
}
