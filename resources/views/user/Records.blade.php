@extends('user.index')
@section('content')
    @if($records->where('type',1)->count() )
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                @foreach($records as $record)
                    @if($record->type == 1)
                <h4 class="card-title">پذیرش های تعمیرات</h4>
                <p class="text-muted"><code></code>
                </p>
                <div id="accordion-two" class="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><i class="fa" aria-hidden="true"></i> {{$record->Delivery_Date}}</h5>
                        </div>
                        <div id="collapseOne1" class="collapse" data-parent="#accordion-two" style="">
                            <div class="card-body">مشکل اعلامی خودرو:{{$record->problem}}</div>
                            <div class="card-body">نظر کار شناس: {{$record->Expert_opinion}}</div>
                        </div>
                    </div>
                </div>@endif @endforeach
            </div>
        </div>
    </div>
    @endif


    @if($records->where('type',2)->count() )
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                @foreach($records as $record)
                    @if($record->type == 2)
                        <h4 class="card-title">پذیرش های سرویس دوره ای</h4>
                        <p class="text-muted"><code></code>
                        </p>
                        <div id="accordion-two" class="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><i class="fa" aria-hidden="true"></i> {{$record->Service_date}}</h5>
                                </div>
                                <div id="collapseOne1" class="collapse" data-parent="#accordion-two" style="">

                                    <div class="card-body">نظر کار شناس: {{$record->Expert_opinion}}</div>
                                </div>
                            </div>
                        </div>@endif @endforeach
            </div>
        </div>
    </div> @endif
@endsection
