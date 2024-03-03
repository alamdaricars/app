@extends('admin.index')
@section('content')
//پذیرش
@include('admin.layouts.success')
    <div class="col">
    <div class="card shadow">
        <!-- header & label of table -->
        <div class="card-header bg-transparent border-0">
            <h3 class=" mb-0">پذیرش های فعال</h3>
        </div>
        <!-- table -->
        <div class="table-responsive">
            <!-- table content -->
            <table class="table align-items-center  table-flush">
                <!-- column names -->
                <thead class="thead">
                <tr>
                    <th scope="col">نام</th>
                    <th scope="col">مشکل</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">تاریخ اعلامی تحویل خودرو به مشتری</th>
                    <th scope="col">نظر کار شناس</th>

                    <th scope="col">روند</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <!-- first row -->
                <tbody>
                @foreach($admitions as $admition)
                    @if($admition->status != 5)

                <tr>
                    <!-- project column -->
                    <th scope="row">
                        <div class="media align-items-center">
                            <!-- avatar -->

                            <!-- row name -->
                            <div class="media-body">
                                <span class="mb-0 text-sm">{{$admition->user->name}}</span>
                            </div>
                        </div>
                    </th>
                    <!-- budget column -->
                    <td>
                        {{$admition->problem}}
                    </td>
                    <!-- status column -->
                    <td>
                                <span class="badge badge-dot mr-4 color-balck">
                                  <i class="bg-warning"></i> {{$admition->status()}}
                                </span>
                    </td>
                    <!-- users column -->
                    <td>
                                <span class="badge badge-dot mr-4 color-balck">
                                  <i class="bg-warning"></i> {{$admition->Announced_date_of_delivery}}
                                </span>
                    </td>
                    <!-- completion column -->
                    <td>
                        -
                    </td>
                    <td>
                        <!-- percent% -->
                        <div class="d-flex align-items-center">
                            <span class="mr-2">{{$admition->bar_status()}}%</span>
                            <div>
                                <!-- linebar-percent -->
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$admition->bar_status()}}%;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- dropdown menu -->
                    </td>
                    <td class="text-right">
                        <div class="dropdown d-flex justify-content-center" id="manage-account">
                            <!-- dropdown icon -->
                            <a href="#" class="d-flex align-items-center justify-content-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <!-- options dropdown -->
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
                                <li><a class="dropdown-item" href="{{route('admin.acceptance.Expert_opinion',$admition->id)}}">ثبت نظر کارشناسی</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.acceptance.change.status.Maintenance',$admition->id)}}">تغییر وضعیت به در دست تعمیر</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.acceptance.change.status.Awaiting_delivery',$admition->id)}}" >تغییر وضعیت به در انتظار تحویل</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.acceptance.change.status.Delivered',$admition->id)}}" >تغییر وضعیت به در تحویل داده شده</a></li>

                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">مشخصات کاربر</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                    @endif  @endforeach
                </tbody>
            </table>
        </div>
    </div></div>
@endsection
