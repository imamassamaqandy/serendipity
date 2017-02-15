<?php
/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Serendipity 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */

function serendipity_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'serendipity_front_page_template' );
 
function serendipity_change_logo_class( $html ) {
	$html = str_replace( 'custom-logo-link', 'navbar-brand' , $html );
	return $html;
}
add_filter( 'get_custom_logo', 'serendipity_change_logo_class' );