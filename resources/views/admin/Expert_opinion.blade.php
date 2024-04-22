@extends('admin.index')
@section('content')
    <br>
    <form class="form-register col-12" action="{{route('admin.acceptance.Expert_opinion.store',$id)}}" method="post">
        @csrf
        <p class="title-register">ثبت نظر کار شناس </p>
        <p class="message-register">پذیرشگر محترم نظر کارشناس مربوطه را با دقت وارد نمایید</p>



            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">ثبت نظر کار شناس</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Expert_opinion"></textarea>
            </div>
            <button class="submit-register" type="submit">ثبت</button>





        <label>


        </label>


    </form>
@endsection
