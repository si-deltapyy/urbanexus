<!-- Header
    ============================================= -->
<header id="home">
    <!-- Start Navigation -->
    <nav
        class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed white no-background">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <!-- <img src="assets/img/logo.png" alt="Logo" /> -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown active dropdown-right">
                        <a class="smooth-menu" href="#home">Beranda</a>
                    </li>

                    <li>
                        <a class="smooth-menu" href="#visi">Visi Misi</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#grafik">Grafik</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#footer">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>

            <!-- Main Nav -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->
