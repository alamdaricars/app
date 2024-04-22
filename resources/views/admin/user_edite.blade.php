@extends('admin.index')
@section('content')
   <hr>
    @if($errors->any())

        <div class="error col-12">


        @foreach($errors->all() as $error)
                <div class="error__icon">
                    <svg class="d-flex" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z"></path></svg>
                </div>
                <div class="error__title">{{$error}}</div>
            @endforeach
            </div>


            @endif
    <hr>
    <form class="form-register col-5" action="{{route('admin.user.edit.store',$id)}}" method="post">
        @csrf
        <p class="title-register">مشخصات کاربری </p>
        <div class="flex-register">
            <label>
                <input required="" placeholder="" type="text" class="input" value="{{$id->name}}" name="name">
            </label>


        </div>

        <label>
            <input required="" placeholder="" type="email" class="input" value="{{$id->email}}" name="email">

        </label>


        <button class="submit-register" type="submit"> ثبت تغییرات</button>

    </form>
    <hr>
    <form class="form-register col-5" action="{{route('admin.user.edit.care.store',$id)}}" method="post">
        @csrf
        <p class="title-register">مشخصات خودرو </p>
        <div class="flex-register">
            <label>
                <input required="" placeholder="" type="text" class="input" value="{{$id->user_car->Model}}" name="model">

            </label>

            <label>
                <div class="container-radio">
                    <div class="custom-radio">
                        <input type="radio" id="radio-1" name="tab" @if($id->user_car->color == 1) checked @endif value="1">
                        <label class="radio-label" for="radio-1">
                            <div class="radio-circle"></div>
                            <span class="radio-text">مشکی</span>
                        </label>
                        <input type="radio" id="radio-2" name="tab" @if($id->user_car->color == 2) checked @endif value="2">
                        <label class="radio-label" for="radio-2">
                            <div class="radio-circle"></div>
                            <span class="radio-text">سفید</span>
                        </label>
                        <input type="radio" id="radio-3" name="tab" @if($id->user_car->color == 3) checked @endif value="3">
                        <label class="radio-label" for="radio-3">
                            <div class="radio-circle"></div>
                            <span class="radio-text">تیتانیوم</span>
                        </label>
                        <input type="radio" id="radio-4" name="tab" @if($id->user_car->color == 4) checked @endif value="4">
                        <label class="radio-label" for="radio-4">
                            <div class="radio-circle"></div>
                            <span class="radio-text">کله غازی</span>
                        </label>
                        <input type="radio" id="radio-5" name="tab" @if($id->user_car->color == 5) checked @endif value="5">
                        <label class="radio-label" for="radio-5">
                            <div class="radio-circle"></div>
                            <span class="radio-text">قرمز</span>
                        </label>
                    </div>
                </div>
            </label>
        </div>





        <button class="submit-register" type="submit">ثبت تغییرات</button>

    </form>
@endsection
