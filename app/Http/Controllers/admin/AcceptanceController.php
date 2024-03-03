<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Repair_records;
use App\Models\Turn;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class AcceptanceController extends Controller
{
    public function index()
    {

        $admitions = Admission::all();

        return view('admin.acceptance', compact('admitions'));
    }

    public function accept(Turn $id)
    {
        return view('admin.Announced_date_of_delivery', compact('id'));
    }

    public function accept_store(Turn $id, Request $request)
    {
        $request->validate([
            'Announced_date_of_delivery' => 'required'
        ], [
            'Announced_date_of_delivery.required' => 'وارد کردن فیلد تاریخ الزامی میباشد'
        ]);

        if ($request->has('warranty') == true) {
            $warranty = 1;
        } else {
            $warranty = 0;
        }
        Admission::create([
            'user_id' => $id->user_id,
            'turn_id' => $id->id,
            'problem' => $id->problem,
            'Service_date' => $id->Service_date,
            'Announced_date_of_delivery' => $request->input('Announced_date_of_delivery'),
            'status' => 1,
            'type' => $id->type,
            'warranty' => $warranty,

        ]);
        $id->admission = 1;
        $id->save();
        return redirect()->route('admin.turns')->with('success', 'کاربر با موفقیت پذیرش شد');
    }

    public function Expert_opinion(Admission $id)
    {
        return view('admin.Expert_opinion', compact('id'));
    }

    public function Expert_opinion_store(Admission $id, Request $request)
    {
        $id->update(['Expert_opinion' => $request->input('Expert_opinion')
            ,
            'status' => 2]);

        return redirect()->route('admin.acceptance')->with('success', 'عملیات با موفقیت انجام شد');
    }

    public function change_status_Maintenance(Admission $id)
    {


        $id->update(['status' => 3]);
        return redirect()->route('admin.acceptance')->with('success', 'عملیات با موفقیت انجام شد');
    }

    public function change_status_Awaiting_delivery(Admission $id)
    {

        $id->update(['status' => 4]);

        return redirect()->route('admin.acceptance')->with('success', 'عملیات با موفقیت انجام شد');
    }


    public function change_status_Delivered(Admission $id)
    {
        $id->update(['status' => 5]);
        $today = Jalalian::now()->format('Y-m-d');

        Repair_records::create([
            'user_id' => $id->user_id,
            'admission_id' => $id->id,
            'problem' => $id->problem,
            'Expert_opinion' => $id->Expert_opinion,
            'Service_date' => $id->Service_date,
            'Delivery_Date' => $today,
            'warranty' => $id->warranty,
            'type' => $id->type,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('admin.acceptance')->with('success', 'عملیات با موفقیت انجام شد');
    }


}
