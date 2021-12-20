<?php
/* Template Name: Homepage */
get_header('blue');
?>  

    <!-----------------banner section (section 1)--------------------->
   
    <section id="banner">
        <div class="container header homepage">
            <div class="row cover-page">
                <div class="col-lg-6 header-left d-lg-block d-md-none d-block">
                    <h2 class="promo-title">Wujudkan website impian dengan mudah di sini.</h2>
                    <div>
                        <a href="<?=home_url('/harga')?>" class="btn btn-outline-danger btn-mulai">Bikin Website Sekarang</a>
                    </div>

                    <div class="d-flex align-items-center contact-info">
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://api.whatsapp.com/send?phone=08112635788" target="_blank">08112635788</a>
                    </div>
                    <div class="d-flex align-items-center contact-info">
                        <i class="far fa-envelope"></i>
                        <a href="mailto:hello@bikin.website" target="_blank">hello@bikin.website</a>
                    </div>
                </div>

                <div class="col-lg-6 text-center">

                    <div class="banner-slider">
                        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/websites-header/sample1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/websites-header/sample2.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/websites-header/sample3.png" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cover-img.png" class="img-banner"> -->
                </div>

                <div class="col-12 header-left d-lg-none d-md-block d-none">
                    <h2 class="promo-title text-center">Wujudkan website impian dengan mudah di sini.</h2>
                    <div class="text-center">
                        <a href="<?=home_url('/harga')?>" class="btn btn-outline-danger btn-mulai">Bikin Website Sekarang</a>
                    </div>

                    <p class="contact-info text-center">
                        whatsapp : +62 8787 6242 300
                        <br>
                        email : hello@bikin.website
                    </p>
                </div>
            </div>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curveheader.png" class="bottom-img" alt="curveheader">
    </section>

    <!-----------------template section (Section 2)--------------------->

    <section id="template-section">
        <div class="container template-top-section">
            <div class="row">
                <div class="col-lg-6 d-lg-none d-block">
                    <h2 class="title-section">Temukan template keren yang pas buat kamu.</h2>
                    <p class="description-section">Tersedia banyak pilihan template yang kamu banget. Desain simpel dan elegan membuat tampilan website lebih keren.</p>
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                        <div class="col-md-6">
                            <div class="text-center mb-32">
                                <a href="<?=home_url('/template')?>" class="text-underline text-orange">Lihat Semua Template ></a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 position-relative">
                    <div id="carousel_template" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/design_agency.jpg" alt="..." class="img-thumbnail img-rounded">
                            </div>
                            <div class="carousel-item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/coffee.jpg" alt="..." class="img-thumbnail img-rounded">
                            </div>
                            <div class="carousel-item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/fashion.jpg" alt="..." class="img-thumbnail img-rounded">
                            </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/florist.jpg" alt="..." class="img-thumbnail img-rounded">
                            </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/web_agency.jpg" alt="..." class="img-thumbnail img-rounded">
                            </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/digital_payments.jpg" alt="..." class="img-thumbnail img-rounded">
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel_template" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel_template" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>

                            <ol class="carousel-indicators" id="carousel_indicator_template">
                                <li data-target="#carousel_template" data-slide-to="0" class="active">     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/design_agency.jpg" alt="..." class="img-thumbnail img-rounded"></li>
                                <li data-target="#carousel_template" data-slide-to="1">    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/coffee.jpg" alt="..." class="img-thumbnail img-rounded"></li>
                                <li data-target="#carousel_template" data-slide-to="2">    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/fashion.jpg" alt="..." class="img-thumbnail img-rounded"></li>
                                <li data-target="#carousel_template" data-slide-to="3" class="active">   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/florist.jpg" alt="..." class="img-thumbnail img-rounded"></li>
                                <li data-target="#carousel_template" data-slide-to="4">  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/web_agency.jpg" alt="..." class="img-thumbnail img-rounded"></li>
                                <li data-target="#carousel_template" data-slide-to="5">  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/bikin_website_template/digital_payments.jpg" alt="..." class="img-thumbnail img-rounded"></li>
                            </ol>
                    </div>
                </div>
                
                <div class="col-lg-6 d-lg-block d-none">
                    <h2 class="title-section">Temukan template keren yang pas buat kamu.</h2>
                    <p class="description-section">Tersedia banyak pilihan template yang kamu banget. Desain simpel dan elegan membuat tampilan website lebih keren.</p>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div>
                                <a href="<?=home_url('/template')?>" class="lebih-dalam text-orange">Lihat Semua Template ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container template-bottom-section">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>
  
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curve-blue-right.png" class="bottom-img" alt="curve-blue">
    </section>

    <!-----------------Feature section (Section 3)--------------------->

    <section id="feature-section" style="background: #0d0938">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="title-section white-title">Fitur lengkap untuk memenuhi kebutuhan & kenyamanan yang kamu mau.  </h2>
                    <p class="description-section info-feature">Semua fitur pendukung yang kamu butuhkan telah tersedia. Ini memberikan kamu kemudahan dalam membuat dan mengelola website</p>

                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                        <div class="col-md-6">
                            <a href="<?=home_url('/fitur')?>">
                                <p class="lebih-dalam text-lg-left text-center">Pelajari Lebih Dalam ></p>
                            </a>
                        </div>

                    </div>



                </div>
                <div class="col-lg-5">
                    
                    <div class="container">
                        <div id="accordion">
                            <div class="row row-fitur">
                                <div class="card-header" id="h-fitur-design">
                                    <h5 class="mb-0">
                                        <button class="btn btn-info" data-toggle="collapse" data-target="#fitur-design" aria-expanded="true" aria-controls="fitur-design">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-design.png" class="img-fluid" alt="design">
                                            Design Berkualitas
                                        </button>
                                    </h5>
                                </div>

                                <div id="fitur-design" class="collapse" aria-labelledby="h-fitur-design" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="info-feature">Wujudkan website impianmu dengan tampilan memukau, layout terpilih, serta desain berkualitas  dari BIKIN.WEBSITE</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-fitur">
                                <div class="card-header" id="h-fitur-pembayaran">
                                <h5 class="mb-0">
                                    <button class="btn btn-info collapsed" data-toggle="collapse" data-target="#fitur-pembayaran" aria-expanded="false" aria-controls="fitur-pembayaran">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-pembayaran.png" class="img-fluid" alt="pembayaran">
                                        Pembayaran Terintegrasi
                                    </button>
                                </h5>
                                </div>
                                <div id="fitur-pembayaran" class="collapse" aria-labelledby="h-fitur-pembayaran" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="info-feature">Transaksi lebih aman, mudah, dan cepat dengan sistem pembayaran yang terintegrasi. Metode pembayaran. mulai dari offline, online, hingga konfirmasi otomatis.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-fitur">
                                <div class="card-header" id="h-fitur-developer">
                                <h5 class="mb-0">
                                    <button class="btn btn-info collapsed" data-toggle="collapse" data-target="#fitur-developer" aria-expanded="false" aria-controls="fitur-developer">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-developer.png" class="img-fluid" alt="developer">
                                        Tim Developer Terpercaya
                                    </button>
                                </h5>
                                </div>
                                <div id="fitur-developer" class="collapse" aria-labelledby="h-fitur-developer" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="info-feature">Dirancang oleh tim developer terbaik agar website sampai kepada pengguna dengan navigasi simple, desain responsif, dan performa terbaik.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-fitur">
                                <div class="card-header" id="h-fitur-marketing">
                                <h5 class="mb-0">
                                    <button class="btn btn-info collapsed" data-toggle="collapse" data-target="#fitur-marketing" aria-expanded="false" aria-controls="fitur-marketing">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-marketing.png" class="img-fluid" alt="marketing">
                                        Fitur Marketing
                                    </button>
                                </h5>
                                </div>
                                <div id="fitur-marketing" class="collapse" aria-labelledby="h-fitur-marketing" data-parent="#accordion">
                                    <div class="card-body">
                                    <p class="info-feature">Seluruh template untuk Website & Toko Onlinemu telah mendukung berbagai tools marketing untuk jangkauan market yang lebih luas. Mulai dari Facebook Ads,  Instagram Ads, Twitter Ads, Google Adwords, SEO/SEM, Media Monitoring, dan Social Media Optimization. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curveheader.png" class="bottom-img" alt="curvehead">

    </section>


    <!-----------------package section--------------------->

    <section id="package-section">
        <!---Desktop version--->
        <div class="container package-desktop">
            <div class="row">
                <div class="col-md-6">
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-ukm" role="tabpanel" aria-labelledby="pills-ukm">
                            <div class="card card-packages">
                                <h3 class="title-packages text-purple">Paket UKM.</h3>
                                <ul class="packages-list ukm-package">
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5 Halaman Website</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Simple 5 Image Editing</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>3 Pilihan Logo</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>1x Revisi Design</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>2GB Kapasitas Hosting</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>1 Professional Email Account</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>1 Kata Kunci Basic SEO</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>3 Hari Kerja Durasi Pengerjaan</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-ecommerce" role="tabpanel" aria-labelledby="pills-ecommerce">
                            <div class="card card-packages">
                                <h3 class="title-packages text-black">Paket Ecommerce.</h3>
                                <ul class="packages-list ecommerce-package">
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>25 Halaman Website</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Simple 25 Image Editing</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5 Pilihan Logo</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>3x Revisi Design</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5GB Kapasitas Hosting</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5 Professional Email Account</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>3 Kata Kunci Basic SEO</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Integrasi Metode Pembayaran (Doku/Midtrans)</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Video Tutorial Pengaturan Produk</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>14 Hari Kerja Durasi Pengerjaan</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-corporate" role="tabpanel" aria-labelledby="pills-corporate">
                            <div class="card card-packages">
                                <h3 class="title-packages text-orange">Paket Corporate.</h3>
                                <ul class="packages-list corporate-package">
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>15 Halaman Website</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Simple 15 Image Editing</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5 Pilihan Logo</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>3x Revisi Design</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5GB Kapasitas Hosting</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5 Professional Email Account</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>3 Kata Kunci Basic SEO</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>7 Hari Kerja Durasi Pengerjaan</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-custom" role="tabpanel" aria-labelledby="pills-custom">
                            <div class="card card-packages">
                                <h3 class="title-packages text-yellow">Paket Custom.</h3>
                                <ul class="packages-list custom-package">
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Halaman Website Sesuai Kebutuhan</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Simple Image Editing Sesuai Jumlah Halaman</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>5 Pilihan Logo</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Revisi Desain Sampai Sesuai</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Kapasitas Hosting Sesuai Kebutuhan</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Professional Email Account Sesuai Kebutuhan</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>3 Kata Kunci Basic SEO</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Integrasi Metode Pembayaran (Doku/Midtrans)</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Video Tutorial Pengaturan Produk</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-square"></i>
                                        <span>Durasi Pengerjaan Sesuai Kompleksitas</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div>
                                <a href="<?=home_url('/harga')?>" class="btn btn-outline-danger no-outline mb-0">Bikin Website Sekarang</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <a href="<?=home_url('/template')?>" class="lebih-dalam text-orange">Lihat Semua Template ></a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="nav-item col-md-6">
                    <h2 class="title-section">Website apa yang akan kamu buat? Pilih paket di sini.</h2>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link package_icon active" id="ukm-icon" data-toggle="pill" href="#pills-ukm"
                                role="tab" aria-controls="pills-ukm" aria-selected="true">
                                <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ukm.jpg" alt="Card image cap" id="ukm_img">
                                <div class="card-body package-name">
                                    <h5 class="card-text">ukm.</h5>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link package_icon" id="ecommerce-icon" data-toggle="pill"
                                href="#pills-ecommerce" role="tab" aria-controls="pills-ecommerce" aria-selected="false">
                                <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ecommerce.jpg" id="ecommerce_img" alt="Card image cap">
                                <div class="card-body package-name">
                                    <h5 class="card-text">ecommerce.</h5>
                                </div>

                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link package_icon" id="corporate-icon" data-toggle="pill"
                                href="#pills-corporate" role=" tab" aria-controls="pills-corporate" aria-selected="false">


                                <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/corporate.jpg" id="corporate_img" alt="Card image cap">
                                <div class="card-body package-name">
                                    <h5 class="card-text">corporate.</h5>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link package_icon" id="custom-icon" data-toggle="pill" href="#pills-custom"
                                role=" tab" aria-controls="pills-custom" aria-selected="false">
                                <img class=" card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/custom.jpg" id="custom_img" alt="Card image cap">
                                <div class="card-body package-name">
                                    <h5 class="card-text">custom.</h5>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


        <!---Mobileversion--->
        <div class="container package-mobile">
            <h2 class="title-section text-center">Website apa yang akan kamu buat? Pilih paket di sini.</h2>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ecommerce.jpg" class="d-block w-100 img-package" alt="...">
                                    <div class=wrapper-card-packages>
                                        <div class="card card-packages">
                                            <h3 class="title-packages text-black">Paket Ecommerce.</h3>
                                            <ul class="packages-list ecommerce-package">
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>25 Halaman Website</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Simple 25 Image Editing</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5 Pilihan Logo</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>3x Revisi Design</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5GB Kapasitas Hosting</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5 Professional Email Account</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>3 Kata Kunci Basic SEO</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Integrasi Metode Pembayaran (Doku/Midtrans)</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Video Tutorial Pengaturan Produk</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>14 Hari Kerja Durasi Pengerjaan</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ukm.jpg" class="d-block w-100 img-package" alt="...">
                                    <div class=wrapper-card-packages>
                                        <div class="card card-packages">
                                            <h3 class="title-packages text-purple">Paket UKM.</h3>
                                            <ul class="packages-list ukm-package">
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5 Halaman Website</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Simple 5 Image Editing</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>3 Pilihan Logo</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>1x Revisi Design</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>2GB Kapasitas Hosting</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>1 Professional Email Account</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>1 Kata Kunci Basic SEO</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>3 Hari Kerja Durasi Pengerjaan</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/corporate.jpg" class="d-block w-100 img-package" alt="...">
                                    <div class=wrapper-card-packages>
                                        <div class="card card-packages">
                                            <h3 class="title-packages text-orange">Paket Corporate.</h3>
                                            <ul class="packages-list corporate-package">
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>15 Halaman Website</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Simple 15 Image Editing</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5 Pilihan Logo</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>3x Revisi Design</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5GB Kapasitas Hosting</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5 Professional Email Account</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>3 Kata Kunci Basic SEO</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>7 Hari Kerja Durasi Pengerjaan</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/custom.jpg" class="d-block w-100 img-package" alt="...">
                                    <div class=wrapper-card-packages>
                                        <div class="card card-packages">
                                            <h3 class="title-packages text-yellow">Paket Custom.</h3>
                                            <ul class="packages-list custom-package">
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Halaman Website Sesuai Kebutuhan</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Simple Image Editing Sesuai Jumlah Halaman</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>5 Pilihan Logo</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Revisi Desain Sampai Sesuai</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Kapasitas Hosting Sesuai Kebutuhan</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Professional Email Account Sesuai Kebutuhan</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>3 Kata Kunci Basic SEO</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Integrasi Metode Pembayaran (Doku/Midtrans)</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Video Tutorial Pengaturan Produk</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-square"></i>
                                                    <span>Durasi Pengerjaan Sesuai Kompleksitas</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>                                  
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <hr class="separate-section">

    <!-----------------testimonial section--------------------->
    <section id="testimonial">
        <div class="container ">
            <div class="row testimonial-display">
                <div class="col-md-10 mx-auto">
                    <div class="bd-example">
                        <div id="carouselcaption" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselcaption" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselcaption" data-slide-to="1"></li>

                            </ol>
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-model-1.png" class="d-block w-100 p-0" alt="...">
                                    <div class="carousel-caption ">
                                        <h5 class="testimonial-name">Astrid</h5>
                                        <p class="testimonial-profession">Writer</p>
                                    </div>
                                </div>
                                <!--<div class="carousel-item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-model-2.png" class="d-block w-100 p-0" alt="...">
                                    <div class="carousel-caption">
                                        <h5 class="testimonial-name">Kevin Moreno</h5>
                                        <p class="testimonial-profession">duniaIT.com, Blogger</p>
                                    </div>
                                </div>-->
                                <div class="text-testimonial">
                                    <h2 class="title-section">
                                        Dipercayai oleh mereka yang ahli dan telah berhasil dalam bidang mereka. 
                                    </h2>
                                    <a href="<?=home_url('/klien')?>" class="lebih-dalam text-black p-0">
                                        Lihat profil klien kami >
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselcaption" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselcaption" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="testi-logo">
                <div class="row">
                    <div class="col-md-3 col-6 text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/client1.png" class="client" alt="client"></div>
                    <div class="col-md-3 col-6 text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/client2.png" class="client" alt="client"></div>
                    <div class="col-md-3 col-6 text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/client3.png" class="client" alt="client"></div>
                    <div class="col-md-3 col-6 text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/client4.png" class="client" alt="client"></div>
                </div>
            </div>-->
        </div>
    </section>

    <hr class="separate-section">
    <!-----------------payment partners section--------------------->
    <section id="payment-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="payment-title">Mudah dalam Pembayaran</h2>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/4.png" class="payment-partner-logo" alt="partner-logo">
                </div>
                
                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/2.png" class="payment-partner-logo" alt="partner-logo">
                </div>
                               
                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/14.png" class="payment-partner-logo" alt="partner-logo">
                </div>
                
                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/5.jpg" class="payment-partner-logo" alt="partner-logo">
                </div>
                
                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/15.png" class="payment-partner-logo" alt="partner-logo">
                </div>

                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/1.png" class="payment-partner-logo" alt="partner-logo">
                </div>

                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/18.png" class="payment-partner-logo" alt="partner-logo">
                </div>

                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/12.png" class="payment-partner-logo" alt="partner-logo">
                </div>
                
                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/17.png" class="payment-partner-logo" alt="partner-logo">
                </div>

                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/8.png" class="payment-partner-logo" alt="partner-logo">
                </div>
                
                <div class="col-md-2 py-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment/7.png" class="payment-partner-logo" alt="partner-logo">
                </div>
            </div>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curve-blue.png" class="bottom-img" alt="curve-blue">
    </section>

<?php
get_footer();