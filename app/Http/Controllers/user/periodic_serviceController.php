<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class periodic_serviceController extends Controller
{
    public function index(){
        return view('user.periodic_service');
    }
}
