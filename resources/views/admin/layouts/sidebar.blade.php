<div class="sidebar">
    <div class="sidebar-menu d-flex flex-column flex-shrink-0" style="width: 6.5rem;">
        <!-- logo place -->
        <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
            <svg class="bi" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="visually-hidden">Icon-only</span>
        </a>
        <!-- options sidebar-menu   -->
        <ul class="nav nav-pills nav-flush flex-column mb-auto mt-auto text-center">
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link py-3" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span>داشبورد</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.turns')}}" class="nav-link py-3" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                    <i class="fa-solid fa-gauge"></i>
                    <span>نوبت ها</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.acceptance')}}" class="nav-link py-3 " title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                    <i class="fa-solid fa-table"></i>
                    <span>پذیرش</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.users')}}" class="nav-link py-3 " title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span>کاربران</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.user.new')}}" class="nav-link py-3 " title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <i class="fa-solid fa-circle-user"></i>
                    <span>وارد کردن کاربر</span>
                </a>
            </li>
        </ul>
        <!-- manage acount dropdown -->
        <div class="dropdown d-flex justify-content-center" id="manage-account">
            <!-- dropdown icon -->
            <a href="#" class="d-flex align-items-center justify-content-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <!-- user profilel -->
            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
            <!-- options dropdown -->
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>
