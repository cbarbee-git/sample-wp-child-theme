<?php
/**
 * Theme Dashboard
 *
 * @package Theme Dashboard
 */

/**
 * CHILD - Theme Dashboard class.
 */

/**
 * Include PARENT class to be extended
 */
//include_once get_template_directory() . '/theme-dashboard/class-theme-dashboard.php';


class Child_Sydney_Theme_Dashboard extends Sydney_Theme_Dashboard {
    /**
     * The settings of page.
     *
     * @var array $settings The settings.
     */
    public $settings = array(
        'hero_title'          => 'Welcome TETIN'
    );
}