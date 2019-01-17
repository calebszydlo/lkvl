<?php

/*************************************************************/
/*  ENQUEUE SCRIPTS AND STYLES 								*/
/***********************************************************/
// for documentation and a list of scripts that are pre-registered by wordpress see https://developer.wordpress.org/reference/functions/wp_enqueue_script
// for a quick overview read this http://www.wpbeginner.com/wp-tutorials/how-to-properly-add-javascripts-and-styles-in-wordpress

function my_add_theme_scripts() {

  // deregister default scripts
  wp_deregister_script('jquery');
  wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '2.1.3');
  // local jquery for working offline
  //wp_enqueue_script('jquery', get_template_directory_uri() . '/lib/jquery/jquery-3.3.1.min.js', false, '3.3.1');
  wp_enqueue_script('jquery');

  // add jquery ui
  wp_enqueue_script('jqueryui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js', false, '1.11.4');
  // add local jquery ui for working offline
  //wp_enqueue_script('jqueryui', get_template_directory_uri() . '/lib/jquery/jquery-ui.min.js', false, '1.12.1');

  // add modernizer
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/lib/modernizr/modernizr.min.js', false, '2.7.0');

  // add recaptcha
  wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', false, '1.0');

  // add flexslider
  // wp_enqueue_script('flexslider-js', get_template_directory_uri() .'/lib/flexslider/jquery.flexslider-min.js', false, '2.6.0');

  // add fonts
  wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Bangers|Montserrat' );

  // compiled styles
  wp_enqueue_style( 'style', get_template_directory_uri().'/dist/css/style.css' );

  // fontawesome
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/lib/fonts/font-awesome-4.6.3/css/font-awesome.min.css' );

  // scripts
  wp_register_script( 'compiled-scripts', get_template_directory_uri() . '/dist/js/compiled.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script('compiled-scripts');

}
add_action( 'wp_enqueue_scripts', 'my_add_theme_scripts' );



if ( ! function_exists( 'luda_setup' ) ) :
/**
 * LUDA setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * @since LUDA 1.0
 */
function luda_setup() {

	// add_image_size('small', 370, 280, false);
	// add_image_size('related', 560, 310, true);

  /*************************************************************/
  /*  EDITOR STYLES 			 								*/
  /***********************************************************/
	add_editor_style( 'editor-style.css' );

  /*************************************************************/
  /*  REGISTER MENUS 			 								*/
  /***********************************************************/
  register_nav_menus(
    array(
      'global' => __( 'Main Menu' ),
      'footer' => __( 'Footer Menu' ),
    )
  );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	/*
	 * Enable featured image support.
	 * See http://codex.wordpress.org/Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
endif; // witb_setup
add_action( 'after_setup_theme', 'LUDA_setup' );


/*************************************************************/
/*  ADD THE SITE TITLE 			 								*/
/***********************************************************/
/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since LUDA 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function luda_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'witb' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'luda_wp_title', 10, 2 );

// Add the library

require_once('functions-library.php');
