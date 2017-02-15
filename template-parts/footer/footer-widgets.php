<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Kreasi_WP
 * @subpackage Serendipity
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' )  || is_active_sidebar( 'sidebar-4' ) ) :
?>

	<aside id="footer-widgets" class="widget-area container" role="complementary">
		<div class="row">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1 col-md-4">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2 col-md-4">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php } 
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
			<div class="widget-column footer-widget-3 col-md-4">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		<?php } ?>
		</div>
	</aside><!-- .widget-area -->

<?php endif; ?>
