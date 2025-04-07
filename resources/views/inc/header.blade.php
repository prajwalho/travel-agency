{{-- <header class="header-container" id="header">
    <div class="main_header_area animated">
        <div class="clearfix">
            <nav id="navigation1" class="navigation">
                <div class="container-fluid clearfix">
                    <!-- nav left -->
                    @include('inc.nav_left')

                    <!-- menu item -->
                    @include('inc.menu_item')

                    <!-- nav right -->
                    @include('inc.nav_right')
                </div>
            </nav>
        </div>
    </div>
</header> --}}

<header id="header">
    <div class="overlay-slider"></div>
    <div class="main_header_area animated header-container">
        <div class="clearfix">
            <nav id="navigation1" class="navigation">
                <div class="container">
                    <div class="nav-header">
                        <div class="logo-widget">
                            <a class="nav-brand" href="#">
                                <img src="{{ asset('assets/images/nhm-white-logo.png') }}" alt="" />
                            </a>
                        </div>

                        <div class="nav-toggle"></div>

                    </div>

                    <div class="nav-menus-wrapper main-nav">
                        <ul class="nav-menu align-to-right">
                            <li><a href="#">about us</a></li>
                            <li><a href="#">destination</a>
                                <ul class="nav-dropdown">
                                    <li>
                                        <a href="#">Menu Level 2</a>
                                        <ul class="nav-dropdown">
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Menu Level 2</a>
                                        <ul class="nav-dropdown">
                                            <li>
                                                <a href="#">Menu Level 3</a>
                                                <ul class="nav-dropdown">
                                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Menu Level 2</a>
                                        <ul class="nav-dropdown">
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                            <li><a href="#" target="_blank">Menu Level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                    <li><a href="#" target="_blank">Menu Level 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">explore nepal</a></li>
                            <li><a href="#">experience</a></li>
                            <li><a href="#">best deals</a></li>
                            <li><a href="#">travel info</a></li>
                        </ul>

                        <div class="navbar-icons-2">
                            <div class="searchbar-open">
                                <div class="openBtn" onclick="openSearch()"><i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <div class="user-dropdown-icon">
                                <div class="searchbar-open">
                                    <a href="" class=""> <i class="fa-solid fa-user"></i>&nbsp;
                                        login </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
