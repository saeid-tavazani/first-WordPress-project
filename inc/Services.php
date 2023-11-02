 <?php
    $Services = new wp_Query(array(
        'post_type' => 'Services',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    ));
    if ($Services->have_posts()) {
    ?>
     <div class="container mt-4 bor-b">
         <div class="row text-center justify-content-center pb-2">
             <?php $title_services = get_theme_mod("title_services", false); ?>
             <?php if ($title_services != "") ?>
             <h2> <?php echo $title_services ?></h2>
             <?php
                $args = array(
                    'post_type' => 'Services',
                    'posts_per_page' => -1,
                );
                $my_query = new WP_Query($args);
                while ($my_query->have_posts()) :
                    $my_query->the_post();
                    $do_not_duplicate = $post->ID;
                ?>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-3 pd">
                     <div class="card-Introduction">
                         <div>
                             <?php if (has_post_thumbnail()) { ?>
                                 <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top img-fluid" alt="...">
                             <?php } ?>
                         </div>
                         <div class="card-body">
                             <h2><?php the_title(); ?></h2>
                             <p class="card-text">
                                 <?php echo get_the_excerpt(); ?>
                             </p>
                         </div>
                     </div>
                 </div>
             <?php endwhile;
                wp_reset_postdata(); ?>
         </div>
     </div>
 <?php }
    wp_reset_postdata(); ?>