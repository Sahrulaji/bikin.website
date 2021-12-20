<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
    <!-----------------footer section--------------------->

    <!---desktop version-->
    
    <section class="footer">
   
        <div class="container footer-desktop">
            <div class="row">
                <div class="col-md-2">
                    <a>
                        <h5>NAVIGASI</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="<?=home_url('/fitur')?>">Fitur</a></li>
                            <li><a href="<?=home_url('/template')?>">Templates</a></li>
                            <li><a href="<?=home_url('/harga')?>">Harga</a></li>
                            <li><a href="<?=home_url('/#')?>">Konfirmasi Pembayaran</a></li>

                            <!-- <li><a href="<?=home_url('/harga/#card-corporate')?>">Corporate</a></li>
                            <li><a href="<?=home_url('/harga/#card-ukm')?>">UKM</a></li>
                            <li><a href="<?=home_url('/harga/#card-custom')?>">Custom</a></li> -->
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <a>
                        <h5>BLOG</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="http://blog.bikin.website/">Berita</a></li>
                            <li><a href="http://blog.bikin.website/">Kisah Sukses</a></li>
                            <li><a href="http://blog.bikin.website/">Tutorial</a></li>
                            <li><a href="http://blog.bikin.website/">Update</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <a>
                        <h5>BIKIN.WEB</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="<?=home_url('/tentang-kami')?>">Tentang Kami</a></li>
                            <li><a href="<?=home_url('/karir')?>">Karir</a></li>
                            <li><a href="<?=home_url('/hubungi')?>">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a>
                        <h5>TAUTAN LAIN</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="<?=home_url('/bantuan')?>">Bantuan</a></li>
                            <li><a href="<?=home_url('/ketentuan')?>">Ketentuan Penggunaan</a></li>
                            <li><a href="<?=home_url('/kebijakan-pribadi')?>">Kebijakan Pribadi</a></li>
                            <li><a href="<?=home_url('/konfirmasi-pembayaran')?>">Konfirmasi Pembayaran</a></li>
                            <?php if ( is_user_logged_in() ) { ?>
                                <li><a href="<?=home_url('/my-account')?>">Profil Saya</a></li>
                            <?php }else{ ?>
                                <li><a href="<?=home_url('/registration')?>">Buat Akun</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a>
                        <h5>IKUTI KAMI</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">LinkedIn</a></li>
                            <li><a href="#">Medium</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png"  alt="logo">
                </div>
            </div>
        </div>

        <!---mobile collapsable footer-->

        <div class="accordion footer-mobile" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            JELAJAH
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                             <li><a href="<?=home_url('/template')?>">Templates</a></li>
                            <li><a href="<?=home_url('/harga/#slick-slide02')?>">eCommerce</a></li>
                            <li><a href="<?=home_url('/harga/#slick-slide01')?>">Corporate</a></li>
                            <li><a href="<?=home_url('/harga/#slick-slide03')?>">UKM</a></li>
                            <li><a href="<?=home_url('/harga/#card-custom')?>">Custom</a></li>
                            <li><a href="<?=home_url('/fitur')?>">Fitur</a></li>
                            <li><a href="<?=home_url('/harga')?>">Harga</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            BLOG
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="http://blog.bikin.website">Berita</a></li>
                            <li><a href="http://blog.bikin.website">Kisah Sukses</a></li>
                            <li><a href="http://blog.bikin.website">Tutorial</a></li>
                            <li><a href="http://blog.bikin.website">Update</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            BIKIN.WEB
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="<?=home_url('/tentang-kami')?>">Tentang Kami</a></li>
                            <li><a href="<?=home_url('/karir')?>">Karir</a></li>
                            <li><a href="<?=home_url('/hubungi')?>">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            TAUTAN LAIN
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="<?=home_url('/bantuan')?>">Bantuan</a></li>
                            <li><a href="<?=home_url('/ketentuan')?>">Ketentuan Penggunaan</a></li>
                            <li><a href="<?=home_url('/kebijakan-pribadi')?>">Kebijakan Pribadi</a></li>
                            <?php if ( is_user_logged_in() ) { ?>
                                <li><a href="<?=home_url('/my-account')?>">Profil Saya</a></li>
                            <?php }else{ ?>
                                <li><a href="<?=home_url('/registration')?>">Buat Akun</a></li>
                            <?php } ?>
                            <li><a href="<?=home_url('/konfirmasi-pembayaran')?>">Konfirmasi Pembayaran</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                IKUTI KAMI
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Youtube</a></li>
                                <li><a href="#">LinkedIn</a></li>
                                <li><a href="#">Medium</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="div">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png" alt="logo">
                </div>
            </div>
        </div>

    </section>
    <!--load all styles -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/js/all.js"></script>
    <?php wp_footer(); ?>

</body>
</html>
