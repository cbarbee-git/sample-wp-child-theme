<?php
function chad_shortcode_handler($atts, $content){
    $default = array(
        'class' => 'caption',
    );
    $a = shortcode_atts($default, $atts);
    //call to handle nested shortcodes
    return '<span class="'.$a['class'].'">' . do_shortcode($content) . '</span>';

}
add_shortcode( 'chadshortcode', 'chad_shortcode_handler' );