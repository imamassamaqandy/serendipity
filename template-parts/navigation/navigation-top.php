<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<nav class="primary-navigation navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#serendipity-menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				}
				else { ?>

					<a class="navbar-brand site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			
					<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<?php else : ?>
				<p class="site-title"><?php bloginfo( 'name' ); ?></p>
				<?php
				endif; 
			} ?>	
			</a>
		</div>

		<div class="collapse navbar-collapse" id="serendipity-menu">
			<?php wp_nav_menu(
				array(
					'container' 		=> 	'menu-center',
					'depth'				=>	'5',
					'items_wrap' 		=> 	'<ul id="%1$s" class="%2$s">%3$s</ul>',
					'menu_class' 		=> 	'nav navbar-nav navbar-right',
					'theme_location' 	=> 	'primary',
					'walker'            =>	new serendipity_navwalker(),
					'fallback_cb'       =>	'serendipity_navwalker::fallback',
					)
				);
			?>
		</div>
	</div>
</nav><!-- #site-navigation -->