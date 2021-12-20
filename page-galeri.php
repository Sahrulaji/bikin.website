<?php
/* Template Name: Galeri */

get_header();
?>

    <!-----------------cover section--------------------->
    <section class="cover">
        <div class="container header">
            <div class="row cover-page">
                <div class="col-md-7 header-left">
                    <h2 class="promo-title">Galeri</h2>
                    <p class="cover-subtitle">
                        <a href="<?=home_url('/')?>">BIKIN.WEB</a> bekerja bersama berbagai macam wirausaha dan tokoh tokoh ternama yang tersebar di
                        seluruh Indonesia. Temukan inspirasi dari berbagai brand yang telah menemukan sukses dengan
                        bantuan jasa kami.
                    </p>
                </div>

                <div class="col-md-5 text-center">

                </div>
            </div>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/klien-page/klien.png" class="cover-picture img-fluid" alt="handcropped">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/klien-page/test.png" class="bottom-img wave-cover img-fluid" alt="test">
    </section>

    <!-----------------portfolio section 1--------------------->

    <section class="galery">
        <div class="container">
            <div class="col-md-12">
                <?php
                    echo do_shortcode( '[ngg_images gallery_ids="1" display_type="photocrati-nextgen_basic_thumbnails" number_of_columns="3"]' );
                ?>
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
    
   <!-----------------footer section--------------------->

<?php
    get_footer();