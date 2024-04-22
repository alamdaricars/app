@extends('user.index')
@section('content')
    @if(count($result) != 0)
        @switch($result->first()->status)
            @case(1)
                    <?php $bar = 30;
                    $status = 'پذیرش انجام شده';
                    $opinion = 0;
                    ?>
                @break

            @case(2)
                    <?php
                    $bar = 60;
                    $status = 'کارشناسی شده';
                    $opinion = $result->first()->Expert_opinion;

                    ?>
                @break
            @case(3)
                    <?php $bar = 80;
                    $status = 'در دست تعمیر';
                    $opinion = 0;
                    ?>
                @break

            @default

        @endswitch
        <div class="card">
            <div class="card-body">
                <h5 class="mt-3">{{$status}} <span class="float-right">{{$bar}}%</span></h5>
                <div class="progress" style="height: 30px">
                    <div class="progress-bar bg-info active progress-bar-striped" style="width: {{$bar}}%;"
                         role="progressbar"><span class="sr-only">60% Complete</span>
                    </div>
                </div>
            </div>
            @if($opinion)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center">نظر کارشناس مربوطه</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text" style="text-align: center">{{$result->first()->Expert_opinion}}</p>


                    </div>
                </div>
            @endif
        </div>
    @else
        <div class="alert alert-success">شما در حال حاضر هیچ پذیرش فعالی در نمایندگی خدمات پس از فروش لاماری ندارین</div>
    @endif
@endsection
