@extends('admin.index')
@section('content')
    //کاربران
    <form class="form-register col-12 " style=" height: 210px" method="post" action="{{route('admin.user.search')}}">
        @csrf
        <p class="title-register">جست و جو </p>
        <label>
            <input required="" placeholder="" type="text" class="input" name="name">
            <span></span>
        </label>

        <button class="submit-register">جست و جو</button>
    </form>
    <br>
    @include('admin.layouts.success')

        <div class="col">
            <div class="row">

            <div class="card shadow">
                <!-- header & label of table -->
                <div class="card-header bg-transparent border-0">
                    <h3 class=" mb-0">کاربران</h3>
                </div>
                <!-- table -->
                <div class="table-responsive">
                    <!-- table content -->
                    <table class="table align-items-center  table-flush">
                        <!-- column names -->
                        <thead class="thead">
                        <tr>
                            <th scope="col">نام و نام خانوادگی</th>
                            <th scope="col">مدل خودرو</th>
                            <th scope="col">تلفن</th>

                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <!-- first row -->
                        <tbody>
                        @if($users && count($users) > 0)
                        @foreach($users as $user)
                        <tr>
                            <!-- project column -->
                            <th scope="row">
                                <div class="media align-items-center">
                                    <!-- avatar -->

                                    <!-- row name -->
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{$user->name}}</span>
                                    </div>
                                </div>
                            </th>
                            <!-- budget column -->
                            <td>
                                {{$user->user_car->Model}}
                            </td>
                            <!-- status column -->
                            <td>
                                <span class="badge badge-dot mr-4 color-balck">
                                  <i class="bg-warning"></i> {{$user->phone}}
                                </span>

                                <!-- percent% -->

                                <!-- dropdown menu -->
                            </td>
                            <td class="text-right">
                                <div class="dropdown d-flex justify-content-center" id="manage-account">
                                    <!-- dropdown icon -->
                                    <a href="#" class="d-flex align-items-center justify-content-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                    </a>
                                    <!-- options dropdown -->
                                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
                                        <li><a class="dropdown-item" href="{{route('admin.user_records',$user->id)}}">مشاهده ی  سوابق این کاربر</a></li>


                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{route('admin.user.edit',$user->id)}}">ویرایش کاربر</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#" onclick="myFunction()">ارسال پیامک برای این کاربر</a></li>
                                    </ul>
                                </div>
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
                        @endforeach @else
                    <script> alert("کاربری با این نام پیدا نشد");</script>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function myFunction() {
        alert("این قسمت در دست راه اندازی می باشد");
    }

</script>
