<?php
/* Template Name: Templates */
get_header();
?>

    <!-----------------cover section--------------------->
    <section class="cover">
        <div class="container header">
            <div class="row cover-page">
                <div class="col-md-7 header-left">
                    <h2 class="promo-title">TEMPLATES</h2>
                    <p class="cover-subtitle">
                        <a href="<?=home_url('/')?>">BIKIN.WEBSITE</a> memiliki berbagai pilihan template keren yang pas buat kamu. Didesain simple dan tanpa
                        ribet untuk berbagai keperluan seperti blog, bisnis, desainer, influencer, dsb.
                    </p>
                </div>

                <div class="col-md-5 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template-page/canvas-banner.png" class="cover-picture img-fluid" alt="canvas-banner">
                </div>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/klien-page/test.png" class="bottom-img wave-cover img-fluid" alt="test">
    </section>


    <!-----------------templates section--------------------->

    <section class="templates-catalogue">

        <div class="container">
            <div class="row">
                <?php 
                    // Set the arguments for the query
                    $args = array( 
                    'numberposts'		=> -1, // -1 is for all
                    'post_type'		=> 'templates', // or 'post', 'page'
                    'orderby' 		=> 'date', // or 'date', 'rand'
                    'order' 		=> 'ASC', // or 'DESC'
                    'taxonomy'      => 'category',
                    );

                    // Get the posts
                    $myposts = get_posts($args);

                    // If there are posts
                    if($myposts): ?>
                <div class="col-lg-3 sidebar">
                    <div class="wrapper-sidenav">
                    <!-- Template navigation -->
                        <a class="category_template" id="semua">SEMUA</a>
                        <a class="category_template" id="gratis">GRATIS</a>
                        <a class="category_template" id="berbayar">BERBAYAR</a>
                        <a class="category_template" id="baru">BARU</a>
                        <a class="category_template" id="popular">POPULAR</a>
                        <a class="category_template" id="bisnis">BISNIS</a>
                        <a class="category_template" id="event">EVENT</a>
                        <a class="category_template" id="fashion">FASHION</a>
                        <a class="category_template" id="fotografi">FOTOGRAFI</a>
                        <a class="category_template" id="gaya-hidup">GAYA HIDUP</a>
                        <a class="category_template" id="kesehatan">KESEHATAN</a>
                        <a class="category_template" id="makanan">MAKANAN</a>
                        <a class="category_template" id="pendidikan">PENDIDIKAN</a>
                        <a class="category_template" id="portfolio">PORTFOLIO</a>
                        <a class="category_template" id="seni-desain">SENI & DESAIN</a>
                        <a class="category_template" id="simpel">SIMPEL</a>
                        <a class="category_template" id="teknologi">TEKNOLOGI</a>
                    </div>
                </div>

                <div class="col-lg-9 list-wrapper">
                    <div class="container templates-list">
                        <div class="row">   
                            <?php
                                // Loop the posts
                                
                                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                    <!-- Image -->
                                    <div class="outer"> 
                                        <?php if ( has_post_thumbnail() ) {
                                            echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'img-thumbnail img-rounded'));
                                        } else { ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>">
                                        <?php } ?>
                                        <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?php echo get_permalink($mypost->ID); ?>">Preview Template</a>
                                    </div> 	
                                
                                    <!-- Content -->
                                    <div class="template-name-price">
                                        <h3 class="align-left">
                                            <?php echo get_the_title($post->ID); ?>
                                        </h3>
                                        <h3 class="align-right gratis">
                                            <?php echo get_post_meta($post->ID, 'price', true); ?>
                                        </h3>
                                    </div>
                                    <div class="wrapper">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>

                            <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>

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