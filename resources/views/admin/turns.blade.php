@extends('admin.index')
@section('content')
    //نوبت ها
@include('admin.layouts.success')
    <div class="col">
        <div class="card shadow">
            <!-- header & label of table -->
            <div class="card-header bg-transparent border-0">
                <h3 class=" mb-0">نوبت های در انتظار تایید</h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
                <!-- table content -->
                <table class="table align-items-center  table-flush">
                    <!-- column names -->
                    <thead class="thead">
                    <tr>
                        <th scope="col">نام</th>
                        <th scope="col">تاریخ</th>
                        <th scope="col">نوع پذیرش</th>
                        <th scope="col">شماره تماس</th>
                        <th scope="col">عملیات</th>

                    </tr>
                    </thead>
                    <!-- first row -->
                    <tbody>
                    @foreach($turns as $turn)
                        @if($turn->status == 0 && $turn->admission == 0)

                    <tr>
                        <!-- project column -->
                        <th scope="row">
                            <div class="media align-items-center">
                                <!-- avatar -->

                                <!-- row name -->
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{$turn->user->name}}</span>
                                </div>
                            </div>
                        </th>
                        <!-- budget column -->
                        <td>
                            {{$turn->Service_date}}
                        </td>
                        <td>
{{$turn->type()}}
                        </td>
                        <td>
                            {{$turn->user->phone}}
                        </td>
                        <!-- status column -->

                        <!-- users column -->

                        <!-- completion column -->

                        <td class="text-right">
                            <div class="dropdown d-flex justify-content-center" id="manage-account">
                                <!-- dropdown icon -->
                                <a href="#" class="d-flex align-items-center justify-content-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>
                                <!-- options dropdown -->
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
                                    <li><a class="dropdown-item" href="{{route('admin.turns.accept',$turn->id)}}">تایید نوبت</a></li>
                                    <li><a class="dropdown-item" href="#">رد نوبت</a></li>
{{--                                    <li><a class="dropdown-item" href="#">مشخصات رزرو کننده</a></li>--}}

                                </ul>
                            </div>
                        </td>
                    </tr>
                        @endif
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <hr>
    <div class="col">
        <div class="card shadow">
            <!-- header & label of table -->
            <div class="card-header bg-transparent border-0">
                <h3 class=" mb-0">نوبت های امروز(در انتظار پذیرش)</h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
                <!-- table content -->
                <table class="table align-items-center  table-flush">
                    <!-- column names -->
                    <thead class="thead">
                    <tr>
                        <th scope="col">نام</th>
                        <th scope="col">تاریخ</th>
                        <th scope="col">نوع پذیرش</th>
                        <th scope="col">شماره تماس</th>
                        <th scope="col">عملیات</th>

                    </tr>
                    </thead>
                    <!-- first row -->
                    <tbody>
                    @foreach($turns as $turn)
                        @if($turn->Service_date == $today && $turn->status == 1 && $turn->admission != 1)
                    <tr>
                        <!-- project column -->
                        <th scope="row">
                            <div class="media align-items-center">
                                <!-- avatar -->

                                <!-- row name -->
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{$turn->user->name}}</span>
                                </div>
                            </div>
                        </th>
                        <!-- budget column -->
                        <td>
                            {{$turn->Service_date}}
                        </td>
                        <td>
                            {{$turn->type()}}
                        </td>
                        <!-- status column -->
                        <td>   {{$turn->user->phone}}</td>
                        <!-- users column -->

                        <!-- completion column -->

                        <td class="text-right">
                            <div class="dropdown d-flex justify-content-center" id="manage-account">
                                <!-- dropdown icon -->
                                <a href="#" class="d-flex align-items-center justify-content-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>
                                <!-- options dropdown -->
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
                                    <li><a class="dropdown-item" href="{{route('admin.acceptance.accept',$turn->id)}}">تایید پذیرش</a></li>
                                    <li><a class="dropdown-item" href="#">رد پذیرش</a></li>
                                    <li><a class="dropdown-item" href="#">مشخصات رزرو کننده</a></li>

                                </ul>
                            </div>
                        </td>
                    </tr>
                        @endif   @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="col">
        <div class="card shadow">
            <!-- header & label of table -->
            <div class="card-header bg-transparent border-0">
                <h3 class=" mb-0">نوبت های فردا</h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
                <!-- table content -->
                <table class="table align-items-center  table-flush">
                    <!-- column names -->
                    <thead class="thead">
                    <tr>
                        <th scope="col">نام</th>
                        <th scope="col">تاریخ</th>
                        <th scope="col">نوع پذیرش</th>
                        <th scope="col">عملیات</th>

                    </tr>
                    </thead>
                    <!-- first row -->
                    <tbody>
                    @foreach($turns as $turn)
                        @if($turn->Service_date == $Tomorrow && $turn->admission == 0 && $turn->status == 1)
                    <tr>
                        <!-- project column -->
                        <th scope="row">
                            <div class="media align-items-center">
                                <!-- avatar -->

                                <!-- row name -->
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{$turn->user->name}}</span>
                                </div>
                            </div>
                        </th>
                        <!-- budget column -->
                        <td>
                            $2,500 USD
                        </td>
                        <td>
                            $2,500 USD
                        </td>
                        <!-- status column -->

                        <!-- users column -->

                        <!-- completion column -->

                        <td class="text-right">
                            <div class="dropdown d-flex justify-content-center" id="manage-account">
                                <!-- dropdown icon -->
                                <a href="#" class="d-flex align-items-center justify-content-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>
                                <!-- options dropdown -->
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
                                    <li><a class="dropdown-item" href="#">تایید پذیرش</a></li>
                                    <li><a class="dropdown-item" href="#">رد پذیرش</a></li>
                                    <li><a class="dropdown-item" href="#">مشخصات رزرو کننده</a></li>

                                </ul>
                            </div>
                        </td>
                    </tr>
                        @endif @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
