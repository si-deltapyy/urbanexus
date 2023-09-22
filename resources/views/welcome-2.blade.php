<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Appku - Software Landing Page" />

    <!-- ========== Page Title ========== -->
    <title>Appku - Software Landing Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon"
    />

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/validnavs.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />


    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header>
      <!-- Start Navigation -->
      <nav
        class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed dark no-background"
      >
        <div
          class="container d-flex justify-content-between align-items-center"
        >
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">
              <img src="assets/img/logo.png" class="logo" alt="Logo" />
            </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <img src="assets/img/logo.png" alt="Logo" />
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-times"></i>
            </button>

            <ul
              class="nav navbar-nav navbar-right"
              data-in="fadeInDown"
              data-out="fadeOutUp"
            >
              <li class="dropdown">
                <a
                  href="#"

                  data-toggle="dropdown"
                  >Home</a
                >

              </li>
              <li class="dropdown">
                <a href="#"  data-toggle="dropdown"
                  >Visi Misi</a
                >

              </li>
              <li class="dropdown">
                <a href="#"  data-toggle="dropdown"
                  >Kegiatan</a
                >

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

    <!-- Start Banner
    ============================================= -->
    <div
      class="banner-area bg-top text-capitalized text-center top-pad-80 auto-height"
    >
      <!-- Shape -->
      <div
        class="banner-shape"
        style="background-image: url(assets/img/shape/2.png)"
      ></div>
      <!-- End Shape -->
      <div class="container">
        <div class="content-box">
          <div class="row align-center">
            <div class="col-lg-8 offset-lg-2 info">
              <h2 class="wow fadeInRight" data-wow-defaul="300ms">
                Kelurahan Bulan<strong>Jargonnya</strong>
              </h2>
              <p class="wow fadeInLeft" data-wow-delay="500ms">
                Lasted hunted enough an up seeing in lively letter. Had judgment
                out opinions property the supplied.
              </p>
              <div class="button wow fadeInDown" data-wow-delay="700ms">
                <a
                  href="https://www.youtube.com/watch?v=owhuBrGIOsE"
                  class="popup-youtube video-btn"
                  ><i class="fas fa-play"></i>Watch Promo</a
                >
              </div>
            </div>
            <div class="col-lg-12">
              <div class="thumb-inner">
                <img
                  class="wow fadeInRight"
                  data-wow-delay="900ms"
                  src="{{ asset('assets/img/foto-2.jpg') }}"
                  alt="Thumb"
                />
                <img
                  class="wow fadeInLeft"
                  data-wow-delay="1100ms"
                  src="{{ asset('assets/img/foto-2.jpg') }}"
                  alt="Thumb"
                />
                <div
                  class="shape-circle wow fadeInLeft"
                  data-wow-delay="1500ms"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features
    ============================================= -->
    <div class="software-feature-area default-padding">
      <div class="container">
        <div class="feature-items">
          <div class="row align-center">
            <div class="col-lg-6 left-info">
              <h2>
                Kami Selalu <br />
                Memberikan Yang Terbaik
              </h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Mollitia, ducimus quos nisi animi molestias nulla illum ut unde
                doloribus magnam distinctio odio earum suscipit? Voluptatem odit
                sapiente eius libero. Quas.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                quod ipsam mollitia alias, recusandae nam similique, ratione
                minus sequi error quidem quasi natus voluptatem laborum dolorem
                maxime! Distinctio, nulla ut!
              </p>
            </div>
            <div class="col-lg-6">
              <div class="features-list">
                <!-- Single Itme -->
                <div class="item">
                  <div class="icon">
                    <i class="fas fa-angle-right"></i>
                    <img src="assets/img/icon/software/6.png" alt="Icon" />
                  </div>
                  <div class="content">
                    <h4>Siap Melayani</h4>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                  </div>
                </div>
                <!-- End Single Itme -->
                <!-- Single Itme -->
                <div class="item">
                  <div class="icon">
                    <i class="fas fa-angle-right"></i>
                    <img src="assets/img/icon/software/2.png" alt="Icon" />
                  </div>
                  <div class="content">
                    <h4>Siap Melayani</h4>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                  </div>
                </div>
                <!-- End Single Itme -->
                <!-- Single Itme -->
                <div class="item">
                  <div class="icon">
                    <i class="fas fa-angle-right"></i>
                    <img src="assets/img/icon/software/5.png" alt="Icon" />
                  </div>
                  <div class="content">
                    <h4>Siap Melayani</h4>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                  </div>
                </div>
                <!-- End Single Itme -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Features -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-facts-area bg-gray default-padding mb-5">
      <!-- Shape -->
      <div
        class="shape"
        style="background-image: url(assets/img/shape/43.png)"
      ></div>
      <!-- Shape -->
      <div class="container">
        <div class="item-inner">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="98" data-speed="2000">98</div>
                </div>
                <span class="medium">Warga</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="12" data-speed="2000">12</div>
                </div>
                <span class="medium">Keluarga</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Overview
    ============================================= -->
    <div
      id="overview"
      class="overview-area relative default-padding bg-gray carousel-shadow mb-5"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h2>Gallery Kelurahan</h2>
              <div class="devider"></div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                reprehenderit ratione repudiandae repellendus porro numquam
                adipisci at, voluptatum deserunt hic dolores cupiditate magnam
                impedit inventore architecto consequuntur. Blanditiis, doloribus
                veritatis.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-full">
        <div class="row">
          <div class="col-lg-12">
            <div class="overview-carousel owl-carousel owl-theme">
              <!-- Single item -->
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/img/foto-1.jpg') }}" style="aspect-ratio: 3/2;" alt="Thumb" />
                  <a
                    href="{{ asset('assets/img/foto-1.jpg') }}"
                    class="item popup-gallery theme video-play-button"
                  >
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <div class="content">
                  <h4><span>01</span> Baksos</h4>
                </div>
              </div>
              <!-- End Single item -->
              <!-- Single item -->
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/img/foto-3.jpg') }}" style="aspect-ratio: 3/2;" alt="Thumb" />
                  <a
                    href="{{ asset('assets/img/foto-3.jpg') }}"
                    class="item popup-gallery theme video-play-button"
                  >
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <div class="content">
                  <h4><span>02</span> Lomba-Lomba</h4>
                </div>
              </div>
              <!-- End Single item -->
              <!-- Single item -->
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/img/foto-2.jpg') }}" style="aspect-ratio: 3/2;" alt="Thumb" />
                  <a
                    href="{{ asset('assets/img/foto-2.jpg') }}"
                    class="item popup-gallery theme video-play-button"
                  >
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <div class="content">
                  <h4><span>03</span> Kerja Bakti</h4>
                </div>
              </div>
              <!-- End Single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Overview -->

    <!-- Start
    ============================================= -->
    <div class="free-trial-area text-light text-center default-padding-bottom">
      <div class="container">
        <div
          class="trial-box"
          style="background-image: url(assets/img/shape/8.png)"
        >
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <h5>Kiritk % Saran</h5>
              <h2>
                Kirimkan pesan <br />
                untuk kami!
              </h2>
              <form action="#">
                <input
                  type="email"
                  placeholder="Your Email"
                  class="form-control"
                  name="email"
                />
                <button type="submit">Free Trial</button>
              </form>
            </div>
          </div>
          <div class="illustration">
            <img src="assets/img/illustration/1.png" alt="illustration" />
          </div>
        </div>
      </div>
    </div>
    <!-- End -->

  <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
          <div class="f-items default-padding">
            <div class="row">
              <div class="col-lg-4 col-md-6 item">
                <div class="f-item about">
                  <!-- <img src="assets/img/logo-light.png" alt="Logo" /> -->
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                    eaque rerum ullam provident commodi eveniet consequatur beatae
                    vel veniam molestias placeat autem harum, dolorem tempore
                    incidunt consequuntur, voluptate voluptates dolores!
                  </p>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 item">
                <div class="f-item link">
                  <ul>
                    <li>
                      <a href="index.html"
                        ><i class="fas fa-angle-right"></i> Home</a
                      >
                    </li>
                    <li>
                      <a href="#visi"
                        ><i class="fas fa-angle-right"></i> Visi Misi</a
                      >
                    </li>
                    <li>
                      <a href="#grafik"
                        ><i class="fas fa-angle-right"></i>Grafik Responden</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 item">
                <div class="f-item contact-widget">
                  <h4 class="widget-title">Contact Info</h4>
                  <div class="address">
                    <ul>
                      <li>
                        <div class="icon">
                          <i class="fas fa-home"></i>
                        </div>
                        <div class="content">
                          <strong>Alamat:</strong>
                          5919 Trussville, Surakarta
                        </div>
                      </li>
                      <li>
                        <div class="icon">
                          <i class="fas fa-envelope"></i>
                        </div>
                        <div class="content">
                          <strong>Email:</strong>
                          <a href="mailto:#">info@mail</a>
                        </div>
                      </li>
                      <li>
                        <div class="icon">
                          <i class="fas fa-phone"></i>
                        </div>
                        <div class="content">
                          <strong>Phone:</strong>
                          <a href="tel:2151234567">+123 34598768</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <p>Kelurahan 2023</p>
              </div>
              <div class="col-lg-6 text-end link">
                <ul>
                  <li>
                    <a href="about-us.html">Terms</a>
                  </li>
                  <li>
                    <a href="about-us.html">Privacy</a>
                  </li>
                  <li>
                    <a href="contact.html">Support</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer Bottom -->
      </footer>
      <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

  </body>
</html>
