<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Repair_records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index(){
        $records=Repair_records::where('user_id',1)->get();
        return view('user.records',compact('records'));
    }
}
