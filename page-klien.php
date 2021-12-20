<?php
/* Template Name: Klien */

get_header();
?>

    <!-----------------cover section--------------------->
    <section class="cover">
        <div class="container header">
            <div class="row cover-page">
                <div class="col-md-7 header-left">
                    <h2 class="promo-title">KLIEN</h2>
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

    <section class="portfolio">
        <div class="container">

            <div class="col-md-12">
                <h2 class="title-section">IKUTI JEJAK SUKSES MEREKA</h2>
                <p class="cover-subtitle"><a href="<?=home_url('/')?>">BIKIN.WEB</a> telah bekerjasama dengan berbagai macam bidang usaha yang tersebar di seluruh Indonesia. Temukan inspirasi website dari mereka yang telah sukses dengan bantuan jasa kami.</p>
            </div>

            <ul id="listing" class="row client-list">
                <?php 
                    // Set the arguments for the query
                    $args = array( 
                    'numberposts'		=> -1, // -1 is for all
                    'post_type'		=> 'klien', // or 'post', 'page'
                    'orderby' 		=> 'date', // or 'date', 'rand'
                    'order' 		=> 'DESC', // or 'ASC'
                    'taxonomy'      => 'category',
                    );

                    // Get the posts
                    $myposts = get_posts($args);

                    // If there are posts
                    if($myposts): 
                ?>
                <?php
                    // Loop the posts
                    foreach ( $myposts as $post ) : setup_postdata( $post ); 
                ?>
                <li class="col-md-4 col-client">
                    <div class="outer">
                        <?php if ( has_post_thumbnail() ) {
                            echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'img-thumbnail img-rounded'));
                            } else { ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>" />
                        <?php } ?>
                        <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?php echo get_post_meta($post->ID, 'url', true); ?>" target="_blank" >Kunjungi Website</a>
                    </div>

                    <h6 class="text-center client-name"><?php echo get_the_title(); ?></h6>
                    <div class="card-text client-website"><?php the_excerpt(); ?></div>
                </li>
                <?php endforeach; wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="container load-more-button">
            <button type="button" class="btn btn-outline-danger white-fill" data-toggle="collapse"
                data-target="#portfolio2">Lihat Lebih Lengkap</button>
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