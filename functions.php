<?php

function clouditsoft_assets() {

    wp_enqueue_style(
        'clouditsoft-style',
        get_template_directory_uri() . '/assets/css/styles.css',
        array(),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'clouditsoft_assets');

function clouditsoft_register_menus() {
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'clouditsoft-theme'),
  ));
}
add_action('after_setup_theme', 'clouditsoft_register_menus');


function cargar_scripts() {
    wp_enqueue_script('particles', 'https://cdn.jsdelivr.net/npm/particles.js', [], null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/script.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'cargar_scripts');