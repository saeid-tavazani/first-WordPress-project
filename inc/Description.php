<?php
$Description = new wp_Query(array(
    'post_type' => 'Services',
    'posts_per_page' => -1,
    'post_status' => 'Description',
));
if ($Description->have_posts()) {
?>
    <div class="container" style="border-top: 1px solid var(--coloe3);">
        <div class="row mt-5 mb-5 text-center align-items-center justify-content-center">
            <?php
            $args = array(
                'post_type' => 'Description',
                'posts_per_page' => -1,
            );
            $my_query = new WP_Query($args);
            $i = 0;
            while ($my_query->have_posts()) :
                $my_query->the_post();
                $do_not_duplicate = $post->ID;
            ?>
                <?php if ($i % 2 == 0) { ?>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-10 col-sm-10 col-12 p-3">
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="...">
                        <?php } ?>
                    </div>
                <?php
                    $i++;
                } else { ?>
                    <div class="col-xl-5 col-lg-5 col-md-10 col-sm-10 col-12 p-3">
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="...">
                        <?php } ?>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
            <?php
                    $i++;
                }
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
<?php }
wp_reset_postdata(); ?>