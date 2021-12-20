<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<style>
@media(min-width:768px){
	.row-eq-height{
		display:-webkit-box;
		display:-webkit-flex;
		display:-ms-flexbox;
		display:flex;
		flex-wrap:wrap
	}
	.row-eq-height>[class*=col-]{
		display:flex;
		flex-direction:column
	}
}
.heading-title {
    color: #212529;
	text-align: center;
}
.heading-title a {
    text-decoration: none;
    color: #212529;
}
.nav-links {
    display: none;
}
.post-article{
	margin-bottom:30px;
}
section#preview-themes {
    margin-bottom: 70px;
}
textarea#comment {
    width: 100%;
}
form#commentform #email,
form#commentform #author,
form#commentform #url,
{
    width: 100%;
}
input#author {
    width: 100%;
}
input#email {
    width: 100%;
}
input#url {
    width: 100%;
}
.submit{
	color: #ffff;
    font-weight: lighter;
    background: #04002d;
    border: 2px solid #04002d;
    box-sizing: border-box;
    border-radius: 8px;
    padding: 10px;
    margin-bottom: 32px;
    transition: ease-in-out .3s;
}
.submit:hover , .submit.focus{
	background: #fb8700;
    border: 2px solid #fb8700;
    box-sizing: border-box;
}
footer.entry-footer span {
	margin-top:20px;
    margin-right: 5px;
}
.entry-footer{
	color: #fb8700;
    text-decoration: none;
    background-color: transparent;
}
.entry-footer a {
    color: #000;
    text-decoration: none;
	margin-bottom:30px;
}
h2.comments-title {
    color: #fb8700;
}
section main {
	padding-top: 70px;
}
</style>
<div id="preview-themes" class="detail-blog" >
	<div class="container">
		<div class="row row-eq-height">
			<div class="<?= (( 'custom-side-bar' ))?'col-md-9 col-lg-9 col-xs-12':'col-md-12 col-lg-12';?>">
			
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>
					<header class="entry-header outer">
					<a class="mybuttonoverlap btn btn-outline-danger white-fill" href="<?php echo get_post_meta($post->ID, 'url', true); ?>" target="_blank" >Kunjungi Website</a>
					<?php if ( has_post_thumbnail() ) {
													echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'img-thumbnail img-rounded img-responsive'));
					} else { ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="<?php the_title(); ?>">
					<?php } ?>
					</header>
					<div class="template-name-price" style="margin-bottom:30px;" >
						<h2 class="heading-title"><?= get_the_title($post->ID); ?></h2>
					</div>
					<div class="entry-content">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
					
						<?php twentynineteen_entry_footer(); ?>
					</footer><!-- .entry-footer -->
					
					<?php if ( ! is_singular( 'attachment' ) ) : ?>
						<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
					<?php endif; ?>
			
				</article><!-- #post-<?php the_ID(); ?> -->
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

		</div>
	</div>

</div>
