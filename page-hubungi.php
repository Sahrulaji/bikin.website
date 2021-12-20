<?php
/* Template Name: Hubungi */

add_filter( 'the_title', function ($title) { return "";});
get_header('blue');
?>

    <!-----------------hubungi kami form--------------------->

    <section id="hubungi-form">
        <div class="container-fluid bg py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8">
                    <img class="backdrop topleft img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/login-page/Rectangle.png" alt="rectangle">
                    <div class="form-container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h2 class="promo-title"> Mari kita saling terhubung. Kami ingin selalu mendengar & memenuhi kebutuhan kamu. </h2>
                                <ul class="info-company">
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="tel:622139711500" class="hubungi-detail" target="_blank">6221 39711500</a>
                                    </li>

                                    <li>
                                    <i class="fab fa-whatsapp"></i>
                                        <a href="https://api.whatsapp.com/send?phone=628112635788" target="_blank">628112635788</a>
                                    </li>
                                    
                                    <li>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:hello@bikin.website" class="hubungi-detail" target="_blank"> hello@bikin.website</a>
                                    </li>
                                
                                    <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <a href="https://goo.gl/maps/SxpQdUrUtQ6o58q8A" target="_blank" class="hubungi-detail">
                                            Jl. Blotan No.18, Blotan, Wedomartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta, 55584.
                                        </a>
                                    </li>
                                </ul>
                                <div class="col-12 contact-sosmed">
                                    <div class="row align-items-cente">
                                        <a href="https://www.facebook.com/bikindotwebsite/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                        <a href="https://www.instagram.com/bikin_website/" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
                                        <!-- <a href="https://api.whatsapp.com/send?phone=08112635788" target="_blank"><i class="fab fa-whatsapp"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-0">

                                <?php
                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post();

                                        get_template_part( 'template-parts/content/content', 'page' );

                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if ( comments_open() || get_comments_number() ) {
                                            comments_template();
                                        }

                                    endwhile; // End of the loop.
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------------footer section--------------------->
<?php
    get_footer();