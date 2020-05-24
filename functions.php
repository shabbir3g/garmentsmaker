<?php
/**
 * garmentsmaker functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package garmentsmaker
 */

if ( ! function_exists( 'ready_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ready_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on garmentsmaker, use a find and replace
		 * to change 'garmentsmaker' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'garmentsmaker', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' =>  'Main Menu',
		) );
		
		function default_menu(){
			
			echo '<ul class="clearfix">';
			echo '<li class="active"><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}


		function is_blog () {
		    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		
		
		
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'Portfolio', 'garmentsmaker' ),
				'singular_name'      => __( 'Portfolio', 'garmentsmaker' ),
				'menu_name'          => __( 'Portfolio', 'garmentsmaker' ),
				'name_admin_bar'     => __( 'Portfolio', 'garmentsmaker' ),
				'add_new'            => __( 'Add Portfolio', 'garmentsmaker' ),
				'add_new_item'       => __( 'Add New Portfolio', 'garmentsmaker' ),
				'new_item'           => __( 'New Portfolio', 'garmentsmaker' ),
				'edit_item'          => __( 'Edit Portfolio', 'garmentsmaker' ),
				'view_item'          => __( 'View Portfolio', 'garmentsmaker' ),
				'all_items'          => __( 'All Portfolio', 'garmentsmaker' ),
				'search_items'       => __( 'Search Portfolio', 'garmentsmaker' ),
				'parent_item_colon'  => __( 'Parent Portfolio:', 'garmentsmaker' ),
				'not_found'          => __( 'No Portfolio found.', 'garmentsmaker' ),
				'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'garmentsmaker' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'garmentsmaker' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'Portfolio' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-format-gallery',
				'supports'           => array( 'title', 'editor', 'thumbnail' )
			);

			register_post_type( 'portfolio-post', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => _x( 'News Category', 'garmentsmaker' ),
				'singular_name'     => _x( 'News Category', 'garmentsmaker' ),
				'search_items'      => __( 'Search Category', 'garmentsmaker' ),
				'all_items'         => __( 'All Categories', 'garmentsmaker' ),
				'parent_item'       => __( 'Parent Category', 'garmentsmaker' ),
				'parent_item_colon' => __( 'Parent Category:', 'garmentsmaker' ),
				'edit_item'         => __( 'Edit Category', 'garmentsmaker' ),
				'update_item'       => __( 'Update Category', 'garmentsmaker' ),
				'add_new_item'      => __( 'Add New Category', 'garmentsmaker' ),
				'new_item_name'     => __( 'New Category Name', 'garmentsmaker' ),
				'menu_name'         => __( 'Category', 'garmentsmaker' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'news-category' ),
			);

			register_taxonomy( 'port-category', array( 'portfolio-post' ), $args );

		 
	
	}
endif;
add_action( 'after_setup_theme', 'ready_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ready_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'garmentsmaker' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'garmentsmaker' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ready_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function ready_scripts() {
	
  
	wp_enqueue_style( 'garmentsmaker-styles', get_template_directory_uri().'/css/styles.css' );
	wp_enqueue_style( 'garmentsmaker-bootstrap', get_template_directory_uri().'/css/bootstrap-override.css' );
	wp_enqueue_style( 'garmentsmaker-font-awesome', get_template_directory_uri().'/css/font-awesome/font-awesome.css' );
	wp_enqueue_style( 'garmentsmaker-awesome-ie7', get_template_directory_uri().'/css/font-awesome/font-awesome-ie7.min.css' );
	wp_enqueue_style( 'garmentsmaker-flexslider', get_template_directory_uri().'/css/flexslider.css' );
	wp_enqueue_style( 'garmentsmaker-style', get_stylesheet_uri() );
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'garmentsmaker-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'garmentsmaker-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'garmentsmaker-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '', true );
	wp_enqueue_script( 'garmentsmaker-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'ready_scripts' );


require get_template_directory() . '/inc/shortcode/sample.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/tgm/example.php';





