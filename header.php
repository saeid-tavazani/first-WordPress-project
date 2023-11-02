<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
<body <?php body_class(); ?> id="style-1">
    <?php get_template_part('inc/loader'); ?>
    <nav class="navbar navbar-expand-lg fixed-top" id="menu">
        <div class="container" id="nav">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <?php the_custom_logo(); ?>
                    <?php
                    $title_menu = get_theme_mod("title_menu", false);
                    ?>
                    <?php if ($title_menu && !empty($title_menu)) : ?>
                        <a class="navbar-brand m-0 mx-2" href="<?php echo home_url() . '/'; ?>">
                            <?php echo $title_menu ?>
                        </a>
                    <?php endif ?>
                </div>
            </nav>
            <button class="navbar-toggler trigger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'Main_Menu',
                    'depth' => '2',
                )); ?>
            </div>
        </div>
    </nav>