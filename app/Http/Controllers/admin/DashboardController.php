<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Turn;
use App\Models\Turn_on_side;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class DashboardController extends Controller
{
    public function index()
    {
        $turns=Turn::all();
        $turns_on_side=Turn_on_side::all();
        $admission_details=Admission::all();
            // time
        $today=Jalalian::now()->format('Y-m-d');
        //dd($today);
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


      //dd($en_date);
//foreach ($datas as $data){
//   var_dump(Carbon::parse($data)->toDateString());
//
//}

        return view('admin.dashboard',compact('turns','turns_on_side','admission_details','test'));
    }
}
