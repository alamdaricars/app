<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_car;
use App\Models\Warranty;
use Carbon\Carbon;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){
        $user=User::where('id',1)->first();
$user_car=User_car::where('user_id',$user->id)->first();
$warrenty=Warranty::where('user_id',$user->id)->first();
        $warrantyDate = Carbon::createFromFormat('Y-m-d', $warrenty->date_start);

        return view('user.profile',compact('user','user_car','warrantyDate'));
    }
}
