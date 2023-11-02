<?php /* Template Name: shop-edd */ ?>
<?php get_header(); ?>
<div class="container" id="dp">
    <div class="row">
        <?php
        $wp_query = new WP_Query(
            array(
                'post_type' => 'download',
                'posts_per_page' => $ef_number,
                'paged' => $paged,
            )
        ) ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" id="col-box">
                <div class="card-catg">
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                    <?php } ?>
                    <div class="card-body-catg">
                        <h3><?php the_title(); ?></h3>
                        <p class="card-text-catg">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <span>قیمت : <?php edd_price($post->ID); ?> </span>
                    </div>
                    <div class="text-center p-2" id="sta-by">
                        <a href="<?php the_permalink(); ?>" class="">start</a>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
        <div class="text-center m-5" id="nex-bac">
            <?php echo paginate_links(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>