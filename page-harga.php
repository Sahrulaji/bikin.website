<?php
/* Template Name: Harga */
get_header();
?>
    
    <!-----------------cover section --------------------->
    <section class="cover">
        <div class="container header">
            <div class="row">
                <div class="col-md-7 header-left">
                    <h2 class="promo-title">DAFTAR HARGA PAKET</h2>
                    <p class="cover-subtitle">
                        Untuk meningkatkan pertumbuhan wirausaha di Indonesia, kami memberikan harga terbaik sesuai standar kualitas platform <a href="<?=home_url('/')?>">BIKIN.WEBSITE</a> yang aman & terpercaya bagi bisnis online kamu.
                    </p>
                </div>

                <div class="col-md-5 text-center">
                </div>
            </div>
        </div>
    </section>

    <!-----------------daftar harga section--------------------->
    
    <section class="daftar-harga-section">
        
        <div class="py-5 container d-md-block d-none">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-columns">
                        <div class="card ukm" id="card-ukm">
                            <h5 class="card-header paket">UKM</h5>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ukm2x.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="wrapper-harga">
                                        <div class="harga-normal">
                                                <span class="rp">Rp.</span>
                                                <span class="nominal">4,5</span>
                                                <span class="juta">&nbsp;juta</span>
                                        </div>
                                        <div class="harga-promo">
                                                <div class="text-promo">PROMOTION PRICE</div>
                                                <div class="wrapper-promo">
                                                        <span class="rp">Rp.</span>
                                                        <div class="d-flex align-items-end">
                                                                <span class="nominal text-purple">2,7</span>
                                                                <span class="juta text-purple">&nbsp;juta</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <p class="card-text"><small class="text-muted description-package">Cocok bagi para pelaku UKM yang ingin membangun website baru untuk bisnisnya. </small></p>
                                <p class="card-text text-18"><b>1,8jt</b> perpanjangan</p>
                                <p class="card-text"><span class="text-muted font-weight-bold">Semua fitur dari Paket UKM</span></p>

                                <div class="wrapper">
                                    <ul class="list-harga">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5 Halaman Website</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5 Simple Image Editing</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">3 Pilihan Logo</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">1x Revisi Design</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">2GB Kapasitas Hosting</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">1 Professional Email Account</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">1 Kata Kunci Basic SEO</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">Durasi Pengerjaan 3 Hari Kerja</li>
                                    </ul>

                                    <!-- <a href="https://portal.bikin.website/cart.php?a=add&pid=1" class="btn-fill purple-fill">Bikin Sekarang</a> -->
                                    <a href="<?=home_url('/hubungi')?>" class="btn-fill purple-fill">Bikin Sekarang</a>
                                   
                                </div>
                            </div>

                        </div>

                        <div class="card corporate" id="card-corporate">
                            <h5 class="card-header paket corporate">CORPORATE</h5>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/corporate2x.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="wrapper-harga">
                                        <div class="harga-normal">
                                                <span class="rp">Rp.</span>
                                                <span class="nominal">6,5</span>
                                                <span class="juta">&nbsp;juta</span>
                                        </div>
                                        <div class="harga-promo">
                                                <div class="text-promo">PROMOTION PRICE</div>
                                                <div class="wrapper-promo">
                                                        <span class="rp">Rp.</span>
                                                        <div class="d-flex align-items-end">
                                                                <span class="nominal text-orange">4,5</span>
                                                                <span class="juta text-orange">&nbsp;juta</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <p class="card-text"><small class="text-muted description-package">Pilihan tepat untuk website Korporasi yang handal & profesional.</small></p>
                                <p class="card-text text-18"><b>3,5jt</b> perpanjangan</p>
                                <p class="card-text"><span class="text-muted font-weight-bold">Semua fitur dari Paket CORPORATE</span></p>

                                <div class="wrapper">
                                    <ul class="list-harga">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">15 Halaman Website</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">15 Simple Image Editing</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5 Pilihan Logo</li>
                                     <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">3x Revisi Design</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5GB Kapasitas Hosting</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5 Professional Email Account</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">3 Kata Kunci Basic SEO</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">Durasi Pengerjaan 7 Hari Kerja</li>
                                    </ul>

                                    <!-- <a href="https://portal.bikin.website/cart.php?a=add&pid=2" class="btn-fill orange-fill">Bikin Sekarang</a> -->
                                    <a href="<?=home_url('/hubungi')?>" class="btn-fill orange-fill">Bikin Sekarang</a>
                                </div>

                            </div>
                        </div>


                        <div class="card ecommerce" id="card-ecommerce">
                            <h5 class="card-header paket">ECOMMERCE</h5>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ecommerce2x.jpg" class="card-img-top" alt="...">
                            <div class="card-body">

                                <div class="wrapper-harga">
                                        <div class="harga-normal">
                                                <span class="rp">Rp.</span>
                                                <span class="nominal">10,5</span>
                                                <span class="juta">&nbsp;juta</span>
                                        </div>
                                        <div class="harga-promo">
                                                <div class="text-promo">PROMOTION PRICE</div>
                                                <div class="wrapper-promo">
                                                        <span class="rp">Rp.</span>
                                                        <div class="d-flex align-items-end">
                                                                <span class="nominal text-dark">9,5</span>
                                                                <span class="juta text-dark">&nbsp;juta</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <p class="card-text"><small class="text-muted description-package">Sesuai untuk mereka yang fokus dalam penyebaran, pembelian, penjualan, pemasaran barang/jasa secara online.</small></p>
                                <p class="card-text text-18"><b>6,5jt</b> perpanjangan</p>
                                <p class="card-text"><span class="text-muted font-weight-bold">Semua fitur dari Paket ECOMMERCE</span></p>

                                <div class="wrapper">
                                    <ul class="list-harga">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">25 Halaman Website</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">25 Simple Image Editing</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5 Pilihan Logo</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">3x Revisi Design</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5GB Kapasitas Hosting</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">5 Professional Email Account</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">3 Kata Kunci Basic SEO</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">Integrasi Metode Pembayaran (Doku/Midtrans) untuk 2 Jenis Pembayaran (CC/VA/GoPay)</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">Video Tutorial Pengaturan Produk</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                class="tick-icon" alt="tick-icon">Durasi Pengerjaan 14 Hari Kerja</li>
                                    </ul>
                                    <!-- <a href="https://portal.bikin.website/cart.php?a=add&pid=3" class="btn-fill dark-fill">Bikin Sekarang</a> -->
                                    <a href="<?=home_url('/hubungi')?>" class="btn-fill dark-fill">Bikin Sekarang</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row mt-md-5">
                <div class="col-md-12">
                    <div class="card custom" id="card-custom">
                        <h5 class="card-header paket custom">CUSTOM</h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <ul class="list-harga">
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">Halaman Website Sesuai Kebutuhan</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">Simple Image Editing Sesuai Jumlah Halaman</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5 Pilihan Logo</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">Revisi Desain Sampai Sesuai</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">Kapasitas Hosting Sesuai Kebutuhan</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">Professional Email Account Sesuai Kebutuhan</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">3 Kata Kunci Basic SEO</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">Integrasi Metode Pembayaran (Doku/Midtrans) untuk 2 Jenis Pembayaran (CC/VA/GoPay)</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">Video Tutorial Pengaturan Produk</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                        class="tick-icon" alt="tick-icon">Durasi Pengerjaan Sesuai Kompleksitas</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><em>Harga dimulai dari : </em></h6>
                                        <div class="row">
                                            <p class="price-package">Rp.<b>15</b><em>juta</em></p>
                                        </div>
                                        <a href="<?=home_url('/hubungi')?>" class="btn-fill lime-fill">Bikin Sekarang</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- mobile pricing -->
        <div class="container d-md-none d-block">
                <div class="mobile-pricing">
                        <div class="card-columns">
                                <div class="card ukm">
                                        <h5 class="card-header paket">UKM</h5>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ukm.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                                <div class="wrapper-harga">
                                                        <div class="harga-normal">
                                                                <span class="rp">Rp.</span>
                                                                <span class="nominal">4,5</span>
                                                                <span class="juta">&nbsp;juta</span>
                                                        </div>
                                                        <div class="harga-promo">
                                                                <div class="text-promo">PROMOTION PRICE</div>
                                                                <div class="wrapper-promo">
                                                                        <span class="rp">Rp.</span>
                                                                        <div class="d-flex align-items-end">
                                                                                <span class="nominal text-purple">2,7</span>
                                                                                <span class="juta text-purple">&nbsp;juta</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <p class="card-text"><small class="text-muted description-package">Cocok bagi para pelaku UKM yang ingin membangun website baru untuk bisnisnya. </small></p>
                                                <p class="card-text text-18"><b>1,8jt</b> perpanjangan</p>
                                                <p class="card-text"><span class="text-muted font-weight-bold">Semua fitur dari Paket UKM</span></p>

                                                <div class="wrapper">
                                                <ul class="list-harga">
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5 Halaman Website</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5 Simple Image Editing</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">3 Pilihan Logo</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">1x Revisi Design</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">2GB Kapasitas Hosting</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">1 Professional Email Account</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">1 Kata Kunci Basic SEO</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">Durasi Pengerjaan 3 Hari Kerja</li>
                                                </ul>

                                                <!-- <a href="https://portal.bikin.website/cart.php?a=add&pid=1" class="btn-fill purple-fill">Bikin Sekarang</a> -->
                                                <a href="<?=home_url('/hubungi')?>" class="btn-fill purple-fill">Bikin Sekarang</a>
                                                
                                                </div>
                                        </div>

                                </div>
                        
                                <div class="card corporate">
                                        <h5 class="card-header paket corporate">CORPORATE</h5>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/corporate.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                                <div class="wrapper-harga">
                                                        <div class="harga-normal">
                                                                <span class="rp">Rp.</span>
                                                                <span class="nominal">6,5</span>
                                                                <span class="juta">&nbsp;juta</span>
                                                        </div>
                                                        <div class="harga-promo">
                                                                <div class="text-promo">PROMOTION PRICE</div>
                                                                <div class="wrapper-promo">
                                                                        <span class="rp">Rp.</span>
                                                                        <div class="d-flex align-items-end">
                                                                                <span class="nominal text-orange">4,5</span>
                                                                                <span class="juta text-orange">&nbsp;juta</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <p class="card-text"><small class="text-muted description-package">Pilihan tepat untuk website Korporasi yang handal & profesional.</small></p>
                                                <p class="card-text text-18"><b>3,5jt</b> perpanjangan</p>
                                                <p class="card-text"><span class="text-muted font-weight-bold">Semua fitur dari Paket CORPORATE</span></p>

                                                <div class="wrapper">
                                                <ul class="list-harga">
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">15 Halaman Website</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">15 Simple Image Editing</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5 Pilihan Logo</li>
                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">3x Revisi Desain</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5GB Kapasitas Hosting</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5 Professional Email Account</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">3 Kata Kunci Basic SEO</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">7 Hari Pekerjaan</li>
                                                </ul>

                                                <!-- <a href="https://portal.bikin.website/cart.php?a=add&pid=2" class="btn-fill orange-fill">Bikin Sekarang</a> -->
                                                <a href="<?=home_url('/hubungi')?>" class="btn-fill orange-fill">Bikin Sekarang</a>
                                                </div>

                                        </div>
                                </div> 
                        
                                <div class="card ecommerce">
                                        <h5 class="card-header paket">ECOMMERCE</h5>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/package/ecommerce.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">

                                                <div class="wrapper-harga">
                                                        <div class="harga-normal">
                                                                <span class="rp">Rp.</span>
                                                                <span class="nominal">10,5</span>
                                                                <span class="juta">&nbsp;juta</span>
                                                        </div>
                                                        <div class="harga-promo">
                                                                <div class="text-promo">PROMOTION PRICE</div>
                                                                <div class="wrapper-promo">
                                                                        <span class="rp">Rp.</span>
                                                                        <div class="d-flex align-items-end">
                                                                                <span class="nominal text-dark">9,5</span>
                                                                                <span class="juta text-dark">&nbsp;juta</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <p class="card-text"><small class="text-muted description-package">Sesuai untuk mereka yang fokus dalam penyebaran, pembelian, penjualan, pemasaran barang/jasa secara online.</small></p>
                                                <p class="card-text text-18"><b>6,5jt</b> perpanjangan</p>
                                                <p class="card-text"><span class="text-muted font-weight-bold">Semua fitur dari Paket ECOMMERCE</span></p>

                                                <div class="wrapper">
                                                <ul class="list-harga">
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">25 Halaman Website</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">25 Simple Image Editing</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5 Pilihan Logo</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">3x Revisi Desain</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5GB Kapasitas Hosting</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">5 Professional Email Account</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">3 Kata Kunci Basic SEO</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">Integrasi Metode Pembayaran (Doku/Midtrans) untuk 2 Jenis Pembayaran (CC/VA/GoPay)</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">Durasi Pengerjaan 14 Hari Kerja</li>
                                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                class="tick-icon" alt="tick-icon">Video Tutorial Pengaturan Produk</li>

                                                </ul>
                                                <!-- <a href="https://portal.bikin.website/cart.php?a=add&pid=3" class="btn-fill dark-fill">Bikin Sekarang</a> -->
                                                <a href="<?=home_url('/hubungi')?>" class="btn-fill dark-fill">Bikin Sekarang</a>
                                                </div>

                                        </div>
                                </div> 
                        </div> 
                </div>
                <div class="card-columns">
                        <div class="card custom">
                                <h5 class="card-header paket custom">CUSTOM</h5>
                                <div class="card-body">
                                <div class="container">
                                        <div class="">
                                                <span class="custom-harga-title">Harga dimulai dari :</span>
                                                <div class="wrapper-harga-custom">
                                                        <span class="rp">Rp.</span>
                                                        <div class="d-flex align-items-end">
                                                                <span class="nominal text-lime">15</span>
                                                                <span class="juta text-lime">&nbsp;juta</span>
                                                        </div>
                                                </div>
                                                <a href="<?=home_url('/hubungi')?>" class="btn-fill lime-fill">Bikin Sekarang</a>
                                        
                                                <div class="col-12">
                                                        <ul class="list-harga">
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">Halaman Website Sesuai Kebutuhan</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                                class="tick-icon" alt="tick-icon">Simple Image Editing Sesuai Jumlah Halaman</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                                class="tick-icon" alt="tick-icon">5 Pilihan Logo</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">Revisi Desain Sampai Sesuai</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">Kapasitas Hosting Sesuai Kebutuhan</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">Professional Email Account Sesuai Kebutuhan</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">3 Kata Kunci Basic SEO</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">Integrasi Metode Pembayaran (Doku/Midtrans) untuk 2 Jenis Pembayaran (CC/VA/GoPay)</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">Video Tutorial Pengaturan Produk</li>
                                                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                                                        class="tick-icon" alt="tick-icon">Durasi Pengerjaan Sesuai Kompleksitas</li>
                                                        </ul>
                                                </div>
                                        
                                        </div>
                                </div>


                                </div>
                        </div>
                </div>
        </div>
        <div class="iclude-pakckage">
                <div class="pb-5 container">
                        <p class="mb-0">SEMUA PAKET sudah termasuk :</p>
                        <ul class="row list-harga">
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">FREE High Performance Cloud Hosting</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">FREE Domain</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">FREE SSL Premium</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">Integrasi Sosial Media</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">Integrasi Marketplace Anda</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">Integrasi Statistik Website</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">Integrasi Fitur Chat</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">Auto Backup Mingguan</li>
                                <li class="col-md-4 col-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/harga-page/black-check-mark-png-md.svg"
                                        class="tick-icon" alt="tick-icon">Customer Service 24x7</li>
                        </ul>
                </div>
        </div>
        
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/curve-blue.png" class="bottom-img" alt="curve-blue">
    </section>

    <!-----------------footer section--------------------->
<?php
    get_footer();