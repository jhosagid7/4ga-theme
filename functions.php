<?php
/**
 * My 4Geeks-Academy WordPress Theme funtions and definitions
 * 
 * @link http://url.com
 * 
 * @package WordPress
 * @subpackage 4ga-theme
 * @since 1.0.0
 * @version 1.0.0
 */

if(!function_exists('wp4ga_scripts')):
    function wp4ga_scripts(){
        wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js'); 
        wp_enqueue_style( 'google-fonts' );
        wp_enqueue_style( 'style',get_stylesheet_uri(), wp_get_theme()->get( 'Version' ));
        wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css' );

        wp_enqueue_script( 'popper_js', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '2.0.0', true );
        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/scripts.js', array('popper'), '4.0.0', true );
        wp_enqueue_script( 'scripts', get_template_directory_uri().'/scripts.js', array('bootstrap_js'), '1.0.0', true );
        
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
endif;

add_action( 'wp_enqueue_scripts', 'wp4ga_scripts');

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'custom-size', 220, 180 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode

    
}



function wp4ga_ejr_limite_extracto ($longitud) {
	return 10;
}
add_filter ('excerpt_length', 'wp4ga_ejr_limite_extracto', 999);

function wp4ga_ejr_nuevo_excerpt ($more) {
    global $post;
    return '<a href="'.get_permalink ($post -> ID).'"> Read more</a>';
    }
add_filter ('excerpt_more', 'wp4ga_ejr_nuevo_excerpt');



//Add widget
function wp4ga_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'right-widget',
            'name'          => __( 'Right Widget' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div class="card-body">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4><hr>'
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'wp4ga_register_sidebars' );

