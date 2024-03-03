<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Warranty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class periodic_serviceController extends Controller
{



    public function index(){
        $date_start_warrenty=Warranty::where('user_id',1)->first();
       // $test=Carbon::now()->addMonth(16)->toDateString() - ;
    //    dd($test);


        // تاریخ کارت گارانتی را از کاربر دریافت کنید
        $warrantyDate = Carbon::createFromFormat('Y-m-d', $date_start_warrenty->date_start);
$datee=$warrantyDate->copy();
// محاسبه تاریخ های سرویس دوره ای
        for($i = 1; $i <= 6; $i++){
            //محاسبه ی ماه
            $serviceDate = $warrantyDate->copy()->addMonths(6 * $i);
           // dd($serviceDate);
           //محاسبه ی آخرین سرویس
            $endservice=$warrantyDate->copy()->addMonths(36);
          //  dd($serviceDate->isPast());
            if($serviceDate->isPast() ){
                var_dump('زمان سرویس دوره ای رایگان شما به پایان رسیده است',$serviceDate->toDateString(),$i);
            }
            if (!$serviceDate->isPast() ){
               // var_dump($serviceDate->toDateString(),$warrantyDate->addMonths(36)->toDateString(),Jalalian::fromCarbon($datee)->format('Y/m/d'),$i) ;
                return view('user.periodic_service',compact('serviceDate'));
              // var_dump($serviceDate->toDateString(),$endservice->toDateString(),$i);
            }
        }//var_dump($serviceDate->toDateString(),$warrantyDate->addMonths(36)->toDateString(),$i) ;



      //  return view('user.periodic_service');
    }
}
