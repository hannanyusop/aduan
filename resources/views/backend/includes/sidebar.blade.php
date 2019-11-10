<div class="left-side-menu">
    <div class="slimscroll-menu">
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigasi</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fe-grid"></i>
                        <span>Utama</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-mail"></i>
                        <span class="badge badge-success badge-pill float-right">4</span>
                        <span> Aduan </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.auth.report.index') }}">Senarai Aduan</a>
                        </li>
                    </ul>
                </li>

                @if ($logged_in_user->isAdmin())
                    <li class="menu-title mt-2">Sistem</li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-users"></i><span>Pengurusan Staff</span><span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.auth.user.index') }}">Senarai Staff</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.auth.user.create') }}">Tambah Staff</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-activity"></i><span>Log</span><span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('log-viewer::dashboard') }}">Ringkasan</a>
                            </li>
                            <li>
                                <a href="{{ route('log-viewer::logs.list') }}">Full Log</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
