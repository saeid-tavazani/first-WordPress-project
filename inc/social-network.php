<div class="2 px-2 pt-3" id="medya">
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <?php
        $text_foot = get_theme_mod("text_foot", false);
        ?>
        <?php if ($text_foot && !empty($text_foot)) : ?>
            <p> <?php echo $text_foot ?></p>
        <?php endif ?>
    </div>
    <div class="col-lx-3 col-lg-3 col-md-12 col-sm-12 col-12 menu_fa">
        <?php wp_nav_menu(array(
            'theme_location' => 'Footer_Social',
            'depth' => '1',
        )); ?>
    </div>
</div>