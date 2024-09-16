<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">

                 <!-- Navbar Header-->
                <a href="{{ route('dashboard') }}" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                </a>
                
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">
                <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
                <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                    <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                            <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                                <div class="status online"></div>
                            </div>
                            <div class="content"> <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div>
                        </a><a href="#" class="dropdown-item message d-flex align-items-center">
                            <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                                <div class="status away"></div>
                            </div>
                            <div class="content"> <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div>
                        </a><a href="#" class="dropdown-item message d-flex align-items-center">
                            <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                                <div class="status busy"></div>
                            </div>
                            <div class="content"> <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div>
                        </a><a href="#" class="dropdown-item message d-flex align-items-center">
                            <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                                <div class="status offline"></div>
                            </div>
                            <div class="content"> <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div>
                        </a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
                </div>

                <!-- Languages dropdown    -->
                <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">
                        <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span></a>
                    <div aria-labelledby="languages" class="dropdown-menu">
                        <a href="#" class="dropdown-item">
                            <x-responsive-nav-link :href="route('admin.profile.edit')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                        </a>
                        <a href="#" class="dropdown-item">

                        </a>
                    </div>
                </div>
                <!-- Log out               -->
                <!-- <div class="list-inline-item logout">
                    <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a>

                </div> -->
            </div>
        </div>
    </nav>
</header>