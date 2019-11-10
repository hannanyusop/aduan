<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ $logged_in_user->picture }}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">{{ $logged_in_user->full_name }} <i class="mdi mdi-chevron-down"></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Selamat Datang !</h6>
                </div>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Akaun Saya</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('frontend.auth.logout') }}" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>log Keluar</span>
                </a>

            </div>
        </li>
    </ul>

    <div class="logo-box">
        <a href="index.html" class="logo text-center">
            <span class="logo-lg"><img src="{{ asset('img/maiwp/logo.png') }}" alt="" height="40"></span>
            <span class="logo-sm"><img src="{{ asset('img/maiwp/icon.png') }}" alt="" height="55"></span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
    </ul>
</div>