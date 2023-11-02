<?php
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        "id" => 'footer',
        "name" => 'Footer Widgets',
        "description" => "Footer management tools",
        "before_widget" => '<div class="col-xl-6 col-lg6 col-md-6 col-sm-12 2 px-3 pb-3 mt-3">',
        "after_widget" => '</div>',
        "before_title" => '<h2 class="fot-tit">',
        "after_title" => '</h2>',
    ));
    register_sidebar(array(
        "id" => 'sidebar',
        "name" => 'sidebar Widgets',
        "description" => "sidebar management tools",
        "before_widget" => '<div>',
        "after_widget" => '</div>',
        "before_title" => '<h3 class="titel">',
        "after_title" => '</h3>',
    ));
}
?>