        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <div class="mb-0 site-logo"><a href="{{ route('/') }}" class="mb-0">Covid 19<span
                                    class="text-primary">.</span> </a></div>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="{{ ($active == 'home') ? 'active' : '' }}"><a href="{{ route('/') }}" class="nav-link">Home</a></li>
                                <li class="{{ ($active == 'statistik') ? 'active' : '' }}"><a href="{{ route('statistik') }}" class="nav-link">Statistik</a></li>
                                <li class="{{ ($active == 'rumah-sakit') ? 'active' : '' }}"><a href="{{ route('rumahsakit') }}" class="nav-link">Rumah Sakit Rujukan</a></li>
                                <li class="{{ ($active == 'registrasi') ? 'active' : '' }}"><a href="{{ route('registrasi') }}" class="nav-link">Registrasi Vaksin</a></li>
                                <li><a href="https://syahroel712.github.io/" class="nav-link" target="_blank">About Me</a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                                class="icon-menu h3 text-black"></span></a></div>

                </div>
            </div>

        </header>