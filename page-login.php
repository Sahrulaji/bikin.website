<?php
/* Template Name: Login */

get_header('blue');
?>
    
    <!-----------------login form--------------------->
    <section id="login-form">
        <div class="container-fluid bg d-flex justify-content-center align-items-center">
            
            <div class="col-12 col-sm-6 col-md-6">
                <img class="backdrop topleft img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/login-page/Rectangle.png" alt="rectangle">

                <!-- <form class="form-container">
                    <h1 class="text-center my-3">LOG IN</h1>
                    <div class="col-lg-8 col-md-10 col-12 d-block mx-auto px-0">

                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit"
                            class="btn btn-outline-danger no-outline btn-block submit">Submit</button>
                        <a><small>Lupa Password?</small></a>

                        <button type="submit" class="btn btn-outline-danger no-outline btn-block">Buat Akun Baru</button>

                    </div>
                </form> -->
                <!-- login form -->
                <div class="form-container">
                    <?php
                        echo do_shortcode('[wppb-login redirect_url='. home_url("/my-account") .']');
                        
                    ?>
                    <!-- login form -->
                    <?php if ( is_user_logged_in() ) { ?>
                        
                    <?php }else{ ?>
                        <a href="<?=home_url('/lost-password')?>" class="mb-2 d-inline-block">Lupa Password</a>
                        <a href="<?=home_url('/registration')?>" class="btn btn-outline-danger no-outline btn-block">Buat Akun Baru</a>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </section>
     <!-----------------footer section--------------------->
<?php
    get_footer();