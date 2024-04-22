<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Turn;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class TurnsController extends Controller
{
    public function index()
    {
        $turns=Turn::all();
        $today=Jalalian::now()->format('Y-m-d');
        $Tomorrow=Jalalian::now()->addDay()->format('Y-m-d');
        $datas=$turns->pluck('Service_date')->toArray();
        // dd(Carbon::parse($datas)->toDateString());
        $en_dates=[];
        $test=[];
        foreach ($datas as $data){
            $en_dates[]= Carbon::parse($data)->toDateString();
        }
        foreach ($en_dates as $en_date){
            if ($en_date == $today){
                $test[]=$en_date;
            }
        }
        return view('admin.turns',compact('turns','today','Tomorrow'));
    }
    public function accept(Turn $id)
    {
        //todo:sms for accepting

        $id->status = 1;
        $id->save();
        return redirect()->route('admin.turns')->with('success','کاربر با موفقیت پذیرش شد');
    }
    public function unaccept(Turn $id)
    {
            //todo:sms for cancelling
        $id->status = 2;
        $id->save();
        return redirect()->route('admin.turns')->with('success','کاربر با موفقیت رد پذیرش شد');
    }
}
