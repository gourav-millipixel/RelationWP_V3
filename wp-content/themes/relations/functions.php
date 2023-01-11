<?php
/**
 * Relations functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Relations
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function relations_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Relations, use a find and replace
		* to change 'relations' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'relations', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'relations' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'relations_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'relations_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function relations_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'relations_content_width', 640 );
}
add_action( 'after_setup_theme', 'relations_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function relations_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'relations' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'relations' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'relations_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function relations_scripts() {
	wp_enqueue_style( 'relations-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'relations-style', 'rtl', 'replace' );

	wp_enqueue_script( 'relations-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'relations_scripts' );

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

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}


function faqs_sec(){
	$faq_section = get_field('faq_section', 'option');
	$faqs = $faq_section['faqs'];
	$i = 0;
	$out = '<div class="row mt-120">'.
	$out .= '<div class="col-lg-12 text-center"><h1 class="mb-12 gray-span">'.$faq_section['title'].'</h1>';
	$out .= '<div class="row"><div class="col-lg-6 mx-auto text-center my-4"><p class="pb-2 h4 text-gray-200">'.$faq_section['description'].'</p></div></div></div>';
	$out .= '<div class="col-lg-8 mx-auto"><div class="accordion planAccordian" id="accordionExample">';
	foreach( $faqs as $faq ) {
		$title = $faq['title'];
		$description = $faq['description'];
		$i++;
		$exp = "false"; 
		$btnClass = "accordion-button collapsed";
		$clapClass = "accordion-collapse collapse";
		if($i == 1) {
			$exp = "true"; 
			$btnClass = "accordion-button";
			$clapClass = "accordion-collapse collapse show";
		}
		$out .= '<div class="accordion-item"><h2 class="accordion-header" id="heading-'.$i.'">';
		$out .='<button class="'.$btnClass.'" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-'.$i.'"
		aria-expanded="'.$exp.'" aria-controls="collapse-'.$i.'"><h5 class="text-base-200 font-bold">'.$title.'</h5></button>';
		$out .='</h2>';
		$out .='<div id="collapse-'.$i.'" class="'.$clapClass.'" aria-labelledby="heading-'.$i.'" data-bs-parent="#accordionExample" >';
		$out .='<div class="accordion-body text-md font-normal text-gray-200">'.$description.'</div>';
		$out .='</div></div>';

}
$out .= '</div></div>';
$out .= '<div class="text-center mt-5">';
$out .= ' <a href="'.$faq_section['action']['link'].'" class="btn-primary btn-sm">'.$faq_section['action']['title'].'</a>';
$out .= '</div>';
$out .= '</div>';
return $out;
}
add_shortcode('faqs', 'faqs_sec');

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "";
        the_category(' &bull; ');
            if (is_single()) {
                echo " ";
                the_title();
            }
    } elseif (is_page()) {
        echo "";
        echo the_title();
    } elseif (is_search()) {
        echo "Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}