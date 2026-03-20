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