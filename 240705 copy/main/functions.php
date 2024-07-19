<?php
function enqueue_custom_scripts() {
    wp_enqueue_style('custom-style', get_stylesheet_uri());
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/main_script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
?>
