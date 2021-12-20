<?php
/* Template Name: Klien */

get_header();
?>

    <!-----------------cover section--------------------->
    <section class="cover banner-portfolio">
        <div class="container header">
            <div class="row cover-page ">
                <div class="col-12 header-text">
                    <h2 class="title-section text-center" data-typer="Our Creative Projects with Clients Around The World"></h2>
                </div>
            </div>
        </div>
    </section>

    <!-----------------portfolio section 1--------------------->

    <section class="portfolio section-list-portfolio">
        <div class="container">
            
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
                <li class="col-md-6 col-client">
                    <div class="outer box anim1">
                        <?php if ( has_post_thumbnail() ) {
                            echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'img-thumbnail img-rounded'));
                            } else { ?>
                            <figure><img style="object-fit:cover;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>" /></figure>
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
       
    </section>
   <!-----------------footer section--------------------->

<?php
    get_footer();