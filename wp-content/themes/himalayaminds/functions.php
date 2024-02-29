<?php
// Theme-specific functions here...

function enqueue_custom_styles()
{
    // Register the custom style
    wp_register_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', [], filemtime(get_template_directory() . '/assets/css/style.css'), 'all');

    // Enqueue the custom style
    wp_enqueue_style('custom-style');

    // Register Bootstrap CSS
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/library/bootstrap/css/bootstrap.min.css', [], '5.1.3', 'all');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css');
}

// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
