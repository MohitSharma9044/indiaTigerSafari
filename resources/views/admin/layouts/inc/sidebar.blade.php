<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">
        <div class="w-100 logo">
            <img class="img-fluid" src="{{ asset('admin_assets/images/logo/logo.png') }}" style="max-height: 70px;" alt="logo">
        </div>
        <div class="mobile-close">
            <i class="icon-arrow-left feather"></i>
        </div>
        </div>
        <ul class="nav-menu">
        <li class="nav-menu-item router-link-active">
            <a href="{{ url('admin/dashboard') }}">
                <i class="feather icon-home"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-group-title">Manage Pages Content</li>
        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-box"></i>
                <span>Manage Pages</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="{{ url('admin/about-us') }}">About Us</a>
                </li>
                <li class="nav-menu-item">
                    <a href="{{ url('admin/contact-us') }}">Contact Us</a>
                </li>
                <li class="nav-menu-item">
                    <a href="{{ url('admin/pay-now') }}">Pay Now</a>
                </li>
                <li class="nav-menu-item">
                    <a href="{{ url('admin/blogs') }}">Our Blogs</a>
                </li>
                <li class="nav-menu-item">
                    <a href="{{ url('admin/terms-and-condition') }}">Terms & Condition</a>
                </li>
                <li class="nav-menu-item">
                    <a href="{{ url('admin/privacy-policy') }}">Privacy Policy</a>
                </li>
                <li class="nav-menu-item">
                    <a href="{{ url('admin/jeep-safari') }}">Jeep Safari</a>
                </li>
            </ul>
        </li>

        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-box"></i>
                <span>Manage Settings</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="{{ url('admin/settings/general') }}">General</a>
                </li>
                
            </ul>
        </li>

        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-box"></i>
                <span>Manage Tours</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="{{ url('admin/tours/create') }}">Create Tours</a>
                </li>
                
            </ul>
        </li>
    </ul>
</div>