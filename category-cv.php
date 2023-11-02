<?php // Template Name: category_cv 
?>
<?php get_header(); ?>

<?php
$wordpress_posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'category_name' => 'CV',
));
if ($wordpress_posts->have_posts()) { ?>
    <div class="container" id="dp">
        <div class="row">
            <?php while ($wordpress_posts->have_posts()) {
                $wordpress_posts->the_post(); ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" id="col-box">
                    <div class="card-catg-cv">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="text-center mt-2 mb-2">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-cv" alt="<?php the_title(); ?>">
                            </div> <?php } ?>
                        <div class="card-body-catg">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text mb-3"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary mb-3">بیشتر</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
wp_reset_postdata(); ?>
<?php get_footer(); ?>