<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Turn;
use App\Models\Turn_on_side;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TurnController extends Controller
{
    public function reservation_person()
    {
        $turns = Turn::where('user_id', 1)->where('status', 0)->get();
        return view('user.Appointment_reservation', compact('turns'));
    }

    public function reservation_person_store(Request $request)
    {
        //validate
        $request->validate([
            'date' => 'required',

        ], [
            'date.required' => 'فیلد تاریخ الزامی می باشد',

        ]);
        //store in database
        $resposn = $turns = Turn::where('user_id', 1)->where('status', 0)->get();
        $active_admission=Admission::where('user_id', 1)->where('status','!=','4')->where('status','!=','5')->get();
        if (count($resposn) == 1 || count($active_admission) == 1) {
            return redirect()->route('user.reservation_in-person')->with('error', 'شما یک سفارش باز دارید');

        } else {
           
            if ($request->input('serv') == 1){
                $type=2;
            }else{
                $type=1;
            }
            $turn_store = Turn::create([
                'user_id' => 1,
                'status' => 0,
'admission'=>0,
                'problem' => $request->input('problem'),
                'type' => $type,
                'Service_date' => $request->input('date')

            ]);
            if ($turn_store) {
                return redirect()->route('user.reservation_in-person')->with('success', 'درخواست شما با موفقیت ثبت شد');
            }

        }
        //route

    }

    public function onsite_service()
    {
        $turns = Turn_on_side::where('user_id', 1)->where('status', 0)->get();
        return view('user.On-site_service',compact('turns'));
    }
    public function onsite_service_store(Request $request){
        //validate
       // dd($request->input());
        $request->validate([
            'date' => 'required',
            'address' => 'required'
        ], [
            'date.required' => 'فیلد تاریخ الزامی می باشد',
            'address.required' => 'فیلد آدرس الزامی می باشد'
        ]);
        //store in database
        $resposn = $turns = Turn_on_side::where('user_id', 1)->where('status', 0)->get();
        $active_admission=Admission::where('user_id', 1)->where('status','!=','4')->where('status','!=','5')->get();
        if (count($resposn) == 1  || count($active_admission) == 1) {
            return redirect()->route('user.onsite_service')->with('error', 'شما یک سفارش باز دارید');

        } else {
            $turn_store = Turn_on_side::create([
                'user_id' => 1,
                'status' => 0,
                'address' => $request->input('address'),
                'Service_date' => $request->input('date')

            ]);
            if ($turn_store) {
                return redirect()->route('user.onsite_service')->with('success', 'درخواست شما با موفقیت ثبت شد');
            }

        }
        //route
    }
}
