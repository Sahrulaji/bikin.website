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
            <div class="d-md-flex justify-content-center">
                <div class="wrap-footer-nav px-md-4">
                    <a>
                        <h5>NAVIGASI</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="<?=home_url('/fitur')?>">Fitur</a></li>
                            <li><a href="<?=home_url('/klien')?>">Klien</a></li>
                            <li><a href="<?=home_url('/template')?>">Templates</a></li>
                            <li><a href="<?=home_url('/harga')?>">Harga</a></li><!--
                            <li><a href="<?=home_url('/konfirmasi-pembayaran')?>">Konfirmasi Pembayaran</a></li>-->
                        </ul>
                    </div>
                </div>
                
                <div class="wrap-footer-nav px-md-4">
                    <a>
                        <h5>Bikin.website</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="<?=home_url('/hubungi')?>">Hubungi Kami</a></li>
                            <li><a href="<?=home_url('/tentang-kami')?>">Tentang Kami</a></li>
                            <!--<li><a href="<?= home_url('/blog') ?>">Kisah Sukses</a></li>-->
                            <li><a href="<?= home_url('/blog') ?>">Blog</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="wrap-footer-nav px-md-4">
                    <a>
                        <h5>Regulasi</h5>
                    </a>
                    <div>
                        <ul>
                            <li><a href="<?=home_url('/ketentuan-kami')?>">Acceptable Use Policy</a></li>
                            <!--<li><a href="<?=home_url('/refund-policy')?>">Refund Policy</a></li>-->
                            <li><a href="<?=home_url('/kebijakan-pribadi')?>">Privacy Policy</a></li>
                            <!--<li><a href="<?=home_url('/aturan-lain')?>">Aturan Lain</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer-logo text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png"  alt="bikin website">
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
           <!-- <div class="card">
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
                            <li><a href="<?= home_url('/blog') ?>">Berita</a></li>
                            <li><a href="<?= home_url('/blog') ?>">Kisah Sukses</a></li>
                            <li><a href="<?= home_url('/blog') ?>">Tutorial</a></li>
                            <li><a href="<?= home_url('/blog') ?>">Update</a></li>
                        </ul>
                    </div>
                </div>
            </div>-->
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
                           <!-- <li><a href="<?=home_url('/karir')?>">Karir</a></li>-->
                            <li><a href="<?=home_url('/hubungi')?>">Hubungi Kami</a></li>
                            <li><a href="<?= home_url('/blog') ?>">Blog</a></li>
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
                        <ul><!--
                            <li><a href="<?=home_url('/bantuan')?>">Bantuan</a></li>-->
                            <li><a href="<?=home_url('/ketentuan-kami')?>">Ketentuan Penggunaan</a></li>
                            <li><a href="<?=home_url('/kebijakan-pribadi')?>">Kebijakan Pribadi</a></li>
                            <?php if ( is_user_logged_in() ) { ?>
                                <!-- <li><a href="<?=home_url('/my-account')?>">Profil Saya</a></li> -->
                            <?php }else{ ?>
                                <!-- <li><a href="<?=home_url('/registration')?>">Buat Akun</a></li> -->
                            <?php } ?><!--
                            <li><a href="<?=home_url('/konfirmasi-pembayaran')?>">Konfirmasi Pembayaran</a></li>-->
                        </ul>
                    </div>
                </div>
                <!--<div class="card">
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
                </div>-->

            </div>
            <div class="div">
                <div class="col-lg-12 text-center">
					<div class="footer-logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png" alt="Bikin.website">
					</div>
                </div>
            </div>
        </div>

    </section>
    <!--load all styles -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/js/all.js"></script>
    <?php 
        if ( is_front_page() ) :
    ?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/homev2.js"></script>
    <?php  
        else :
        '';
        endif;
    ?>
    <?php wp_footer(); ?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			var navHeight = $('header').height()+400;					
					if($(window).scrollTop() > navHeight){
						$('.sidebar-right').css('margin-top',navHeight);
						$('.content-widget').addClass('side-bar-fixed');
					}
					else{
						$('.sidebar-right').css('margin-top',0);
						$('.content-widget').removeClass('side-bar-fixed');
					}
					
				$(window).scroll(function(){
					
					if($(window).scrollTop() > navHeight){
						$('.sidebar-right').css('margin-top',navHeight);
						$('.content-widget').addClass('side-bar-fixed');
					}
					else{
						$('.sidebar-right').css('margin-top',0);
						$('.content-widget').removeClass('side-bar-fixed');
					}
				});
			});
	</script>
    
</body>
</html>
