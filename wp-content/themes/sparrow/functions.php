<?php

require_once __DIR__.'/inc/carbon-fields/carbon-fields.php';

if ( ! function_exists( 'sparrow_setup' ) ) :
	function sparrow_setup() {
		load_theme_textdomain( 'sparrow', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => 'Меню в шапке',
			'header-footer' => 'Меню в футере',
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sparrow_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sparrow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sparrow_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sparrow_content_width', 640 );
}
add_action( 'after_setup_theme', 'sparrow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sparrow_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar right',
		'id'            => 'sidebar_right',
		'description'   => esc_html__( 'Add widgets here.', 'sparrow' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'sparrow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sparrow_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style('sparrow-style', get_stylesheet_directory_uri().'/assets/css/default.css');
	wp_enqueue_style('sparrow-layout-style', get_stylesheet_directory_uri().'/assets/css/layout.css');
	wp_enqueue_style('sparrow-media-queries-style', get_stylesheet_directory_uri().'/assets/css/media-queries.css');


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('jquery.modernizr', get_stylesheet_directory_uri().'/assets/js/modernizr.js', ['jquery'], null, true);
	wp_enqueue_script('jquery.jquery-migrate-1.2.1.min', get_stylesheet_directory_uri().'/assets/js/jquery-migrate-1.2.1.min.js', ['jquery'], null, true);
	wp_enqueue_script('jquery.flexslider', get_stylesheet_directory_uri().'/assets/js/jquery.flexslider.js', ['jquery'], null, true);
	wp_enqueue_script('jquery.doubletaptogo', get_stylesheet_directory_uri().'/assets/js/doubletaptogo.js', ['jquery'], null, true);
	wp_enqueue_script('jquery.init', get_stylesheet_directory_uri().'/assets/js/init.js', ['jquery'], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sparrow_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function wpforo_search_form( $html ) {

        $html = str_replace( 'placeholder', 'placeholder="Search here..." ', $html );

        return $html;
}
add_filter( 'get_search_form', 'wpforo_search_form' );

