<?php
/* Template Name: Templates v2 */
get_header();
?>

    <!-----------------cover section--------------------->
    <section class="templates-banner">
        <div class="container fade-anm show-on-scroll">
            <h1 class="title-section text-sm-left text-center anm-fade-right">Template apa yang Anda butuhkan?</h1>
            <div class="wrapper-search anm-fade-left">
                <input type="text" id="myInput" onkeyup="mySearch()" placeholder="Cari berdasarkan nama.." title="Type in a name">
                <button class="btn btn-serach" onclick="mySearch()"><i class="fas fa-search"></i> Cari</button>
            </div>
        </div>
        
    </section>


    <!-----------------templates section--------------------->

    <section class="templates-catalogue">
        <div id="wrap-template">
            <div class="container">
                <h2 class="title-section small-title-section text-left">Cari Berdasarkan Kategori</h2>
            </div>
            <div class="filter-cat">
                <div class="content">
                    <div class="wrapper-sidenav">
                        <a class="category_template selected" id="semua">SEMUA</a>
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
            </div>

            <div class="container">
                <div class="">
                    <?php 
                        // Set the arguments for the query
                        $args = array( 
                        'numberposts'		=> -1,
                        'post_type'		=> 'templates',
                        'orderby' 		=> 'date',
                        'order' 		=> 'ASC',
                        'taxonomy'      => 'category',
                        );

                        // Get the posts
                        $myposts = get_posts($args);

                        // If there are posts
                        if($myposts): 
                    ?>
                    
                    <div class="list-wrapper">
                        <div class="container templates-list">
                            <ul class="row" id="listing">   
                                <?php
                                    // Loop the posts
                                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                    <li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                        <a href="#" class="visibility-hidden"><?php echo get_the_title($post->ID); ?></a>
                                        <!-- Image -->
                                        <div class="outer"> 
                                            <?php if ( has_post_thumbnail() ) {
                                                echo get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'img-thumbnail img-rounded mb-0'));
                                            } else { ?>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>" class="img-thumbnail img-rounded mb-0">
                                            <?php } ?>
                                            <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?php echo get_permalink($mypost->ID); ?>" target="_blank">Preview</a>
                                        </div> 	
                                    
                                        <!-- Content -->
                                        <div class="wrapper px-md-3 px-2">
                                            <div class="template-name-price">
                                                <h3 class="align-left">
                                                    <?php echo get_the_title($post->ID); ?>
                                                </h3>
                                            </div>
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="wrapp-bottom-themes">
                                            <a class="btn demo-btn" href="<?php echo get_permalink($post->ID); ?>" target="_blank">Demo</a>
                                            <a class="btn chose-btn" href="<?=home_url('/pesan')?>">Pilih</a>
                                        </div>
                                    </li>

                                <?php endforeach; wp_reset_postdata(); ?>
                                <?php endif; ?>
                                <?php the_excerpt(); ?>
                            </ul>
                            
                            <div class="container load-more-button">
                                <button type="button" class="btn btn-pesan w-auto">Lihat Lebih Banyak</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php
    get_footer();