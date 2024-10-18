
<style>
    .nav-link.active {
    background: rgba(255,255,255,.1) !important;
    color: #fff !important;
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{url('backend/img/AdminLTELogo.png')}}" alt="Car And Bike" class="brand-image"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Car And Bike</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category')}}" class="nav-link {{ request()->routeIs('category') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Category</p>
                    </a>
                </li>




            </ul>
        </nav>

    </div>

</aside>
