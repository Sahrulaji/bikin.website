<?php
/* Template Name: Hubungi v2 */

add_filter( 'the_title', function ($title) { return "";});
get_header();
?>

    <!-----------------hubungi kami form--------------------->

    <section id="hubungi-form">
        <div class="container-fluid bg py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8">
                    <div class="backdrop topleft img-fluid">
                        <svg width="499" height="343" viewBox="0 0 499 343" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="left_backdrop" d="M133.65 180.819L3.50229 120.418L298.633 69.5635L189.666 234.239L192.436 245.617L147.312 320.576L133.65 180.819Z" fill="#FF7E0D"></path>
                            <path id="right_backdrop" d="M364.5 161.687L494.648 222.087L199.517 272.942L308.485 108.267L305.714 96.8887L350.839 21.9292L364.5 161.687Z" fill="#FF7E0D"></path>    
                        </svg>
                    </div>
                    <div class="form-container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h1 class="promo-title" style="margin-bottom:0px">Mari kita saling terhubung,</h1>
                                <h2 class="promo-title">kami ingin selalu mendengar dan memenuhi kebutuhanmu.</h2>
                                <ul class="info-company">
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="tel:622139711500" class="hubungi-detail" target="_blank">(021) 3971-1500</a><br>
                                        <a href="tel:623130001500" class="hubungi-detail" target="_blank">(031) 3000-1500</a>
                                    </li>

                                    <li>
                                    <i class="fab fa-whatsapp"></i>
                                        <a href="https://api.whatsapp.com/send?phone=628112635788" target="_blank">08112635788</a>
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
                                        <a href="https://www.instagram.com/bikin_website/" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.facebook.com/bikindotwebsite/" target="_blank"><i class="fab fa-facebook-square"></i></a>
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