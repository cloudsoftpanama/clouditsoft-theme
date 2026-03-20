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