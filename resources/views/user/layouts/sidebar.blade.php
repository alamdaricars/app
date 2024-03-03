<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="{{route('user.dashboard')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">پنل کاربری</span>
                </a>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">نوبت برای خدمات</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('user.reservation_in-person')}}">نوبت مراجعه حضوری</a></li>
                    <li><a href="#" onclick="alert('این بخش در حال راه اندازی میباشد')">نوبت سرویس دوره ای در محل</a></li>




                </ul>
            </li>
            <li>
                <a href="{{route('user.records')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text"> سوابق مراجعه</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.Active_acceptance')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">پذیرش فعال</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.periodic_service')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">تاریخ سررسید دوره ای</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.circular')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">بخشنامه های گارانتی</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.profile')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">مشخصات کاربری</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="widgets.html" aria-expanded="false">--}}
{{--                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">پشتیانی آنلاین</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">خروج</span>
                </a>
            </li>

    </div>
</div>
