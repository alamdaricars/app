<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_car;
use App\Models\Warranty;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all()->sortByDesc('created_at');;
        return view('admin.user',compact('users'));

    }
    public function user_records(User $id)
    {
//        foreach ($id->admission as $i)
//        {
//            dd($i->type());
//        }

      return view('admin.user_recordes', compact('id'));
    }
    public function user_edit(User $id)
    {   //dd($id->user_car->color());
        return view('admin.user_edite',compact('id'));
    }


    public function user_edit_store(User $id,Request $request)
    {
        //validate
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ],[
            'name.required'=>'فیلد نام اجباری می باشد',
            'email.required'=>'فیلد ایمیل اجباری می باشد'
        ]);
        //store data
        $id->update(['name'=>$request->input('name')
        ,
            'email'=>$request->input('email')]);
       // return view('admin.')
        return view('admin.user')->with('success','کاربر با موفقیت ویرایش شد');

    }
    public function user_edit_care_store(User $id,Request $request)
    {
        $request->validate([
            'model'=>'required',

        ],[
            'name.required'=>'فیلد مدل خودرو اجباری می باشد',

        ]);
        $user_car=User_car::find($id)->first();
        $user_car->update([
            'model'=>$request->input('model'),
            'color'=>$request->input('tab')
        ]);
        return redirect()->route('admin.users')->with('success','کاربر با موفقیت ویرایش شد');


    }

    public function user_new(Request $request)
    {
       return view('admin.user_new');

    }
    public function user_new_store(Request $request)
    {
          //  dd($request->input());
        $request->validate([
            'phone'=>'unique:App\Models\User,phone|numeric',
            'email'=>'required|email:rfc,dns',
            'Model'=>'required|numeric',

        ],[
            'phone.unique'=>'کاربر با این مشخصات در سیستم موجود میباشد',
            'phone.numeric'=>'شماره تلفن باید با فرمت تلفن وارد شود',
            'email.email'=>'فیلد ایمیل باید با فرمت ایمیل وارد شود',
            'Model.numeric'=>'فیلد مدل باید با عدد وارد شود'
        ]);
            $user_insert=User::create([
                'name'=>$request->input('name'),
                'role'=>2,
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone')
            ]);
            $warranty_insert=Warranty::create([
                'user_id'=>$user_insert->id,
                'date_start'=>$request->input('date'),

            ]);
            $user_car_details=User_car::create([
                'user_id'=>$user_insert->id,
                'warranty_id'=>$warranty_insert->id,
                'Model'=>$request->input('Model'),
                'color'=>$request->input('color')
            ]);
            return redirect()->route('admin.users')->with('success','کاربر با موفقیت ثبت شد');
    }
    public function search(Request $request)
    {
        $name=$request->input('name');
        $users=User::where('name', 'like', '%'.$name.'%')->get();

        return view('admin.user',compact('users'));

    }
}
