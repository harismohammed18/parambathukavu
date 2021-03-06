<nav class="navbar top-navbar navbar-expand-md navbar-light">
    <!-- Logo -->
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">
            <!-- Logo icon -->
            <b><img src="{{ asset('images/logo.png') }}" alt="homepage" class="dark-logo" /></b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span>Admin</span>
        </a>
    </div>
    <!-- End Logo -->
    <div class="navbar-collapse">
        <!-- toggle and nav items -->
        <ul class="navbar-nav mr-auto mt-md-0">
            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            <!-- Messages -->

            <!-- End Messages -->
        </ul>
        <!-- User profile and search -->
        <ul class="navbar-nav my-lg-0">

            <!-- Search -->
          
            <!-- Profile -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/users/5.jpg')}}" alt="user" class="profile-pic" /></a>
                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                    <ul class="dropdown-user">
                        <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                        <li>
                          <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              <i class="fa fa-power-off"></i> Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
