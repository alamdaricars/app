@extends('user.index')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">رزرو سرویس در محل</h4>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert"><ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul></div>@endif
                @include('user.layouts.success')
                <hr>
                <div class="basic-form">
                    <form action="{{route('user.onsite_service_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-lg-4 col-form-label" for="val-username">تاریخ و ساعت مراجعه خودرو امداد<span
                                    class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input  data-jdp class="form-control" placeholder="mm/dd/yyyy" name="date"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-suggestions">آدرس مراجعه<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-suggestions" name="address" rows="5" placeholder="کاربر محترم لطفا آدرس دقیق جهت مراجعه خودرو امداد یاداشت نمایید"></textarea>
                            </div>
                        </div>
                        <div class="form-group row" style="text-align: center">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">رزرو نوبت</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>نوبت های در انتظار تایید پذیرش</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>

                            <th>تاریخ</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $turns as $turn)
                            <tr>

                                <td>{{$turn->Service_date}}</td>
                            </tr>@endforeach
                        </tbody>
                    </table>
                </div>
                <h6 style="text-align: center">لطفا تا تایید پذیرش در ساعت و زمان مقرر در انتظار بمانید</h6>
            </div>
        </div>
    </div>
@endsection
