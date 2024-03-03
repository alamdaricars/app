<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class Active_acceptanceController extends Controller
{
    public function index(){
        $result= Admission::where('user_id',1)->where('status','!=','4')->where('status','!=','5')->get();
        return view('user.Active_acceptance',compact('result'));
    }
}
