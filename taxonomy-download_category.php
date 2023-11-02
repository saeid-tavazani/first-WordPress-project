<?php /* Template Name: shop-edd */ ?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" id="col-box">
                    <div class="card-catg">
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                        <?php } ?>
                        <div class="card-body-catg">
                            <h3><?php the_title(); ?></h3>
                            <span></span>
                            <span class="pna-di text-nowrap m-0 p-0" style="font-size: 14px;"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>
                            <p class="card-text-catg" style="margin-top: 3;">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <span>قیمت : <?php edd_price($post->ID); ?> </span>
                        </div>
                        <div class="text-center p-2" id="sta-by">
                            <a href="<?php the_permalink(); ?>" class="">sart</a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
        <div class="text-center m-5" id="nex-bac">
            <?php echo paginate_links(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>