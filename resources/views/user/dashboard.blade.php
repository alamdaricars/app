@extends('user.index')
@section('content')
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">پذیرش فعال</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{count($result)}}</h2>
                    @if(count($result) == 0)
                    <p class="text-white mb-0">شما در حال حاضر پذیرش فعال در نمایندگی لاماری ندارید</p>
                    @else
                        <p class="text-white mb-0">شما دارای پذیرش فعال می باشید </p>

                    @endif
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card">
            <img class="img-fluid" src="َ{{asset('user/images/cars/1.jpg')}}" alt="">
            <div class="card-body">
                <h5 class="card-title">خودرو لاماری</h5>
                <p class="card-text">{{$user_car->Model}}</p>
                <p class="card-text">{{$user_car->color()}}</p>


            </div>
        </div>
    </div>
@if(count($result) != 0)
    @switch($result->first()->status)
        @case(1)
                <?php $bar=30;
                $status ='پذیرش انجام شده' ;
                $opinion = 0;
                ?>
            @break

        @case(2)
                <?php
                $bar=60;
                $status ='کارشناسی شده' ;
                $opinion = $result->first()->Expert_opinion;
                ?>
            @break
        @case(3)
                <?php $bar=80;
                $status ='در دست تعمیر' ;
                $opinion = 0;
                ?>
            @break

        @default

    @endswitch
    <div class="card"><div class="card-body">
    <h5 class="mt-3">{{$status}} <span class="float-right">{{$bar}}%</span></h5>
    <div class="progress" style="height: 30px">
        <div class="progress-bar bg-info active progress-bar-striped" style="width: {{$bar}}%;" role="progressbar"><span class="sr-only">60% Complete</span>
        </div>
    </div>
        </div>

@endif</div>

@endsection
