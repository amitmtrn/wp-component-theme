<?php

add_action('wp_ajax_get_menu', 'get_menu');
add_action('wp_ajax_nopriv_get_menu', 'get_menu');

function get_menu() {

    $theme_location = filter_input(INPUT_POST, 'theme_location', FILTER_SANITIZE_STRING);
    $container_class = filter_input(INPUT_POST, 'container_class', FILTER_SANITIZE_STRING);

    if (isset($container_class)) {
        $args['container_class'] = $container_class;
    }
    if (isset($theme_location)) {
        $args['theme_location'] = $theme_location;
    }

    wp_nav_menu($args);
    die('');
}
