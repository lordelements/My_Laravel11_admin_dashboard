<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> <i class="icon-home"></i>
                {{ __('Home') }}
            </x-responsive-nav-link>
        </li>
        <li><a href="{{ url('admin/registered_accounts') }}"> <i class="icon-grid"></i>Registered Accounts</a></li>
    </ul>
</nav>
<!-- Sidebar Navigation end-