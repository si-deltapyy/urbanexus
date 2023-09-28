<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Kelurahan" />

    <!-- ========== Page Title ========== -->
    <title>Kelurahan Cipayung</title>

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
    <style>
        #chart1 {
  max-width: 650px;
  margin: 35px auto;
  color: black;
}

#chart2 {
  max-width: 650px;
  margin: 35px auto;
  color: black;
}

#chart3 {
  max-width: 650px;
  margin: 35px auto;
  color: black;
}
    </style>

    <!-- ========== End Stylesheet ========== -->

  </head>

  <body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">
      <!-- Start Navigation -->
      <nav
        class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed white no-background"
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
            <!-- <a class="navbar-brand" href="index.html">
              <img
                src="assets/img/logo-light.png"
                class="logo logo-display"
                alt="Logo"
              />
              <img
                src="assets/img/logo.png"
                class="logo logo-scrolled"
                alt="Logo"
              />
            </a> -->
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <!-- <img src="assets/img/logo.png" alt="Logo" /> -->
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

    <!-- Start Banner
    ============================================= -->
    <div
      class="banner-area text-light bg-gradient banner-style-five text-default"
    >
      <div class="animated-wave">
        <svg
          class="waves"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28"
          preserveAspectRatio="none"
          shape-rendering="auto"
        >
          <defs>
            <path
              id="gentle-wave"
              d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
            />
          </defs>
          <g class="parallax">
            <use
              xlink:href="#gentle-wave"
              x="48"
              y="0"
              fill="rgba(255,255,255,0.7)"
            />
            <use
              xlink:href="#gentle-wave"
              x="48"
              y="3"
              fill="rgba(255,255,255,0.5)"
            />
            <use
              xlink:href="#gentle-wave"
              x="48"
              y="5"
              fill="rgba(255,255,255,0.3)"
            />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
        </svg>
      </div>

      <div class="container">
        <div class="double-items">
          <div class="row align-center">
            <div class="col-lg-6 info">
              <h2 class="wow fadeInLeft" data-wow-defaul="300ms">
                Kelurahan Cipayung
              </h2>
              <p class="wow fadeInLeft" data-wow-delay="500ms">
                Kelurahan Cipayung adalah sebuah kelurahan yang terletak di Jakarta Timur, Indonesia.
                Kelurahan ini merupakan salah satu dari beberapa kelurahan yang ada di 
                Kecamatan Cipayung, Jakarta Timur. Wilayah Cipayung terletak cukup dekat dengan pusat kota Jakarta.
              </p>
              <div class="button">
                <a
                  href="https://www.youtube.com/watch?v=cNHvSZLsK_Y"
                  class="relative popup-youtube video-btn"
                  ><i class="fas fa-play"></i>Profil</a
                >
              </div>
            </div>

            <div class="col-lg-6 thumb wow fadeInRight" data-wow-delay="900ms">
              <img src="assets/img/illustration/19.png" alt="Thumb" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Banner -->

    <!-- Star feature
    ============================================= -->
    <div
      id="visi"
      class="feature-style-five-area default-padding-top"
      style="background-image: url(assets/img/shape/35.png)"
    >
      <div class="container">
        <div class="row align-center">
          <div class="feature-style-five col-lg-5">
            <h4>Visi Misi</h4>
            <h3>
             <b>Menjadi Kelurahan yang Unggul, Berdaya Saing, dan Berkualitas <br />
             dengan Masyarakat yang Sejahtera.</b>
            </h3>
            <p>
            Kelurahan Cipayung memiliki potensi dan tantangan yang berkaitan dengan perkembangan kota, 
            termasuk masalah lalu lintas, lingkungan, dan infrastruktur. Seiring dengan perkembangan 
            Jakarta, Kelurahan Cipayung terus berupaya untuk meningkatkan kualitas hidup dan pelayanan kepada penduduknya.
            </p>
            <div class="feature-fact mt-35">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="256" data-speed="2000">256</div>
                </div>
                <span class="medium">Total Penduduk</span>
              </div>
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="98" data-speed="2000">98</div>
                </div>
                <span class="medium">Kelurga</span>
              </div>
            </div>
          </div>
          <div class="feature-style-five col-lg-7 pl-50 pl-md-15 pl-xs-15">
            <div class="infinite-updown-illustration">
              <img src="assets/img/shape/37.png" alt="illustration" />
            </div>
            <div class="row">
              <!-- Feature Grid -->
              <div class="feature-style-five-grid col-lg-6 col-md-6">
                <div class="item">
                  <i class="far fa-monitor-heart-rate"></i>
                  <h4>Pelayanan Publik Unggul</h4>
                  <p>
                  Memberikan pelayanan publik yang prima, cepat, dan transparan kepada semua warga kelurahan.
                  </p>
                </div>
                <div class="item">
                  <i class="fas fa-chart-pie"></i>
                  <h4>Partisipasi Aktif</h4>
                  <p>
                  Mendorong partisipasi aktif warga dalam pembangunan kelurahan dan pengambilan kebijakan.
                  </p>
                </div>
              </div>
              <!-- End Feature Grid -->

              <!-- Feature Grid -->
              <div class="feature-style-five-grid col-lg-6 col-md-6">
                <div class="item">
                  <i class="fas fa-comments-alt"></i>
                  <h4>Pengelolaan Lingkungan</h4>
                  <p>
                  Memastikan lingkungan yang bersih, hijau, dan berkelanjutan dengan 
                  mengelola sampah dan lingkungan secara bertanggung jawab.
                  </p>
                </div>
                <div class="item">
                  <i class="fas fa-rocket"></i>
                  <h4>Kesejahteraan Sosial</h4>
                  <p>
                  Menyediakan layanan kesejahteraan sosial yang mendukung warga yang membutuhkan.
                  </p>
                </div>
              </div>
              <!-- End Feature Grid -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Feature -->

    <!-- Start Work Process
    ============================================= -->
    <div
      id="grafik"
      class="work-process-area bg-dark text-light default-padding"
      style="background-image: url(assets/img/shape/38.png)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h4>Grafik Kuesioner</h4>
              <h2>Responden Tiap Grafik</h2>
              <div class="devider"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 text-center offset-lg-2">
            <div
              class="nav nav-tabs text-center work-process-tab-navs"
              id="nav-tab"
              role="tablist"
            >
              <button
                class="nav-link active"
                id="nav-id-1"
                data-bs-toggle="tab"
                data-bs-target="#tab1"
                type="button"
                role="tab"
                aria-controls="tab1"
                aria-selected="true"
              >
                <h4>Sebelum Bencana</h4>
              </button>
              <button
                class="nav-link"
                id="nav-id-2"
                data-bs-toggle="tab"
                data-bs-target="#tab2"
                type="button"
                role="tab"
                aria-controls="tab2"
                aria-selected="false"
              >
                <h4>Terjadi Bencana</h4>
              </button>
              <button
                class="nav-link"
                id="nav-id-2"
                data-bs-toggle="tab"
                data-bs-target="#tab2"
                type="button"
                role="tab"
                aria-controls="tab2"
                aria-selected="false"
              >
                <h4>Sesudah Bencana</h4>
              </button>

            </div>
          </div>

          <div class="col-lg-12">
            <div
              class="tab-content work-process-tab-content"
              id="nav-tabContent"
            >
              <!-- Single Item -->
              <div
                class="tab-pane fade show active"
                id="tab1"
                role="tabpanel"
                aria-labelledby="nav-id-1"
              >
                <div class="row align-center">
                  <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                    <div class="thumb">
                      <img
                        src="assets/img/illustration/25.png"
                        alt="illustration"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="info">
                        <div id="chart1">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Single Item -->

              <!-- Single Item -->
              <div
                class="tab-pane fade"
                id="tab2"
                role="tabpanel"
                aria-labelledby="nav-id-2"
              >
                <div class="row align-center">
                  <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                    <div class="thumb">
                      <img
                        src="assets/img/illustration/25.png"
                        alt="illustration"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="info">
                        <div id="chart2">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Single Item -->


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Work Process -->

    <!-- Start Free Trial
    ============================================= -->
    <!-- <div class="free-trial-area text-light text-center relative">
      <div
        class="trial-box"
        style="background-image: url(assets/img/shape/8.png)"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">

              <h2>
                Kirim Kritik Dan Saran <br />
                Untuk Kami!
              </h2>
              <form action="#">
                <input
                  type="text"
                  placeholder="Ketik Disini..."
                  class="form-control"
                  name="text"
                />
                <button type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="illustration">
          <img src="assets/img/illustration/1.png" alt="illustration" />
        </div>
      </div>
    </div> -->
    <!-- End Free Trial -->

    <!-- Start Footer
    ============================================= -->
    <footer id="footer"  class="bg-dark text-light">
      <div class="container">
        <div class="f-items default-padding">
          <div class="row">
            <div class="col-lg-4 col-md-6 item">
              <div class="f-item about">
                <!-- <img src="assets/img/logo-light.png" alt="Logo" /> -->
                <p>
                Kelurahan Cipayung adalah sebuah kelurahan yang terletak di Jakarta Timur, Indonesia.
                Kelurahan ini merupakan salah satu dari beberapa kelurahan yang ada di 
                Kecamatan Cipayung, Jakarta Timur. Wilayah Cipayung terletak cukup dekat dengan pusat kota Jakarta.
                </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 item">
              <div class="f-item link">
                <ul>
                  <li>
                    <a href="#home"
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
                        Depok, Jawa Barat
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="content">
                        <strong>Email:</strong>
                        <a href="mailto:urbanexus2023@gmail.com">urbanexus2023@gmail.com</a>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <i class="fas fa-phone"></i>
                      </div>
                      <div class="content">
                        <strong>Phone:</strong>
                        <a href="#">-</a>
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
              <p>Copyright &copy; Kelurahan Cipayung <script>document.write(new Date().getFullYear())</script></p>
            </div>
            <div class="col-lg-6 text-end link">
              <ul>
                <li>
                  <a href="#">Terms</a>
                </li>
                <li>
                  <a href="#">Privacy</a>
                </li>
                <li>
                  <a href="#">Support</a>
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

    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script>
    var options = {
        chart: {
          type: 'line'
        },
        series: [{
          name: 'Responden',
          data: [30,40,45,50,49,60,70,91,125]
        }],
        xaxis: {
          categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
        }
      }

      var chart = new ApexCharts(document.querySelector("#chart1"), options);

      chart.render();

    //   chart 2
    var options = {
        chart: {
          type: 'line'
        },
        series: [{
          name: 'Responden',
          data: [30,40,45,50,49,60,70,91,125]
        }],
        xaxis: {
          categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
        }
      }

      var chart = new ApexCharts(document.querySelector("#chart2"), options);

      chart.render();
      </script>

  </body>
</html>
