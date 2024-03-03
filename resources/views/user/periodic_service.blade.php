@extends('user.index')
@section('content')

    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-3">
            <div class="card-body">
                <h3 class="card-title text-white">تاریخ سرویس دوره ای پیش رو شما</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{\Morilog\Jalali\Jalalian::fromCarbon($serviceDate)->format('Y/m/d') }}</h2>
                    <p class="text-white mb-0">در این تاریخ به خدمات پس از فروش مراجعه فرمایید</p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
            </div>
        </div>
    </div>
@endsection
