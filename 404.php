<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Kreasi_WP
 * @subpackage Serendipity
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area col-md-12">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'serendipity' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'serendipity' ); ?></p>

				<?php get_search_form(); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();