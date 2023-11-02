<?php 
    $posts_cats = wp_get_post_categories( get_the_ID(), array( 'fields' => 'ids' ) );
    $releated_posts = new WP_Query(array(
        'post_type'=>'post',
        'posts_per_page'=>'5',
        'post_status'=>'publish',
        'category__in'=>$posts_cats,
        'post__not_in' =>array($post->ID),
        'orderby' => 'rand'
    ));
    if($releated_posts->have_posts()){
?>
<div class="releated_posts">
    <span class="releated_posts_span">مطالب مرتبط</span>
    <br>
    <?php while($releated_posts->have_posts()){ $releated_posts->the_post(); ?>
        <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-left"></i><?php the_title(); ?></a>
    <?php } wp_reset_postdata(); ?>
</div>
<?php } ?>