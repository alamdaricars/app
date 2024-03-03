@extends('user.index')
@section('content')
    <div class="col-lg-4 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center mb-4">

                    <div class="media-body" style="text-align: center">
                        <h3 class="mb-0">{{$user->name}}</h3>

                    </div>
                </div>

                <div class="row mb-5">

                    <div class="col">
                        <div class="card card-profile text-center">
                            <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                            <h3 class="mb-0">مشخصات خودرو شما</h3>
                            <p class="text-muted">{{'مدل'.' '.$user_car->Model}}</p>
                            <p class="text-muted">{{ 'رنگ'.' '.$user_car->color()}}</p>
                        </div>
                    </div>

                </div>

<div style="direction: rtl;text-align: center">
                <ul class="card-profile__info">
                    <li class="mb-1"><strong class="text-dark mr-4">موبایل:</strong> <span>{{$user->phone}}</span></li>
                    <li><strong class="text-dark mr-4">ایمیل:</strong> <span>{{$user->email}}</span></li>
                    <li><strong class="text-dark mr-4">شروع تاریخ گارانتی شما:</strong> <span>{{\Morilog\Jalali\Jalalian::fromCarbon($warrantyDate)->format('Y/m/d') }}</span></li>
                </ul></div>
            </div>
        </div>
    </div>
@endsection
