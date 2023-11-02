<?php get_header(); ?>
<div class="container w-100" id="dp">
    <h3 style="border-bottom: 1px solid; padding: 5;">
        <?php if (is_search()) {
            echo "جستجو کردید برای : ";
            echo $_GET['s'];
        }
        ?>
    </h3>
    <?php if (have_posts()) { ?>
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="box-category">
                <?php if (has_post_thumbnail()) { ?>
                    <div class="box-img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php } ?>
                <div class="box-text">
                    <h2><?php the_title(); ?></h2>
                    <div style="padding: 5 0; font-size: 11px;">
                        <span class="pna-di text-nowrap"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>
                        <span class="pna- text-nowrap"><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?> نظر</span>
                        <span class="pna-di text-nowrap"><i class="fa fa-archive"></i><a> <?php the_category(" , "); ?></a></span>
                    </div>
                    <p>
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">ادامه مطلب</a>
                </div>
            </div>
        <?php } ?>
    <?php } else {
        echo "<p> نتیجه ای یافت نشد !</p>";
    } ?>
    <div class="text-center m-5" id="nex-bac">
        <?php echo paginate_links(); ?>
    </div>
</div>
<?php get_footer(); ?>