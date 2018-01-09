<?php

// require get_template_directory() . '/inc/cleanup.php':

function medical_praxis_script_enqueue() {

  //wp_enqueue_style('customstyle', get_template_directory_uri() . '/scss/medical-praxis.css' , array(), '1.0.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/medical.css' , array(), '1.0.0', 'all');
  wp_enqueue_style('960', get_template_directory_uri() . '/css/960.css' , array(), '1.0.0', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css' , array(), 'all');
  wp_enqueue_style('text', get_template_directory_uri() . '/css/text.css' , array(), '1.0.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/font-awesome.min.css' , array(), '1.0.0', 'all');

  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/medical.js');
}

add_action('wp_enqueue_scripts', 'medical_praxis_script_enqueue');

function medical_praxis_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('haupt', 'header_nav');
	register_nav_menu('secondary', 'footer_nav');
}


add_action('init', 'medical_praxis_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails' );
add_theme_support('post-formats', array('aside','image','video'));

// --------------------- Widgets-----------------------
function medical_praxis_widgets_init() {
    //   header-msg------
    register_sidebar( array(
        'name' => __( 'header-msg', 'theme-slug' ),
        'id' => 'header-msg',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="grid_8 widget %2$s">',
	      'after_widget'  => '</div>',
	       'before_title'  => '<h3 class="widgettitle">',
	        'after_title'   => '</h3>',
    ) );
    //   PRAXIS------
    register_sidebar( array(
        'name' => __( 'praxis', 'theme-slug' ),
        'id' => 'praxis',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="grid_4 widget %2$s">',
	      'after_widget'  => '</div>',
	       'before_title'  => '<h3 class="widgettitle">',
	        'after_title'   => '</h3>',
    ) );
      //   Willkommen------
    register_sidebar( array(
        'name' => __( 'willkommen', 'theme-slug' ),
        'id' => 'willkommen',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	      'after_widget'  => '</div>',
	       'before_title'  => '<h3 class="widgettitle">',
	        'after_title'   => '</h3>',
    ) );
    //   OUR TEAM------
    register_sidebar( array(
        'name' => __( 'our-team', 'theme-slug' ),
        'id' => '-our-team',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class=" grid_12 widget %2$s">',
	      'after_widget'  => '</div>',
	       'before_title'  => '<h3 class="widgettitle">',
	        'after_title'   => '</h3>',
    ) );
    // //   LEISTUNGEN------
    // register_sidebar( array(
    //     'name' => __( 'leistungen', 'theme-slug' ),
    //     'id' => 'leistungen',
    //     'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    //     'before_widget' => '<div id="%1$s" class="grid_12 widget %2$s">',
	//       'after_widget'  => '</div>',
	//        'before_title'  => '<h3 class="widgettitle">',
	//         'after_title'   => '</h3>',
    // ) );
    //   CCONTACT------
    register_sidebar( array(
        'name' => __( 'contact', 'theme-slug' ),
        'id' => 'contact',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="grid_4 widget %2$s">',
	      'after_widget'  => '</div>',
	       'before_title'  => '<h3 class="widgettitle">',
	        'after_title'   => '</h3>',
    ) );




}

add_action( 'widgets_init', 'medical_praxis_widgets_init' );


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'mehr...', 'textdomain' )
    );
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more');
