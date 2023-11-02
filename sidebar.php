<div class="col-xl-3 col-lg-3 col-sm-10 col-12 mt-4 sidpar">
    <h2 class="fot-tit">Search</h2>
    <?php get_search_form() ?>
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) : else : ?><?php endif; ?>
</div>