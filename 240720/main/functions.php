<?php
// Enqueue custom CSS and JS for specific pages
function my_custom_page_assets()
{
    if (is_page_template('page-about.php')) {
        error_log(get_template_directory_uri() . '/page_folder/page_about/about-page-style.css');

        // For the "About" page template
        wp_enqueue_style('custom-style-about', get_template_directory_uri() . '/css/about-page-style.css');
        wp_enqueue_script('custom-script-about', get_template_directory_uri() . '/js/about-page-script.js', array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'my_custom_page_assets');
