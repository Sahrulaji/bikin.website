<?php
/* Template Name: Templates v2 backup*/
get_header('bluev2');
?>

    <!-----------------cover section--------------------->
    <section class="templates-banner">
        <div class="container">
            <h2 class="title-section text-left">Template apa yang Anda butuhkan?</h2>
            <div class="wrapper-search">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari berdasarkan nama.." title="Type in a name">
                <button class="btn btn-serach"><i class="fas fa-search"></i> Cari</button>
            </div>
        </div>
        
    </section>


    <!-----------------templates section--------------------->

    <section class="templates-catalogue">
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
            <div class="wrap-content-themes">
                <div class="container templates-list">
                    
                        <?php 
                            $the_query = new WP_Query( array('posts_per_page'=>6,
                            'post_type'		=> 'templates', 
                            'orderby' 		=> 'date', 
                            'order' 		=> 'ASC',
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                    ); 
                        ?>
                        <div class="row">
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                    <div class="outer"> 
                                        <?php if ( has_post_thumbnail() ) {
                                            echo get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'img-thumbnail img-rounded mb-0'));
                                        } else { ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>" class="img-thumbnail img-rounded mb-0">
                                        <?php } ?>
                                        <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?php echo get_permalink($post->ID); ?>">Preview Template</a>
                                    </div>
                                    <div class="template-name-price">
                                        <h3 class="align-left">
                                            <?php echo get_the_title($post->ID); ?>
                                        </h3>
                                    </div>
                                    <div class="file-description"><?php the_excerpt(); ?></div>
                                    <div class="wrapp-bottom-themes">
                                        <a class="demo-btn" href="<?php echo get_permalink($post->ID); ?>">Demo</a>
                                        <a class="chose-btn" href="#">Pilih</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php
                            $big = 999999999; // need an unlikely integer
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'prev_text' => '<span> < </span>',
                                'next_text' => '<span> > </span>',
                                'total' => $the_query->max_num_pages
                            ) );

                            wp_reset_postdata(); 
                        ?>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <?php
    get_footer('footerv2');