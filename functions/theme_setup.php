<?php
function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'Main_Menu' => 'menu_top',
        'Footer_Social' => 'social-network',
    ));
}
add_action("after_setup_theme", "theme_setup");
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
}
?>