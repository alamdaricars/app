@extends('admin.index')
@section('content')
    <div class="box3 col-4">
        <!-- sign in form -->
        <form class="form-register col-12" action="{{route('admin.acceptance.accept.store',$id)}}" method="post">
            @csrf
            <p class="title-register">تاریخ اعلامی به مراجعه برای تحویل خودرو </p>
            <div class="flex-register">
                <label>
                    <input data-jdp name="Announced_date_of_delivery">
                    <span>انتخاب تاریخ</span>
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="warranty">
                <label class="form-check-label" for="defaultCheck1">
                    خودرو شامل گارانتی می باشد؟
                </label>
            </div>
            <button class="submit-register">ثبت پذیرش</button>
        </form>
    </div>
@endsection
