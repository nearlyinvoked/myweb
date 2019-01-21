<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function add_theme_scripts () {
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '', '', true);
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), '', true);

    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', false);
    wp_enqueue_style('custom-css', '/wp-content/themes/mytheme/mystylesheet.css');

}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

register_nav_menus( array(
    'top' => 'top-menu', 
));

?>
