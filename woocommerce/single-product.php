<?php get_header(); ?>
<div class="container" id="dp">
    <div class="row" id="mahsol">
        <?php if (have_posts()) { ?>
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 px-1 text-center" id="img_mahsol">
                    <div class="sh-img">
                        <?php woocommerce_template_loop_product_thumbnail() ?>
                    </div>
                    <div style="padding: 0 26px;">
                        <div class="galery scrollmenu" id="style-1">
                            <?php do_action('woocommerce_product_thumbnails'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 px-3" id="tex_mahsol">
                    <h2 class="mt-3"><?php the_title(); ?></h2>
                    <?php the_content() ?>
                    <span>قیمت : <?php woocommerce_template_loop_price() ?> </span>
                    <div id="sta-by" class="text-center">
                        <?php woocommerce_template_loop_add_to_cart(); ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <div class="cament">
        <?php comments_template(); ?>
    </div>
</div>
<?php get_footer(); ?>