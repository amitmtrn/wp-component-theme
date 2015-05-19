<?php

require_once dirname(__FILE__) . '/api.php';

function sponzrit_scripts() {
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_script('riotjs', get_template_directory_uri() . '/resources/riot.min.js', array(), '2.0.15', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/app.js', array('riotjs', 'jquery'), '15.5.16', true);
}

add_action('wp_enqueue_scripts', 'sponzrit_scripts');

function add_ajaxurl() {
    include_once dirname(__FILE__) . '/ajaxurl.php';
}

add_action('wp_head', 'add_ajaxurl');
