<?php
/**
 * Template Name: Map Header
 * This is the template that is used for the contact page/section
 * It is a page with additional controls for the Google Maps section
 */

global $post;

//some global variables that we use in our page sections
$is_gmap                = false;
$footer_needs_big_waves = false;
$page_section_idx       = 0;

get_header();

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/header', 'page' );

	$classes      = "article--page  article--main";
	$border_style = get_post_meta( rosa::lang_page_id( get_the_ID() ), rosa::prefix() . 'gmap_border_style', true );
	if ( ! empty( $border_style ) ) {
		$classes .= ' border-' . $border_style;
	}

	if ( ! empty( $post->post_content ) ) : ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>

			<section class="article__content">
				<div class="container">
					<section class="page__content  js-post-gallery  cf">
						<?php the_content(); ?>
					</section>
				</div>
			</section>
		</article>

	<?php endif;

	get_template_part( 'template-parts/subpages' );

	//comments
	if ( comments_open() || '0' != get_comments_number() ) : ?>
		<div class="container">
			<?php comments_template(); ?>
		</div><!-- .container -->
	<?php endif;
endwhile;

get_footer();
