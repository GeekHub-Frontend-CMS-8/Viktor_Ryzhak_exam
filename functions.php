<?php
/**
 * exam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package exam
 */

if ( ! function_exists( 'exam_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function exam_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on exam, use a find and replace
		 * to change 'exam' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'exam', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'exam' ),
		) );

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'exam_custom_background_args', array(
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
add_action( 'after_setup_theme', 'exam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function exam_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'exam_content_width', 640 );
}
add_action( 'after_setup_theme', 'exam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'exam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'exam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'exam_widgets_init' );



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



// *** Add function ***

// *** Add show admin bar ***
add_filter('show_admin_bar', '__return_false');


// *** Add style & script ***




/**
 * Enqueue scripts and styles.
 */
    define('Q_THEME_ROOT', get_template_directory_uri());
    define('Q_CSS_DIR', Q_THEME_ROOT . '/css');
    define('Q_JS_DIR', Q_THEME_ROOT . '/js');
    define('Q_IMG_DIR', Q_THEME_ROOT . '/img');
    define('Q_SLICK_DIR', Q_THEME_ROOT . '/slick');

    add_action( 'wp_enqueue_scripts', function(){
        wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array('reset'));
        wp_enqueue_style( 'awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
        wp_enqueue_style( 'googlfonts', 'https://fonts.googleapis.com/css?family=Nunito|Playfair+Display|Poppins:300,400,500');
        wp_enqueue_style( 'reset', Q_CSS_DIR . '/reset.min.css');
        wp_enqueue_style( 'exam-style', get_stylesheet_uri(), array('reset'));
        wp_enqueue_style( 'index', Q_CSS_DIR . '/index.min.css', array('reset'));
        wp_enqueue_style( 'slick', Q_SLICK_DIR . '/slick.css', array('reset'));
        wp_enqueue_style( 'slick-theme', Q_SLICK_DIR . '/slick-theme.css', array('reset'));

        wp_enqueue_script( 'customize', Q_JS_DIR . '/customizer.min.js', array('jquery'));
        wp_enqueue_script( 'exam-navigation', Q_JS_DIR . '/navigation.min.js', array('jquery'));
        wp_enqueue_script( 'exam-skip-link-focus-fix', Q_JS_DIR . '/skip-link-focus-fix.min.js', array('jquery'));





        wp_deregister_script('jquery');
        wp_enqueue_script( 'jquery', Q_JS_DIR . '/jquery-3.1.1.min.js', array(), NULL, 'in_footer');
        wp_enqueue_script( 'slick', Q_SLICK_DIR. '/slick.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'imagesloaded', Q_JS_DIR . '/imagesloaded.pkgd.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), NULL, 'in_footer');
//        wp_enqueue_script( 'akad-masonry-blog', Q_JS_DIR . '/masonry-blog.js', array('jquery'), NULL, 'in_footer');
//        wp_enqueue_script( 'akad-masonry-foto', Q_JS_DIR . '/masonry-foto.js', array(), NULL, 'in_footer');

        wp_enqueue_script( 'masonry-js', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array('jquery'), NULL, 'in_footer');
        wp_enqueue_script( 'functions', Q_JS_DIR . '/functions.min.js', array('jquery'), NULL, 'in_footer');

        //        wp_enqueue_style( 'theme', get_stylesheet_uri() );
        //        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    });





// *** Add menus ***

add_theme_support('menu');
function create_post_type() {
    register_post_type( 'acme_product',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

