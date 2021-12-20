<?php
/* Template Name: Priview Theme */

get_header();
add_filter( 'the_title', function ($title) { return '';});
?>

	<!-----------------cover section--------------------->
    <section id="preview-themes" class="other-pages">
		<div class="container header">
		
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                    <div class="single-page-post-heading">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="content-here">
                        <?php  the_content();  ?>
                    </div>
                    <div class="comment-section-here">
                        <?php //comments_template(); ?>
                    </div>
                </div>

            <?php endwhile; ?>
            </div>
      
      </section>
<?php
get_footer();