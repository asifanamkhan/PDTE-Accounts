<style>
    p{
        color: white;
    }
    p:hover{
        color: blue;
    }
</style>
<aside class="main-sidebar elevation-4" style="background: black;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span style="color: white; font-weight: bold" class="brand-text font-weight-light">Budget And Accounts</span>
    </a>
    @php
        $prefix = Request::route()->getPrefix();
        $route  = Route::current()->getName();
    @endphp

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ ($route == 'economic-account.*')  ? 'menu-open' : ' ' }}">
                    <a href="{{route('economic-account.index')}}" class="nav-link {{ ($route == 'economic-account.index')  ? 'dashboard-link' : ' ' }}">
                        <i class="fas fa-book"></i>
                        <p class="ml-2">
                            Economic Account
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ ($route == 'budget.*')  ? 'menu-open' : ' ' }}">
                    <a href="{{route('budget.index')}}" class="nav-link {{ ($route == 'budget.index')  ? 'dashboard-link' : ' ' }}">
                        <i class="fas fa-book"></i>
                        <p class="ml-2">
                            Budget
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ ($route == 'voucher.*')  ? 'menu-open' : ' ' }}">
                    <a href="{{route('voucher.index')}}" class="nav-link ">
                        <i class="fas fa-book"></i>
                        <p class="ml-2">
                            Voucher
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ ($route == 'report.*')  ? 'menu-open' : ' ' }}">
                    <a href="{{route('report.index')}}" class="nav-link ">
                        <i class="fas fa-book"></i>
                        <p class="ml-2">
                            Report 1
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ ($route == 'report.*')  ? 'menu-open' : ' ' }}">
                    <a href="{{route('report.create')}}" class="nav-link ">
                        <i class="fas fa-book"></i>
                        <p class="ml-2">
                            Report 2
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" class="nav-link">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
