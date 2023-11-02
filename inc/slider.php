<?php
$slider = new wp_Query(array(
    'post_type' => 'slider',
    'posts_per_page' => -1,
    'post_status' => 'publish',
));
if ($slider->have_posts()) {
?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade bor-b" data-bs-ride="carousel">
        <div class="carousel-inner slider">
            <?php
            $args = array(
                'post_type'         => 'slider',
                'posts_per_page' => -1,
            );
            $my_query = new WP_Query($args);
            $newslider = 0;
            while ($my_query->have_posts()) :
                $my_query->the_post();
                $do_not_duplicate = $post->ID; ?>
                <div class="carousel-item
            
                       <?php if ($newslider == 0) {
                            echo 'active';
                        } ?> img">
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100 img-fluid" alt="<?php the_title(); ?>">
                    <?php } ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php the_title(); ?></h5>
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
            <?php
                $newslider++;
            endwhile;
            wp_reset_postdata(); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php }
wp_reset_postdata(); ?>