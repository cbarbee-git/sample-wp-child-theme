<?php
function widget_posts_args_add_custom_type($params) {
    //override the default posttype here. append Books
    $params['post_type'] = array('post','book');
    return $params;
}
add_filter('widget_posts_args', 'widget_posts_args_add_custom_type');