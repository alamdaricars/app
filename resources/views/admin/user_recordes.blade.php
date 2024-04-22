@extends('admin.index')
@section('content')
    <hr>
    @if(count((array)$id->turn) != 0)
    <div class="col">
        <div class="card shadow">
            <!-- header & label of table -->
            <div class="card-header bg-transparent border-0">
                <h3 class=" mb-0">نوبت ها</h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
                <!-- table content -->
                <table class="table align-items-center  table-flush">
                    <!-- column names -->
                    <thead class="thead">
                    <tr>

                        <th scope="col">مشکل اعلامی</th>
                        <th scope="col">نوع</th>
                        <th scope="col">تاریخ رزرو</th>


                    </tr>
                    </thead>
                    <!-- first row -->
                    <tbody>

                    <tr>
                        <!-- project column -->
                        <th scope="row">
                            <div class="media align-items-center">
                                <!-- avatar -->

                                <!-- row name -->
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{$id->turn->problem}}</span>
                                </div>
                            </div>
                        </th>
                        <!-- budget column -->
                        <td>
                            {{$id->turn->type()}}
                        </td>
                        <!-- status column -->
                        <td>
                                <span class="badge badge-dot mr-4 color-balck">
                                  <i class="bg-warning"></i>
                                                                {{$id->turn->Service_date}}

                                </span>

                            <!-- percent% -->

                            <!-- dropdown menu -->
                        </td>


                    </tr>

                    <!-- project column -->

                    <!-- project column -->


                    <!-- users column -->

                    <!-- completion column -->




                    <!-- project column -->

                    <!-- users column -->

                    <!-- completion column -->

                    <!-- percent% -->


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
                <h3 class=" mb-0">پذیرش ها</h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
                <!-- table content -->
                <table class="table align-items-center  table-flush">
                    <!-- column names -->
                    <thead class="thead">
                    <tr>

                        <th scope="col">مشکل اعلامی</th>
                        <th scope="col">نوع</th>
                        <th scope="col">تاریخ پذیرش</th>
                        <th scope="col">تاریخ اعلامی تحویل</th>
                        <th scope="col">نظر کارشناسی</th>


                    </tr>
                    </thead>
                    <!-- first row -->
                    <tbody>
                    @foreach($id->admission as $ad)
                    <tr>
                        <!-- project column -->
                        <th scope="row">
                            <div class="media align-items-center">
                                <!-- avatar -->

                                <!-- row name -->
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{$ad->problem}}</span>
                                </div>
                            </div>
                        </th>
                        <!-- budget column -->
                        <td>
                            {{$ad->type}}
                        </td>
                        <!-- status column -->
                        <td>
                                <span class="badge badge-dot mr-4 color-balck">
                                  <i class="bg-warning"></i>
                                                                {{$ad->Service_date}}

                                </span>

                            <!-- percent% -->

                            <!-- dropdown menu -->
                        </td>
                        <td>
                            {{$ad->Announced_date_of_delivery}}
                        </td>
                        <td>
                            {{$ad->Expert_opinion}}
                        </td>


                    </tr>

                    <!-- project column -->

                    <!-- project column -->


                    <!-- users column -->

                    <!-- completion column -->




                    <!-- project column -->

                    <!-- users column -->

                    <!-- completion column -->

                    <!-- percent% -->
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
                <h3 class=" mb-0">سوابق تعمیراتی</h3>
            </div>
            <!-- table -->
            <div class="table-responsive">
                <!-- table content -->
                <table class="table align-items-center  table-flush">
                    <!-- column names -->
                    <thead class="thead">
                    <tr>

                        <th scope="col">مشکل اعلامی</th>
                        <th scope="col">نوع</th>
                        <th scope="col">تاریخ پذیرش</th>
                        <th scope="col">تاریخ تحویلی</th>
                        <th scope="col">نظر کارشناسی</th>


                    </tr>
                    </thead>
                    <!-- first row -->
                    <tbody>
                    @foreach($id->Repair_records as $ad)
                        <tr>
                            <!-- project column -->
                            <th scope="row">
                                <div class="media align-items-center">
                                    <!-- avatar -->

                                    <!-- row name -->
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{$ad->problem}}</span>
                                    </div>
                                </div>
                            </th>
                            <!-- budget column -->
                            <td>
                                {{$ad->type}}
                            </td>
                            <!-- status column -->
                            <td>
                                <span class="badge badge-dot mr-4 color-balck">
                                  <i class="bg-warning"></i>
                                                                {{$ad->Service_date}}

                                </span>

                                <!-- percent% -->

                                <!-- dropdown menu -->
                            </td>
                            <td>
                                {{$ad->Delivery_Date}}
                            </td>
                            <td>
                                {{$ad->Expert_opinion}}
                            </td>


                        </tr>

                        <!-- project column -->

                        <!-- project column -->


                        <!-- users column -->

                        <!-- completion column -->




                        <!-- project column -->

                        <!-- users column -->

                        <!-- completion column -->

                        <!-- percent% -->
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
        <div class="info">
        <div class="info__icon">
            <svg class="d-flex" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path></svg>
        </div>
        <div class="info__title">سوابقی برای کاربر مورد نظر وجود ندارد</div>
    </div>


    @endif
@endsection
