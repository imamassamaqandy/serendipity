<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package serendipity
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="//gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

	<header id="header" class="site-header">
		<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php echo is_front_page() ? 'container-fluid' : 'container' ?>">
		<div class="row">
