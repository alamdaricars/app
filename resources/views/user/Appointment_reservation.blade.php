@extends('user.index')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">رزرو مراجعه حضوری تعمیرگاه</h4>
                <hr>
                <div class="basic-form">
                    <form>
                        <div class="form-group">
                            <label class="col-lg-4 col-form-label" for="val-username">تاریخ مراجعه و ساعت مراجعه <span
                                    class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input  data-jdp class="form-control" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-suggestions">علت مراجعه <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="What would you like to see?"></textarea>
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
@endsection
