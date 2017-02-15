<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kreasi_WP
 * @subpackage Serendipity
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area col-md-8">
	<main id="main" class="site-main" role="main">

		<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'serendipity' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'serendipity' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'serendipity' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'serendipity' ) . '</span> <span class="nav-title">%title</span>',
				) );

			endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>

<?php get_footer();
