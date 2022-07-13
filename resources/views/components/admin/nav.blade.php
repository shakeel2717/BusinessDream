<div class="main-sidebar-body main-body-1">
    <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
    <ul class="menu-nav nav">
        <li class="nav-header"><span class="nav-label">Dashboard</span></li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.dashboard.index') }}">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <i class="ti-layout sidemenu-icon menu-icon "></i>
                <span class="sidemenu-label">Overview</span>
            </a>
        </li>
    </ul>
    <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
    <ul class="menu-nav nav">
        <li class="nav-header"><span class="nav-label">All Reports</span></li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.report.users') }}">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <i class="ti-layout sidemenu-icon menu-icon "></i>
                <span class="sidemenu-label">All USers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.report.pending.tids') }}">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <i class="ti-layout sidemenu-icon menu-icon "></i>
                <span class="sidemenu-label">Pending Tids</span>
            </a>
        </li>
    </ul>
    <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
</div>
