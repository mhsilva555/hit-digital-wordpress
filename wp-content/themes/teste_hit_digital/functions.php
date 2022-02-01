<?php

define('INCLUDE_URI', get_template_directory_uri());
define('INCLUDE_PATH', get_template_directory());

require_once INCLUDE_PATH . '/inc/ajax_send_email.php';
require_once INCLUDE_PATH . '/inc/clean-code.php';

function load_scripts() {
    wp_enqueue_style('estilos', INCLUDE_URI.'/resources/css/estilos.css', array(), filemtime(INCLUDE_PATH.'/resources/css/estilos.css'), 'all');

    wp_enqueue_script('app', INCLUDE_URI.'/resources/js/app.js', array('jquery'), filemtime(INCLUDE_PATH.'/resources/js/app.js'), true);

    wp_localize_script('app', 'wp', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'home_url' => home_url(),
        'current_page' => get_queried_object()->post_name,
    ));
}
add_action('wp_enqueue_scripts', 'load_scripts');