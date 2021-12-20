<?php
/* Template Name: Templates */
get_header();
?>
<style>

.heading-title {
    color: #212529;
}
.heading-title a {
    text-decoration: none;
    color: #212529;
}
section#preview-themes {
    margin-bottom: 70px;
}
.navigation post-navigation{
	display:none; 
}
textarea#comment {
    width: 100%;
}
form#commentform #email ,
form#commentform #author ,
form#commentform #url ,
{
    width: 100%;
}
.row.cover-page {
    margin-bottom: 195px;
}
</style>
    <!-----------------cover section--------------------->
    <section class="cover">
        <div class="container header">
            <div class="row cover-page">
                <div class="col-md-7 header-left">
                    <h2 class="promo-title"><?php the_title(); ?></h2>
                  <!--  <p class="cover-subtitle">
                        <a href="<?=home_url('/')?>">BIKIN.WEBSITE</a> memiliki berbagai pilihan template keren yang pas buat kamu. Didesain simple dan tanpa
                        ribet untuk berbagai keperluan seperti blog, bisnis, desainer, influencer, dsb.
                    </p> -->
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
            <div class="row row-eq-height">
				<div class="<?= (( 'custom-side-bar' ))?'col-md-9 col-sm-9 col-lg-9 col-xs-12':'col-md-12 col-lg-12';?>">
			
                <?php 
                    // Set the arguments for the query
                    $args = array( 
                    'numberposts'		=> -1, // -1 is for all
                    'post_type'		=> 'post', // or 'post', 'page'
                    'orderby' 		=> 'date', // or 'date', 'rand'
                    'order' 		=> 'ASC', // or 'DESC'
                    'taxonomy'      => 'category',
                    );

                    // Get the posts
                    $myposts = get_posts($args);

                    // If there are posts
                    if($myposts): ?>
                

				
                    <div class="templates-list">
                        <div class="row row-eq-height">   
                            <?php
                                // Loop the posts
                                $autoColPost=(is_active_sidebar( 'custom-side-bar' ))?'col-md-6 col-xs-12':'col-md-4 col-xs-12';
								
                                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                <div <?php post_class($autoColPost); ?> id="post-<?php the_ID(); ?>">
                                    <!-- Image -->
                                    <div class="outer"> 
                                        <?php if ( has_post_thumbnail() ) {
                                            echo get_the_post_thumbnail( $post->ID, 'post-thumbnail', array('class' => 'img-thumbnail img-rounded img-responsive'));
                                        } else { ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>">
                                        <?php } ?>
                                        <a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?php echo get_permalink($mypost->ID); ?>">Read More</a>
                                    </div> 	
                                
                                    <!-- Content -->
                                    <div class="template-name-price">
                                        <h3 class="heading-title">
											<a title="<?= get_the_title($post->ID) ?>" href="<?=  get_permalink($mypost->ID); ?>">
                                            <?php echo get_the_title($post->ID); ?>
											</a>
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
				<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
				<div class="col-md-3 col-lg-3 col-xs-12">
					<div class="sidebar-right">
						<div class="content-widget">
						<?php dynamic_sidebar( 'custom-side-bar' ); ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
			</div><!-- row-->
        </div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/curve-blue.png" class="bottom-img" alt="curve-blue">
    </section>


    <!-----------------bikin button section--------------------->
 <!--   <section id="bikin-button-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div>
                        <a href="<?=home_url('/harga')?>" class="btn btn-outline-danger btn-mulai-footer">Bikin Website Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-----------------footer section--------------------->

    <?php
    get_footer();