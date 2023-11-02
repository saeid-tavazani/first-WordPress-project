<?php get_header(); ?>
<div class="container" id="single">
    <div class="row">
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="col-xl-9 col-lg-9 col-12 mt-3 text-single">
                <h2 class="titel">
                    <?php the_title() ?>
                </h2>
                <span class="pna-di"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>
                <span class="pna-di"><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?> نظر</span>
                <span class="pna-di"><i class="fa fa-archive"></i> <?php the_category(" , "); ?></a></span>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="mt-1">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php } ?>
                <?php the_content(); ?>
            </div>
        <?php }
        wp_reset_postdata(); ?>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>