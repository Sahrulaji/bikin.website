<?php

/* Template Name: Feature */

get_header();
?>
    <!-----------------cover section--------------------->
    <section class="cover">
        <div class="container header">
            <div class="row cover-page">
                <div class="col-md-6 header-left">
                    <h2 class="promo-title">FITUR</h2>
                    <p class="cover-subtitle">
                        Perluas jangkauan usaha dengan fitur lengkap yang menjawab kebutuhan website Anda. Mulai dari desain responsif yang keren, sistem yang terintegrasi, hingga fitur monitoring statistik website Anda. Lihat fitur - fitur lainnya di bawah ini:
                    </p>
                </div>

                <div class="col-md-6 text-center">
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/fitur.png" class="cover-picture img-fluid" alt="cover-background">
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/curve-blue.png" class="bottom-img wave-cover img-fluid"  alt="curve-blue">
    </section>
    <!-----------------icons section-------------------->
    <section id="icons-feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1"> </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-md-2 col-12">

                            <!-- <b href="index.html"><i class="icon fa fa-home fa-2x"></i><b>Home</b></div> -->
                            <a href="#Desain-Responsif">
                                <div class="icon-div"> <i class="fas fa-tablet-alt"></i></div>


                                <h6> DESAIN<br>RESPONSIF</h6>
                                <!-- DESAIN RESPONSIF -->

                            </a>
                        </div>

                        <div class="col-md-2 col-12">
                            <a href="#Pembayaran-Terintegrasi">
                                <div class="icon-div"><i class="fas fa-credit-card"></i></div>

                                <h6>PEMBAYARAN<br>TERINTEGRASI</h6>
                            </a>
                        </div>

                        <div class="col-md-2 col-12">
                            <a href="#Maintenance-Website">
                                <div class="icon-div"><i class="fas fa-tools"></i></div>

                                <h6>MAINTENANCE<br>WEBSITE</h6>
                            </a>
                        </div>

                        <div class="col-md-2 col-12">
                            <a href="#Integrasi-Marketplace">
                                <div class="icon-div"><i class="fas fa-shopping-cart"></i></div>

                                <h6>INTEGRASI<br>MARKETPLACE</h6>
                            </a>
                        </div>

                        <div class="col-md-2 col-12">
                            <a href="#Fitur-Marketing">
                                <div class="icon-div"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>

                                <h6>FITUR<br>MARKETING</h6>
                            </a>
                        </div>

                        <div class="col-md-2 col-12">
                            <a href="#Statistik-Internal">
                                <div class="icon-div"><i class="fas fa-chart-bar"></i></div>

                                <h6>STATISTIK<br>INTERNAL</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">

                    <div class="col-12">
                        <p class="icons-text">Fitur lengkap, bebas worry. Kecanggihan fitur-fitur dari <a href="<?=home_url('/')?>" class="text-white">BIKIN.WEBSITE</a> ini menjadi penentu keberhasilan bisnismu.</p>
                    </div>
                </div>
            </div>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/curve-white.png" class="bottom-img" alt="curve-white">
    </section>

    <!-----------------features explanation section-------------------->
    <section class="feature-explanation">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/fitur-responsif.png" class="img-fluid"  alt="fitur">
                </div>
                <div class="col-md-5" id="Desain-Responsif">
                    <h2 class="feature-name">Desain Responsif</h2>
                    <p>Raih user experience yang baik melalui desain website yang responsif serta navigasi simple.
                        Tampilan halaman terlihat keren sekaligus responsif apabila diakses dari perangkat smartphone,
                        tablet, dsb.</p>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row">

                <div class="col-md-6 order-md-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/fitur-pembayaran.png" class="img-fluid" alt="pembayaran">
                </div>
                <div class="col-md-5 order-md-2" id="Pembayaran-Terintegrasi">
                    <h2 class="feature-name">Pembayaran Terintegrasi</h2>
                    <p>Transaksi lebih aman, mudah, dan cepat dengan sistem pembayaran yang terintegrasi. Tersedia banyak pilihan Bank dan metode pembayaran. Mulai dari offline, online, hingga konfirmasi otomatis.</p>
                </div>
                <div class="col-md-1 order-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/fitur-maintenance.png" class="img-fluid" alt="maintenance">
                </div>
                <div class="col-md-5" id="Maintenance-Website">
                    <h2 class="feature-name">Maintenance Website</h2>
                    <p>Dapatkan FREE maintenance website setiap bulan<span class="terms-condition">*</span> selama 1 tahun penuh untuk perubahan halaman dan maintenance lainnya.</p>
                    <p class="text-13"><span class="terms-condition">*</span>term & conditions apply</p>
                </div>
            </div>


            <div class="row">

                <div class="col-md-6 order-md-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/fitur-marketplace.png" class="img-fluid" alt="marketplace">
                </div>
                <div class="col-md-5 order-md-2" id="Integrasi-Marketplace">
                    <h2 class="feature-name">Integrasi Marketplace</h2>
                    <p>Website kamu dapat diintegrasikan ke berbagai marketplace ternama untuk mendukung kegiatan promosi dan pemasaran produk kamu.</p>
                </div>
                <div class="col-md-1 order-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/fitur-marketing.png" class="img-fluid" alt="marketing">
                </div>
                <div class="col-md-5" id="Fitur-Marketing">
                    <h2 class="feature-name">Fitur Marketing</h2>
                    <p>Seluruh template Website & Toko Onlinemu telah mendukung berbagai tools marketing untuk jangkauan
                        market yang lebih luas. Mulai dari Facebook Ads, Instagram Ads, Twitter Ads, Google Adwords,
                        SEO/SEM, Media Monitoring, dan Social Media Optimization.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-12 order-md-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/fitur-statistik.png" class="img-fluid" alt="statistik">
                </div>

                <div class="col-md-5 col-12 order-md-2" id="Statistik-Internal">
                    <h2 class=" feature-name">Statistik Internal</h2>
                    <p>Terhubung ke google analytic untuk statistik akses ke website kamu.
Sehingga memudahkan kamu dalam monitoring traffic dan menentukan strategi promosi/pemasaran.</p>
                </div>
                <div class="col-md-1 order-md-1"></div>
            </div>

        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/curve-blue.png" class="bottom-img" alt="curve-blue">
    </section>

    <!-----------------bikin button section--------------------->
    <section id="bikin-button-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div>
                        <a href="<?=home_url('/harga')?>" class="btn btn-outline-danger btn-mulai-footer">Bikin Website Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();