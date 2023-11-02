<?php // Template Name: single_cv 
?>
<?php get_header(); ?>
<?php
$wordpress_posts = new WP_Query(array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'category_name' => 'CV',
));

if ($wordpress_posts->have_posts()) { ?>
    <div id="cv">
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="img-cv">
                <div class="img-bk" style="background-image: url(img/pc.jpg);">
                </div>
                <div style="position: absolute;">
                    <?php if (has_post_thumbnail()) { ?>
                        <div id="Personnel">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php } ?>

                    <h3 class="text-nowrap text-center mt-4"><?php the_title(); ?></h3>
                </div>
            </div>
            <div class="container text-light mt-5 mb-5">
                <?php the_content(); ?>
            </div>
        <?php } ?>
    </div>
<?php }
wp_reset_postdata(); ?>
<?php get_footer(); ?>