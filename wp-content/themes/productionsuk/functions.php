<?php
/**
 * productionsuk functions and definitions
 *
 * @package productionsuk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'productionsuk_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function productionsuk_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on productionsuk, use a find and replace
	 * to change 'productionsuk' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'productionsuk', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'productionsuk' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'productionsuk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // productionsuk_setup
add_action( 'after_setup_theme', 'productionsuk_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function productionsuk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'productionsuk' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'productionsuk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function productionsuk_scripts() {
	// wp_enqueue_style( 'productionsuk-style', get_stylesheet_uri() );
  
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/styles/css/animate.css' );	
	wp_enqueue_style( 'generic-css', get_template_directory_uri() . '/styles/css/generic-skin.css' );
  wp_enqueue_style( 'ion', 'http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css' );
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'merriweather-font', 'http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300italic,300' );
  wp_enqueue_style( 'Roboto-font', 'http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' );
  wp_enqueue_style( 'jura-font', 'http://fonts.googleapis.com/css?family=Jura:400,600,500' );



	wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-1.11.2.js', array(), '', true );

	wp_enqueue_script( 'productionsuk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'productionsuk-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'productionsuk-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/scripts/libs/jquery.waypoints.js', array(), '', true );
	wp_enqueue_script( 'html-shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '', true );
	wp_enqueue_script( 'global', get_template_directory_uri() . '/scripts/global.js', array(jQuery), '', true );
  wp_enqueue_script( 'respond', '//oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'productionsuk_scripts' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_theme_support( 'post-thumbnails' ); 


function service_post() {

  $labels = array(
    'name'               => _x( 'Services', 'post type general name' ),
    'singular_name'      => _x( 'Service', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'service' ),
    'add_new_item'       => __( 'Add New Service' ),
    'edit_item'          => __( 'Edit Service' ),
    'new_item'           => __( 'New Service' ),
    'all_items'          => __( 'All Services' ),
    'view_item'          => __( 'View Service' ),
    'search_items'       => __( 'Search Services' ),
    'not_found'          => __( 'No Services found' ),
    'not_found_in_trash' => __( 'No Services found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds my services and service information',
    'public'        => true,
    'menu_icon'     => 'dashicons-media-video',
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor'),
    'has_archive'   => true,
  );
  register_post_type( 'service', $args );

  flush_rewrite_rules(); 
}

add_action( 'init', 'service_post' );


function project_post() {

  $labels = array(
    'name'               => _x( 'Project', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'project' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No Projects found' ),
    'not_found_in_trash' => __( 'No Projects found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Projects'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds my Projects and Project information',
    'public'        => true,
    'menu_icon'     => 'dashicons-clipboard',
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'  ),
    'has_archive'   => true,
  );
  register_post_type( 'Project', $args );

  flush_rewrite_rules(); 
}

add_action( 'init', 'project_post' );



add_action( 'add_meta_boxes', 'project_url' );

function project_url() {
    add_meta_box( 
        'project_url_box',
        __( 'Project url', 'myplugin_textdomain' ),
        'project_url_box_content',
        'project',
        'side',
        'high'
    );
}

function project_url_box_content( $post ) {

  wp_nonce_field( plugin_basename( __FILE__ ), 'project_url_box_content_nonce' );
  $meta = get_post_meta( get_the_ID(), 'project_url', true);

  echo '<label for="project_url"></label>';

  if ($meta != null) {

    echo '<input type="text" id="project_url" name="project_url" value="'. $meta .'" placeholder="Please add a youtube URL" />';

  } else {

    echo '<input type="text" id="project_url" name="project_url" placeholder="youtube URL" />';

  }

}

add_action( 'save_post', 'project_url_box_save' );


function project_url_box_save( $post_id ) {

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
  return;

  if ( !wp_verify_nonce( $_POST['project_url_box_content_nonce'], plugin_basename( __FILE__ ) ) )
  return;

  if ( 'page' == $_POST['portfolio'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
  }



  $project_url = $_POST['project_url'];

  update_post_meta( $post_id, 'project_url', $project_url );

}


function testimonial_post() {

  $labels = array(
    'name'               => _x( 'Testimonials', 'post type general name' ),
    'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'testimonial' ),
    'add_new_item'       => __( 'Add New Testimonial' ),
    'edit_item'          => __( 'Edit Testimonial' ),
    'new_item'           => __( 'New Testimonial' ),
    'all_items'          => __( 'All Testimonials' ),
    'view_item'          => __( 'View Testimonial' ),
    'search_items'       => __( 'Search Testimonials' ),
    'not_found'          => __( 'No Testimonials found' ),
    'not_found_in_trash' => __( 'No Testimonials found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Testimonials'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds my testimonials and testimonial information',
    'public'        => true,
    'menu_icon'     => 'dashicons-welcome-learn-more',
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'  ),
    'has_archive'   => true,
  );
  register_post_type( 'testimonial', $args );

  flush_rewrite_rules(); 
}

add_action( 'init', 'testimonial_post' );




require( get_template_directory() . '/theme-options.php' );

