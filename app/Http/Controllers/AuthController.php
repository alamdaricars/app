<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('user.Auth.login');
    }
    public function send_sms(Request $request)
    {
        $request->validate([
            'phone'=>'numeric|exists:users,phone'
        ],[
            'phone.numeric'=>'فیلد شماره تلفن باید از عدد باشد و باید با قالب شماره تلفن باشد',
            'phone.exists'=>'کاربری با این شماره تلفن موجود نمی باشد'
        ]);
        $rand_sms=random_int(10000, 99999);
        session(['smsnumber' => $rand_sms,'user'=>$request->input('phone')]);
        //todo:send sms
        return view('user.Auth.login_sms_validat');
    }
    public function validate_sms(Request $request)
    {
        $sms=session()->pull('smsnumber');
        $user=session()->pull('user');

        if ($request->input('sms') == $sms){
            $find_user=User::where('phone',$user)->first();
            Auth::login($find_user);
                return redirect()->route('user.dashboard');
        }else{

            return redirect()->route('user.login')->with('error','رمز وارد شده صحیح نمیباشد');
        }


    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
