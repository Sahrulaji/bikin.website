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
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="footer-logo mb-4">
                        <a href="<?=home_url('/')?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png"  alt="bikin website">
                        </a>
                    </div>
                    <p class="adress-footer">
                        <!--Jl. Blotan No.18, Blotan, Wedomartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta, 55584.-->
                        Gedung Cyber 1 Lt.3, Jl.Kuningan Barat No.8, Jakarta 12710. <br/><br/>
                        Gedung Bursa Efek Indonesia Lt.10, Jl.Taman AIS Nasution No.21, Surabaya 60271.
                    </p>
                    <small class="text-white">*Meeting di tempat hanya dengan perjanjian sebelumnya.</small>
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="d-md-flex justify-content-center">
                        <div class="wrap-footer-nav pr-md-4">
                            <a>
                                <h5>Navigasi</h5>
                            </a>
                            <div>
                                <ul>
                                    <li><a href="<?=home_url('/template')?>">Template</a></li>
                                    <li><a href="<?=home_url('/pesan')?>" class="link-pesan">Pesan</a></li>
                                    <li><a href="<?=home_url('/klien')?>">Klien</a></li>
                                    <li><a href="<?=home_url('/hubungi')?>">Hubungi Kami</a></li>
                                    <!-- <li><a href="<?=home_url('/konfirmasi-pembayaran')?>">Konfirmasi Pembayaran</a></li>-->
                                </ul>
                            </div>
                        </div>
                        
                        <div class="wrap-footer-nav pr-md-4">
                            <a>
                                <h5>Tentang</h5>
                            </a>
                            <div>
                                <ul>
                                    <li><a href="<?=home_url('/tentang-kami')?>">Tentang Kami</a></li>
                                    <!--<li><a href="<?= home_url('/blog') ?>">Kisah Sukses</a></li>-->
                                    <li><a href="<?= home_url('/blog') ?>">Blog</a></li>
                                    <li><a href="<?= home_url('/kb') ?>">Knowledge Base</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="wrap-footer-nav px-md-0">
                            <a>
                                <h5>Lainnya</h5>
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
                </div>
            </div>
            <div class="copyright-footer text-white">
                <div class="d-flex justify-content-center sosmed-footer">
                    <a href="https://www.instagram.com/bikin_website/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/bikindotwebsite/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="text-center text-copyright">
                    Copyright &copy; bikin.website
                </div>
            </div>
        </div>
    </section>
    <!--load all styles -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    
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
    <?php wp_footer(); ?>
</body>
</html>
