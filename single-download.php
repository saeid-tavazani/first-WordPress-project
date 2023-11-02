<?php get_header(); ?>
<div class="container" id="dp">
    <div class="row" id="mahsol">
        <?php if (have_posts()) { ?>
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 px-1 text-center" id="img_mahsol">
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url(); ?>">
                    <?php } ?>
                </div>
                <div class=" col-xl-9 col-lg-9 col-md-12 col-sm-12 px-3" id="tex_mahsol">

                    <h2 class="mt-3"> <?php the_title() ?></h2>
                    <?php the_content() ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <div class="comments_box mt-5">
        <?php comments_template(); ?>
    </div>
</div>
<?php get_footer(); ?>