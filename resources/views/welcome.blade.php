@extends('user-layout.master')
@section('content')
    <!-- Start Banner
                    ============================================= -->
    <div class="banner-area text-light bg-gradient banner-style-five text-default">
        <div class="animated-wave">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
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
                            Kecamatan Cipayung, Jakarta Timur. Wilayah X terletak cukup dekat dengan pusat kota Jakarta.
                        </p>
                        <div class="button">
                            <a href="https://www.youtube.com/watch?v=cNHvSZLsK_Y"
                                class="relative popup-youtube video-btn"><i class="fas fa-play"></i>Profil</a>
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
    <div id="visi" class="feature-style-five-area default-padding-top"
        style="background-image: url(assets/img/shape/35.png)">
        <div class="container">
            <div class="row align-center">
                <div class="feature-style-five col-lg-5">
                    <h4>Visi Misi</h4>
                    <h3>
                        <b>Menjadi Kelurahan yang Unggul, Berdaya Saing, dan Berkualitas <br />
                            dengan Masyarakat yang Sejahtera.</b>
                    </h3>
                    <p>
                        Kelurahan X memiliki potensi dan tantangan yang berkaitan dengan perkembangan kota,
                        termasuk masalah lalu lintas, lingkungan, dan infrastruktur. Seiring dengan perkembangan
                        Jakarta, Kelurahan X terus berupaya untuk meningkatkan kualitas hidup dan pelayanan kepada
                        penduduknya.
                    </p>
                    <div class="feature-fact mt-35">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="{{ $totalpenduduk }}" data-speed="2000"></div>
                            </div>
                            <span class="medium">Total Penduduk</span>
                        </div>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="{{ $totalkeluarga }}" data-speed="2000">
                                </div>
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
                                    Memberikan pelayanan publik yang prima, cepat, dan transparan kepada semua warga
                                    kelurahan.
                                </p>
                            </div>
                            <div class="item">
                                <i class="fas fa-chart-pie"></i>
                                <h4>Partisipasi Aktif</h4>
                                <p>
                                    Mendorong partisipasi aktif warga dalam pembangunan kelurahan dan pengambilan
                                    kebijakan.
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
    <div id="grafik" class="work-process-area bg-dark text-light default-padding"
        style="background-image: url(assets/img/shape/38.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Grafik Pengelompokan</h4>
                        <h2>Untuk Setiap Kategori</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center offset-lg-2">
                    <div class="nav nav-tabs text-center work-process-tab-navs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab" aria-controls="tab1" aria-selected="true">
                            <h4>Umur</h4>
                        </button>
                        <button class="nav-link" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                            role="tab" aria-controls="tab2" aria-selected="false">
                            <h4>Jenis Kelamin</h4>
                        </button>
                        <button class="nav-link" id="nav-id-3" data-bs-toggle="tab" data-bs-target="#tab3"
                            type="button" role="tab" aria-controls="tab3" aria-selected="false">
                            <h4>Status Penduduk</h4>
                        </button>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tab-content work-process-tab-content" id="nav-tabContent">
                        <!-- Single Item -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                            aria-labelledby="nav-id-1">
                            <div class="row align-center">
                                <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                                    <div class="thumb">
                                        <img src="assets/img/illustration/25.png" alt="illustration" />
                                    </div>
                                </div>
                                <div class="col-lg-6 bg-light rounded">
                                    <div class="info">
                                        <div id="chart1">
                                            <div class="p-6 m-20rounded shadow">
                                                {!! $KelompokUmur->container() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                            <div class="row align-center">
                                <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                                    <div class="thumb">
                                        <img src="assets/img/illustration/25.png" alt="illustration" />
                                    </div>
                                </div>
                                <div class="col-lg-6 bg-light rounded">
                                    <div class="info">
                                        <div class="p-6 m-20rounded shadow">
                                            {!! $GenderPendudukChart->container() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="tab3" role="tabpanel" aria-labelledby="nav-id-3">
                            <div class="row align-center">
                                <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                                    <div class="thumb">
                                        <img src="assets/img/illustration/25.png" alt="illustration" />
                                    </div>
                                </div>
                                <div class="col-lg-6 bg-light rounded">
                                    <div class="info">
                                        <div id="chart1">
                                            <div class="p-6 m-20rounded shadow">
                                                {!! $StatusPendudukChart->container() !!}
                                            </div>
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


    {{-- Chart Script --}}

    {{-- Gender Penduduk --}}
    <script src="{{ $GenderPendudukChart->cdn() }}"></script>
    {{ $GenderPendudukChart->script() }}

    {{-- Berdasar Kelompok Umur --}}
    <script src="{{ $KelompokUmur->cdn() }}"></script>
    {{ $KelompokUmur->script() }}

    {{-- Berdasar Status --}}
    <script src="{{ $StatusPendudukChart->cdn() }}"></script>
    {{ $StatusPendudukChart->script() }}
@endsection
