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

/**
 * Enqueues the Fontawesome from Parent (Sydney) theme
 *
 */
add_action('wp_enqueue_scripts','fontawesome_style_enqueue');
function fontawesome_style_enqueue(){
    //TODO: find the admin option to include this globally vs in the code.
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/font-awesome-v5/all.min.css');
}


/**
 * Include custom shortcode here.
 */
include_once ('custom-shortcodes.php');

/**
 * Include custom PostType widget here.
 */
include_once ('custom-posttype-widget.php');

//filter post_title to append type (if 'book')
add_filter('the_title', 'wpchad_filter_example', 10, 2);
function wpchad_filter_example($title ,$id) {
    //if posttype is 'book'                        go get the publication year here.
    return (get_post_type($id) == "book") ? '<i class="fas fa-book book-icon"></i>'. $title . ' published ('.get_field( "publication_year", $id , true)['value'].')' : $title ;
}

/**
 * CHILD - Theme dashboard.
 */
function chad_sydney_dashboard_settings($settings){
    //overwrite the theme's dashboard settings here. Others can be added later.
    $settings['hero_title'] = esc_html__( 'Welcome to Chad\'s child theme for Sydney', 'sydney-child' );
    return $settings;
}
add_filter( 'thd_register_settings', 'chad_sydney_dashboard_settings',999);//be sure to send a priority (this makes sure the filter runs after parent theme).



