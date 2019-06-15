<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper" style="height: 100%">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#" >
                <img src="{{ asset('assets/app-images/cms.png') }}" alt="">
            </a>
            <div id="close-sidebar">
                <i class="fas fa-times"></i>
            </div>
        </div>

        <!-- sidebar-header  -->
        <div class="sidebar-search">
            <div>
                <div class="input-group">
                    <input type="text" class="form-control search-menu" placeholder="Search...">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar-search  -->
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>General</span>
                </li>
                <li class="sidebar-dropdown active">
                    <a href="">
                        <i class="fa fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        <span class="badge badge-pill badge-warning"></span>
                    </a>
                    {{-- <div class="sidebar-submenu" style="display:block;">
                                    <ul>
                                        <li>
                                            <a href="#">Dashboard 1
                                            <span class="badge badge-pill badge-success">Pro</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard 3</a>
                                        </li>
                                    </ul>
                                </div> --}}
                </li>
                <li class="sidebar-dropdown">
                    <a href="  ">
                        <i class="fa fa-plus"></i>
                        <span>Add New Post</span>
                        {{-- <span class="badge badge-pill badge-danger">3</span> --}}
                    </a>

                </li>
                <li class="sidebar-dropdown">
                    <a href="  ">
                        <i class="fa fa-calendar"></i>
                        <span>Add UpComing Event</span>
                        {{-- <span class="badge badge-pill badge-danger">3</span> --}}
                    </a>

                </li>
                <li class="sidebar-dropdown">
                    <a href="  ">
                        <i class="fa fa-upload"></i>
                        <span>Upload Image in Gallery</span>
                    </a>

                </li>
                <li class="sidebar-dropdown">
                    <a href="  ">
                        <i class="fas fa-sync"></i>
                        <span>Update Moto</span>
                    </a>

                </li>


                <li class="header-menu">
                    <span>Profile</span>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Documentation</span>
                        <span class="badge badge-pill badge-primary">Beta</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>Examples</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
        <a href="#">
            <i class="fa fa-bell"></i>
            <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
            <i class="fa fa-envelope"></i>
            <span class="badge badge-pill badge-success notification">7</span>
        </a>
        <a href="#">
            <i class="fa fa-cog"></i>
            <span class="badge-sonar"></span>
        </a>
        <a href="{{ url('/logout') }}" title="Logout">
            <i class="fa fa-power-off"></i>
        </a>
    </div>
</nav>
<!-- sidebar-wrapper  -->
