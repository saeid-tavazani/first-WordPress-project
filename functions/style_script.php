<?php
function theme_css_js()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], '1.0.1');
    wp_enqueue_style('style-theme', get_template_directory_uri() . '/css/style-theme.css', [], '1.0.1');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], '1.0.1');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', [], '1.0.41');
    wp_enqueue_script('js/bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('js/my', get_template_directory_uri() . '/js/my.js', [], '1.0.0', true);
    wp_enqueue_script('js/preloader', get_template_directory_uri() . '/js/preloader.js', [], '1.0.0', true);
}
add_action("wp_enqueue_scripts", "theme_css_js");
?>