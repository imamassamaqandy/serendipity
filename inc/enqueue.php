<?php
/**
 * Enqueue scripts and styles.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package serendipity
 */

 /**
  * Enqueue scripts and styles.
  */
 function serendipity_scripts() {
    // Add custom fonts, used in the main stylesheet.
 	wp_enqueue_style( 'twentyseventeen-fonts', serendipity_fonts_url(), array(), null );

 	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '', null );

    wp_enqueue_style( 'font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', '', null );

	wp_enqueue_style( 'serendipity-style', get_stylesheet_uri(), '', null );

    wp_enqueue_style( 'serendipity-font', 'https://fonts.googleapis.com/css?family=Satisfy', '', null );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), null, true );

 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
 		wp_enqueue_script( 'comment-reply' );
 	}
 }
 add_action( 'wp_enqueue_scripts', 'serendipity_scripts' );
