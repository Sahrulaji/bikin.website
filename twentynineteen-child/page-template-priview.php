<?php
/* Template Name: Priview Theme */

get_header();
add_filter( 'the_title', function ($title) { return '';});
?>

	<!-----------------cover section--------------------->
    <section id="preview-themes">
		<div class="container header">
		
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
      
	</section>
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature-page/curve-blue.png" class="bottom-img">
<?php
get_footer();
