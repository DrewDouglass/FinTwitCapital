<?php
/* enqueue scripts and style from parent theme */
function twentytwenty_styles()
{
    wp_enqueue_style('twentytwenty-style-child', get_template_directory_uri() . '/style.css');
    wp_add_inline_style('twentytwenty-style-child', twentytwenty_get_customizer_css('front-end'));
}
add_action('wp_enqueue_scripts', 'twentytwenty_styles');
