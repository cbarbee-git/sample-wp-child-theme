<?php
/**
 * Sydney child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'sydney_child_enqueue' );
function sydney_child_enqueue() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* ADD YOUR CUSTOM FUNCTIONS BELOW */

/**
 * Include custom shortcode here.
 */
include_once ('custom-shortcodes.php');

/**
 * CHILD - Theme dashboard.
 */
function chad_sydney_dashboard_settings($settings){
    //overwrite the theme's dashboard settings here. Others can be added later.
    $settings['hero_title'] = esc_html__( 'Welcome to Chad\'s child theme for Sydney', 'sydney-child' );
    return $settings;
}
add_filter( 'thd_register_settings', 'chad_sydney_dashboard_settings',999);//be sure to send a priority (this makes sure the filter runs after parent theme).



